@extends('dashboard.sidebar')
@extends('dashboard._codeEdit')
@section('title')
    create Expert
@endsection
@section('title_principale')
Expert 
@endsection

@section('content')
<div class="card-body">
    <form action="{{route('experts.update', $expert->id)}}" method="POST" enctype="multipart/form-data">
        <a onclick="return confirm('Voulez-vous annuler la modification de cet expert ?');" href="{{route('experts.index')}}" class="btn btn-secondary btn-lg my-3">Précédent</a>
        <button class="btn btn-success btn-lg my-3">Modifier</button>
        @csrf
        @method('PUT')
        <div class="form-row d-flex justify-content-around my-2">
            <div class="form-group col-md-4">
                <label for="name">name</label>
                <input type="text" class="form-control" value="{{$expert->name}}" name="name" placeholder="Nom">
            </div>
            <div class="form-group col-md-4">
                <label for="first_name">first name</label>
                <input type="text" class="form-control" value="{{$expert->first_name}}" name="first_name" placeholder="Prénom">
            </div>
        </div>
        <div class="form-row d-flex justify-content-around my-2">
            <div class="form-group col-md-4">
                <label for="email">Email</label>
                <input type="email" class="form-control" value="{{$expert->email}}" name="email" placeholder="Email">
            </div>
            <div class="form-group col-md-4">
                <label for="phone">phone</label>
                <input type="text" class="form-control" value="{{$expert->phone}}" name="phone" placeholder="Téléphone">
            </div>
        </div>
        <div class="form-row d-flex justify-content-around my-2">
            <div class="form-group col-md-8">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" placeholder="Description">{{$expert->description}}</textarea>
            </div>
        </div>
        <div class="form-row d-flex justify-content-around mt-4">
            <div class="form-group col-md-4">
                <label for="photo">Photo</label>
                <input type="file" class="form-control-file" name="photo">
            </div>
        </div>
    </form>
</div>
@endsection
