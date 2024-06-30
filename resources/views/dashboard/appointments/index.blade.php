@extends('dashboard.sidebar')
@section('title')
Appointments
@endsection
@section('title_principale')
    Appointment
@endsection
@section('content')
{{-- <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg "> --}}
<div class="container my-4">
            
    <a href="{{ route('appointments.create')}}" class="btn btn-success btn-lg my-3">Ajouter </a>
    <table class="table table-hover text-center">
        <thead class="table-info">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Date</th>
            <th scope="col">Statut</th>
            <th scope="col">Client</th>
            <th scope="col">Expert</th>
            <th scope="col">Actions</th> 
          </tr>
        </thead>
        <tbody>
          @foreach ($appointments as $appointment)
          <tr>
            <th scope="row">{{$appointment->id}}</th>
            <td>{{$appointment->date}}</td>
            <td>{{$appointment->status}}</td>
            <td>{{$appointment->client->name}} {{$appointment->client->first_name}}</td>
            <td>{{$appointment->expert->name}} {{$appointment->expert->first_name}}</td>
            <td>
                <a href="{{route('appointments.show',$appointment->id)}}" class="btn btn-sm btn-info">Voir</a>
                <a href="{{route('appointments.edit',$appointment->id)}}" class="btn btn-sm btn-warning">Modifier</a>
                <form class="d-inline" action="{{route('appointments.destroy',$appointment->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button onclick="return confirm('Voulez-vous supprimer le rendez-vous n°{{$appointment->id}}?');" class="btn btn-sm btn-danger">Supprimer</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
{{-- </main> --}}
@endsection
