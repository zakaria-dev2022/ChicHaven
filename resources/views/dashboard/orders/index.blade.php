@extends('dashboard.sidebar')
@section('title')
    Orders
@endsection
@section('title_principale')
Order 
@endsection
@section('content')
{{-- <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg "> --}}
<div class="container my-4">
            
    <a href="{{ route('orders.create')}}" class="btn btn-success btn-lg my-3">Ajouter </a>
    <table class="table table-hover text-center">
        <thead class="table-info">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Prix</th>
            <th scope="col">Quantité</th>
            <th scope="col">Client</th>
            <th scope="col">Articles</th>
            <th scope="col">Actions</th> 
          </tr>
        </thead>
        <tbody>
          @foreach ($orders as $order)
          <tr>
            <th scope="row">{{$order->id}}</th>
            <td>{{$order->price}}</td>
            <td>{{$order->Quantity}}</td>
            <td>{{$order->client->name}} {{$order->client->first_name}}</td>
            <td>
              {{$order->article->genre}} 
                      {{-- {{$order->article->genre}} - {{$order->article->description}} --}}
            </td>
            <td>
                <a href="{{route('orders.show',$order->id)}}" class="btn btn-sm btn-info">Voir</a>
                <a href="{{route('orders.edit',$order->id)}}" class="btn btn-sm btn-warning">Modifier</a>
                <form class="d-inline" action="{{route('orders.destroy',$order->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button onclick="return confirm('Voulez-vous supprimer la commande n°{{$order->id}}?');" class="btn btn-sm btn-danger">Supprimer</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
{{-- </main> --}}
@endsection
