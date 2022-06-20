@extends('base')

@section('content')
    
<section class="rendez-vous-selectionne">


<a href="{{route('appointment')}}" class="btn-retour"><i class="fa-solid fa-arrow-left"></i></a>
    
<div class="container-rdv-form">

    <form method="POST" action="{{route('appointmentSelect', $appointment)}}" class="reservation">
        @csrf
        {{-- <input type="text" name="client"> --}}
        <button type="submit">valider le rendez-vous</button>
    </form>

    <div class="card">
        <h5 class="date-rdv"><i class="fa-solid fa-calendar-day mx-2"></i>{{ date('d-M-Y', strtotime(($appointment->date)))}}</h5>
        <p class="heure-rdv"><i class="fa-solid fa-clock mx-2" ></i>{{ date('h:m', strtotime(($appointment->horaire)))}}</p>
        <p class="veterinaire-rdv">Vétérinaire : {{$appointment->veterinaire}}</p>
    </div>
</div>

</section>

@endsection