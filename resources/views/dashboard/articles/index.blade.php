@extends('dashboard.sidebar')
@section('title')
    Articles
@endsection
@section('title_principale')
Article 
@endsection
@section('content')
{{-- <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg "> --}}
<div class="container my-4">
            
    <a href="{{ route('articles.create')}}" class="btn btn-success btn-lg my-3">Ajouter </a>
    <table class="table table-hover text-center">
        <thead class="table-info">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Genre</th>
            <th scope="col">Prix</th>
            <th scope="col">Description</th>
            <th scope="col">Photo</th>  
            <th scope="col">Actions</th> 
          </tr>
        </thead>
        <tbody>
          @foreach ($articles as $article)
          <tr>
            <th scope="row">{{$article->id}}</th>
            <td>{{$article->genre}}</td>
            <td>{{$article->price}}</td>
            <td>{{$article->description}}</td>
            <td><img src="{{ asset($article->photo) }}" alt="Photo de l'article" style="max-width: 100px; max-height: 100px;"></td>
            <td>
                <a href="{{route('articles.show',$article->id)}}" class="btn btn-sm btn-info">Voir</a>
                <a href="{{route('articles.edit',$article->id)}}" class="btn btn-sm btn-warning">Modifier</a>
                <form class="d-inline" action="{{route('articles.destroy',$article->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button onclick="return confirm('Voulez-vous supprimer l\'article {{$article->genre}}?');" class="btn btn-sm btn-danger">Supprimer</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
{{-- </main> --}}
@endsection
