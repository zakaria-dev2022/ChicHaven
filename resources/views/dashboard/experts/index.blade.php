@extends('dashboard.sidebar')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Photo</th>
        <th scope="col">Description</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($experts as $expert)
      <tr>
        <th scope="row">{{ $expert->id }}</th>
        <td>{{ $expert->name }}</td>
        <td>{{ $expert->email }}</td>
        <td>{{ $expert->phone }}</td>
        <td><img src="{{ $expert->photo }}" alt="" width="80px" height="70px"></td>
        <td>{{ $expert->description }}</td>
        <td>
          <a href="{{ route('experts.show', $expert->id) }}" class="btn btn-sm btn-info px3">C</a>
          <a href="{{ route('experts.edit', $expert->id) }}" class="btn btn-sm btn-warning px- my-">M</a>
          <form class="d-inline" action="{{ route('experts.destroy', $expert->id) }}" method="post">
            @method('DELETE')
            @csrf
            <button onclick="return confirm('Voulez-vous supprimer cet expert ?');" class="btn btn-sm btn-danger px-">S</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
@endsection