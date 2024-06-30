@extends('dashboard.sidebar')
@extends('dashboard._codeEdit')

@section('title')
    Edit Appointment
@endsection

@section('title_principale')
    Appointment
@endsection

@section('content')
<div class="card-body">
    <form action="{{ route('appointments.update', $appointment->id) }}" method="POST">
        <a onclick="return confirm('Voulez-vous annuler la modification de ce rendez-vous ?');" href="{{ route('appointments.index') }}" class="btn btn-secondary btn-lg my-3">Précédent</a>
        <button type="submit" class="btn btn-success btn-lg my-3">Modifier</button>
        @csrf
        @method('PUT')
        <div class="form-row d-flex justify-content-around my-2">
            <div class="form-group col-md-4">
                <label for="date">Date</label>
                <input type="text" class="form-control" value="{{ $appointment->date }}" name="date" placeholder="Date">
            </div>
            <div class="form-group col-md-4">
                <label for="status">Statut</label>
                <select class="form-control" name="status">
                    <option value="pending" {{$appointment->status == "pending" ? 'selected' : ''}}>En attente</option>
                    <option value="confirmed"  {{$appointment->status == "confirmed" ? 'selected' : ''}}>Confirmé</option>
                    <option value="cancelled"  {{$appointment->status == "cancelled" ? 'selected' : ''}}>Annulé</option>
                </select>
            </div>
        </div>
        <div class="form-row d-flex justify-content-around my-2">
            <div class="form-group col-md-4">
                <label for="client_id">Client</label>
                <select class="form-control" name="client_id">
                    @foreach($clients as $client)
                        <option value="{{$client->id}}" {{$appointment->client_id == $client->id ? 'selected' : ''}}>{{$client->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="expert_id">Expert</label>
                <select class="form-control" name="client_id">
                    @foreach($experts as $expert)
                        <option value="{{$expert->id}}" {{$appointment->expert_id == $expert->id ? 'selected' : ''}}>{{$expert->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </form>
</div>
@endsection
