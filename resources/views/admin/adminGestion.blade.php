@extends('base')

@section('content')
{{-- @include('incs.navbarAdmin') --}}

<div class="container">
@include('incs.flash')
    <h1 class="titre-custom">Rendez-vous</h1>
    <div class="d-flex justify-content-center">
        <a href="{{route('admin.create')}}" class="btn btn-info my-5">Ajouter un rendez-vous<br></i> </a>
        
    </div>

    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Date</th>
      <th scope="col">Horaire</th>
      <th scope="col">Vétérinaire</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($appointments as $appointment )
    <tr>
      <th>{{$appointment->id}}</th>
      <td>{{ date('d-M-Y', strtotime(($appointment->date)))}}</td>
      <td>{{ date('h:m', strtotime(($appointment->horaire)))}}</td>
      <td>{{$appointment->veterinaire}}</td>
      <td class="d-flex">
          {{-- <a href="#" class="btn btn-warning mx-3">Editer</a> --}}
          <form action="{{route('admin.delete', $appointment->id)}}" method="post">
            @method("DELETE")
            @csrf
              <button class='btn btn-danger' type="submit">Supprimer</button>
          </form>
      </td>
    </tr>
        
    @endforeach
  </tbody>
</table>
</div>













@endsection