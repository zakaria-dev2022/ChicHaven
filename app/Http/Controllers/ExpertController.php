<?php

namespace App\Http\Controllers;

use App\Models\Expert;
use Illuminate\Http\Request;

class ExpertController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experts = Expert::all();
        return view('dashboard.experts.index', compact('experts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.experts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Expert::create($request->all());
        return redirect()->route('experts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $expert = Expert::find($id);
        return view('dashboard.experts.show', compact('expert'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $expert = Expert::find($id);
        return view('dashboard.experts.edit', compact('expert'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $expert = Expert::find($id);
        $expert->update($request->all());
        return redirect()->route('experts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $expert = Expert::find($id);
        $expert->delete();
        return redirect()->route('experts.index');
    }
}
