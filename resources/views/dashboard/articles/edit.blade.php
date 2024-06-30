@extends('dashboard.sidebar')
@extends('dashboard._codeEdit')
@section('title')
    Edit Article
@endsection
@section('title_principale')
Article
@endsection

@section('content')
<div class="card-body">
    <form action="{{route('articles.update', $article->id)}}" method="POST" enctype="multipart/form-data">
        <a onclick="return confirm('Voulez-vous annuler la modification de cet article ?');" href="{{route('articles.index')}}" class="btn btn-secondary btn-lg my-3">Précédent</a>
        <button class="btn btn-success btn-lg my-3">Modifier</button>
        @csrf
        @method('PUT')
        <div class="form-row d-flex justify-content-around my-2">
            <div class="form-group col-md-4">
                <label for="genre">Genre</label>
                <input type="text" class="form-control" value="{{$article->genre}}" name="genre" placeholder="Genre">
            </div>
            <div class="form-group col-md-4">
                <label for="price">Price</label>
                <input type="text" class="form-control" value="{{$article->price}}" name="price" placeholder="Price">
            </div>
        </div>
        <div class="form-row d-flex justify-content-around my-2">
            <div class="form-group col-md-8">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" placeholder="Description">{{$article->description}}</textarea>
            </div>
        </div>
        <div class="form-row d-flex justify-content-around mt-4">
            <div class="form-group col-md-4">
                <label for="photo">Photo</label>
                <input type="file" class="form-control-file" name="photo">
                @if($article->photo)
                    <img src="{{ asset($article->photo) }}" class="img-fluid mt-2" alt="Current Photo">
                @endif
            </div>
        </div>
    </form>
</div>
@endsection
