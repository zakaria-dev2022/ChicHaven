@extends('dashboard.sidebar')
@extends('dashboard._coderesource')
@section('title')
    create Client
@endsection
@section('title_principale')
Client 
@endsection
@section('content')
<div class="card-body container ">
  <form action="{{ route('clients.store') }}" method="POST">
    <a onclick="return confirm('Voulez-vous annuler l\'ajout d\'un client ?');" href="{{ route('clients.index') }}" class="btn btn-secondary btn-lg my-3">Précédent </a>
    <button class="btn btn-primary btn-lg my-3">Ajouter</button>
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name">Nom</label>
            <input type="text" class="form-control" name="name" placeholder="Nom">
        </div>
        <div class="form-group col-md-6">
            <label for="first_name">Prénom</label>
            <input type="text" class="form-control" name="first_name" placeholder="Prénom">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
            <label for="address">Adresse</label>
            <input type="text" class="form-control" name="address" placeholder="Adresse">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="phone">Téléphone</label>
            <input type="text" class="form-control" name="phone" placeholder="Téléphone">
        </div>
        <div class="form-group col-md-6">
            <label for="cin">CIN</label>
            <input type="text" class="form-control" name="cin" placeholder="CIN">
        </div>
    </div>
    {{-- Ajouter d'autres champs si nécessaire --}}
</form>
</div>
@endsection
