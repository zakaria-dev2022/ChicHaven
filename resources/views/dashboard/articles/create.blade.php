@extends('dashboard.sidebar')
@extends('dashboard._coderesource')
@section('title')
    create Article
@endsection
@section('title_principale')
Article 
@endsection
@section('content')
<div class="card-body">
  <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
    <a onclick="return confirm('Voulez-vous annuler l\'ajout d\'un article ?');" href="{{ route('articles.index') }}" class="btn btn-secondary btn-lg my-3">Précédent </a>
    <button class="btn btn-primary btn-lg my-3">Ajouter</button>
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="genre">Genre</label>
            <input type="text" class="form-control" name="genre" placeholder="Genre">
        </div>
        <div class="form-group col-md-6">
            <label for="price">Prix</label>
            <input type="text" class="form-control" name="price" placeholder="Prix">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" rows="3" placeholder="Description"></textarea>
        </div>
        <div class="form-group col-md-6">
            <label for="photo">Photo</label>
            <input type="file" class="form-control-file" name="photo">
        </div>
    </div>
    {{-- Ajouter d'autres champs si nécessaire --}}
</form>
</div>
@endsection
