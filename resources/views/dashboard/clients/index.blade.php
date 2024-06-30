@extends('dashboard.sidebar')
@section('content')
<a href="{{route('clients.create')}}" class="btn btn- my-4 px-5 btn-primary">ajouter</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nom_entreprise</th>
      <th scope="col">nom_directeur</th>
      <th scope="col">nom_contact</th>
      <th scope="col">tel</th>
      <th scope="col">email</th>
      <th scope="col">copy_fiscale</th>
      <th scope="col">copy_bancaire</th>
      <th scope="col">actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($clients as $client)
    <tr>
      <th scope="row">{{$client->id}}</th>
      <td>{{$client->nom_entreprise}}</td>
      <td>{{$client->nom_contact}}</td>
      <td>{{$client->fonction}}</td>
      <td>{{$client->nom_directeur}}</td>
      <td>{{$client->email}}</td>
      <td><img src="{{$client->copy_fiscale}}" alt="" width="80px" height="70px"></td>
      <td><img src="{{$client->copy_bancaire}}" alt="" width="80px" height="70px"></td>
      <td > 
        <a href="{{route('clients.show',$client->id)}}" class="btn btn-sm btn-info px3">C</a>
        <a href="{{route('clients.edit',$client->id)}}" class="btn btn-sm btn-warning px- my-">M</a>
        <form class="d-inline" action="{{route('clients.destroy',$client->id)}}" method="post">
        @method('DELETE')
        @csrf
        <button  onclick="return confirm('Voulez-vous supprimer le client ?');" class="btn btn-sm btn-danger px-">S</button>
        </form>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection