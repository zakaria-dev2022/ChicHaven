@extends('dashboard.sidebar')
@extends('dashboard._codeEdit')
@section('title')
    Edit Order
@endsection
@section('title_principale')
Order
@endsection

@section('content')
<div class="card-body">
    <form action="{{route('orders.update', $order->id)}}" method="POST" enctype="multipart/form-data">
        <a onclick="return confirm('Voulez-vous annuler la modification de cette commande ?');" href="{{route('orders.index')}}" class="btn btn-secondary btn-lg my-3">Précédent</a>
        <button class="btn btn-success btn-lg my-3">Modifier</button>
        @csrf
        @method('PUT')
        <div class="form-row d-flex justify-content-around my-2">
            <div class="form-group col-md-4">
                <label for="price">Price</label>
                <input type="text" class="form-control" value="{{$order->price}}" name="price" placeholder="Price">
            </div>
            <div class="form-group col-md-4">
                <label for="Quantity">Quantity</label>
                <input type="text" class="form-control" value="{{$order->Quantity}}" name="Quantity" placeholder="Quantity">
            </div>
        </div>
        <div class="form-row d-flex justify-content-around my-2">
            <div class="form-group col-md-4">
                <label for="client_id">Client</label>
                <select class="form-control" name="client_id">
                    @foreach($clients as $client)
                        <option value="{{$client->id}}" {{$order->client_id == $client->id ? 'selected' : ''}}>{{$client->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="article_id">Article</label>
                <select class="form-control" name="article_id">
                    @foreach($articles as $article)
                        <option value="{{$article->id}}" {{$order->article_id == $article->id ? 'selected' : ''}}>{{$article->genre}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </form>
</div>
@endsection
