@extends('dashboard.sidebar')
@extends('dashboard._coderesource')
@section('title')
    create Appointment
@endsection
@section('title_principale')
    Appointment
@endsection
@section('content')
<div class="card-body">
  <form action="{{ route('appointments.store') }}" method="POST">
    <a onclick="return confirm('Voulez-vous annuler l\'ajout d\'un rendez-vous ?');" href="{{ route('appointments.index') }}" class="btn btn-secondary btn-lg my-3">Précédent </a>
    <button class="btn btn-primary btn-lg my-3">Ajouter</button>
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="date">Date</label>
            <input type="date" class="form-control" name="date" placeholder="Date">
        </div>
        <div class="form-group col-md-6">
            <label for="status">Statut</label>
            <input type="text" class="form-control" name="status" placeholder="Statut">
        </div>
    </div>
    {{-- Ajouter d'autres champs si nécessaire --}}
</form>
</div>
@endsection
