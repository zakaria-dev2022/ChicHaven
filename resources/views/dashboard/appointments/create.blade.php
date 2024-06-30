@extends('dashboard.sidebar')
@extends('dashboard._coderesource')

@section('title')
    Créer un Rendez-vous
@endsection

@section('title_principale')
    Rendez-vous
@endsection

@section('content')
<div class="card-body container">
    <form action="{{ route('appointments.store') }}" method="POST">
        <a onclick="return confirm('Voulez-vous annuler l\'ajout d\'un rendez-vous ?');" href="{{ route('appointments.index') }}" class="btn btn-secondary btn-lg my-3">Précédent</a>
        <button class="btn btn-primary btn-lg my-3">Ajouter</button>
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="date">Date</label>
                <input type="date" class="form-control" name="date">
            </div>
            <div class="form-group col-md-6">
                <label for="status">Statut</label>
                <select class="form-control" name="status">
                    <option value="pending">En attente</option>
                    <option value="confirmed">Confirmé</option>
                    <option value="cancelled">Annulé</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="client_id">Client</label>
                <select class="form-control" name="client_id">
                    @foreach ($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="expert_id">Expert</label>
                <select class="form-control" name="expert_id">
                    @foreach ($experts as $expert)
                    <option value="{{ $expert->id }}">{{ $expert->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        {{-- Ajouter d'autres champs si nécessaire --}}
    </form>
</div>
@endsection
