@extends('dashboard.sidebar')
@extends('dashboard._coderesource')
@section('title')
    create Expert
@endsection
@section('title_principale')
Expert 
@endsection
@section('content')
<div class="card-body">
  <form action="{{route('experts.store') }}" method="POST" enctype="multipart/form-data">
    <a onclick="return confirm('Voulez-vous annuler l\'ajout d\'un expert ?');" href="{{ route('experts.index') }}" class="btn btn-secondary btn-lg my-3">Précédent </a>
    <button class="btn btn-primary btn-lg my-3">Ajouter</button>
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name">name</label>
            <input type="text" class="form-control" name="name" placeholder="Nom">
        </div>
        <div class="form-group col-md-6">
            <label for="first_name"> first name</label>
            <input type="text" class="form-control" name="first_name" placeholder="Prénom">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
            <label for="phone">Téléphone</label>
            <input type="text" class="form-control" name="phone" placeholder="Téléphone">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="photo">Photo</label>
            <input type="file" class="form-control-file" name="photo">
        </div>
        <div class="form-group col-md-6">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" rows="3" placeholder="Description"></textarea>
        </div>
    </div>
    {{-- Ajouter d'autres champs si nécessaire --}}
</form>
</div>
@endsection
