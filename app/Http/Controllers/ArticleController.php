<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('dashboard.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Article::create($request->all());
        // return redirect()->route('articles.index');

          // Validation des données du formulaire
    $request->validate([
        'genre' => 'required|string|max:255',
        'price' => 'required|numeric',
        'description' => 'required|string',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Déplacement et enregistrement de l'image
    $dossier = 'img_article';
    $nom_photo = time() . '_' . $request->photo->getClientOriginalName(); // Nom unique pour éviter les conflits

    $request->photo->move(public_path($dossier), $nom_photo);

    // Création de l'article avec les données du formulaire et le chemin de l'image
    $article = new Article();
    $article->genre = $request->genre;
    $article->price = $request->price;
    $article->description = $request->description;
    $article->photo = $dossier . '/' . $nom_photo; // Chemin relatif de l'image
    $article->save();

    // Redirection vers la liste des articles (index)
    return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::find($id);
        return view('dashboard.articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::find($id);
        return view('dashboard.articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $article=Article::find($id);
        $dossier='img_article';
        $nom_photo=time().'article'.'.'.$request->photo->extension();
        $request->photo->move(public_path($dossier),$nom_photo);
        $data=$request->all();
        $data['photo']=$dossier.'/'.$nom_photo;
        $article->update($data);
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect()->route('articles.index');
    }
}
