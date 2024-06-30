@extends('dashboard.sidebar')
@extends('dashboard._codeEdit')

@section('title')
    Edit Client
@endsection

@section('title_principale')
    Client
@endsection

@section('content')
<div class="card-body">
    <form action="{{ route('clients.update', $client->id) }}" method="POST">
        <a onclick="return confirm('Voulez-vous annuler la modification de ce client ?');" href="{{ route('clients.index') }}" class="btn btn-secondary btn-lg my-3">Précédent</a>
        <button type="submit" class="btn btn-success btn-lg my-3">Modifier</button>
        @csrf
        @method('PUT')
        <div class="form-row d-flex justify-content-around my-2">
            <div class="form-group col-md-4">
                <label for="name">Name</label>
                <input type="text" class="form-control" value="{{ $client->name }}" name="name" placeholder="Name">
            </div>
            <div class="form-group col-md-4">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" value="{{ $client->first_name }}" name="first_name" placeholder="First Name">
            </div>
        </div>
        <div class="form-row d-flex justify-content-around my-2">
            <div class="form-group col-md-4">
                <label for="email">Email</label>
                <input type="email" class="form-control" value="{{ $client->email }}" name="email" placeholder="Email">
            </div>
            <div class="form-group col-md-4">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" value="{{ $client->phone }}" name="phone" placeholder="Phone">
            </div>
        </div>
        <div class="form-row d-flex justify-content-around my-2">
            <div class="form-group col-md-4">
                <label for="address">Address</label>
                <input type="text" class="form-control" value="{{ $client->address }}" name="address" placeholder="Address">
            </div>
            <div class="form-group col-md-4">
                <label for="cin">CIN</label>
                <input type="text" class="form-control" value="{{ $client->cin }}" name="cin" placeholder="CIN">
            </div>
        </div>
        <div class="form-row d-flex justify-content-around my-2">
            
        </div>
    </form>
</div>
@endsection
