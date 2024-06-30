@extends('dashboard.sidebar')
@extends('dashboard._coderesource')
@section('title')
    Create Order 
@endsection
@section('title_principale')
Order 
@endsection


@section('content')
<div class="container">
    <h1>Créer une nouvelle commande</h1>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="price">Prix</label>
            <input type="number" class="form-control" name="price" required>
        </div>
        <div class="form-group">
            <label for="Quantity">Quantité</label>
            <input type="number" class="form-control" name="Quantity" required>
        </div>
        <div class="form-group">
            <label for="client_id">Client</label>
            <select class="form-control" name="client_id" required>
                @foreach($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->name }} {{ $client->first_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="article_id">Article</label>
            <select class="form-control" name="article_id" required>
                @foreach($articles as $article)
                    <option value="{{ $article->id }}">{{ $article->genre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
</div>
@endsection

