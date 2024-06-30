@extends('dashboard.sidebar')
@section('title')
    Experts
@endsection
@section('title_principale')
Expert 
@endsection
@section('content')
{{-- <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg "> --}}
<div class="container my-4">
    <a href="{{ route('experts.create')}}" class="btn btn-success btn-lg my-3">Ajouter </a>
    <table class="table table-hover text-center">
        <thead class="table-info">
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">first name</th>
            <th scope="col">Email</th>
            <th scope="col">phone</th>  
            <th scope="col">Photo</th> 
            <th scope="col">Description</th> 
            <th scope="col">Actions</th> 
          </tr>
        </thead>
        <tbody>
          @foreach ($experts as $expert)
          <tr>
            <th scope="row">{{$expert->id}}</th>
            <td>{{$expert->name}}</td>
            <td>{{$expert->first_name}}</td>
            <td>{{$expert->email}}</td>
            <td>{{$expert->phone}}</td>
            <td><img src="{{ asset($expert->photo) }}" alt="Photo de l'expert" style="max-width: 100px; max-height: 100px;"></td>
            <td>{{$expert->description}}</td>
            <td>
                <a href="{{route('experts.show',$expert->id)}}" class="btn  btn-info">S</a>
                <a href="{{route('experts.edit',$expert->id)}}" class="btn  btn-warning">M</a>
                <form class="d-inline" action="{{route('experts.destroy',$expert->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button onclick="return confirm('Voulez-vous supprimer l\'expert {{$expert->name}} {{$expert->first_name}}?');" class="btn  btn-danger">D</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
{{-- </main> --}}
@endsection
