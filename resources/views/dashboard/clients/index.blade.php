@extends('dashboard.sidebar')
@section('title')
    Clients
@endsection
@section('title_principale')
Client 
@endsection
@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
<div class="container my-4">
            
    <a href="{{ route('clients.create')}}" class="btn btn-success btn-lg my-3">Ajouter </a>
    <table class="table table-hover text-center">
        <thead class="table-info ">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Cin</th>
            <th scope="col">Téléphone</th>  
            <th scope="col">Adresse</th> 
            <th scope="col">Actions</th> 
          </tr>
        </thead>
        <tbody>
          @foreach ($clients as $client)
          <tr>
            <th scope="row">{{$client->id}}</th>
            <td>{{$client->name}}</td>
            <td>{{$client->first_name}}</td>
            <td>{{$client->cin}}</td>
            <td>{{$client->phone}}</td>
            <td>{{$client->address}}</td>
            <td>
                <a href="{{route('clients.show',$client->id)}}" class="btn btn-sm btn-info">Voir</a>
                <a href="{{route('clients.edit',$client->id)}}" class="btn btn-sm btn-warning">Modifier</a>
                <form class="d-inline" action="{{route('clients.destroy',$client->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button onclick="return confirm('Voulez-vous supprimer le client {{$client->name}} {{$client->first_name}}?');" class="btn btn-sm btn-danger">Supprimer</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
</main>
@endsection
