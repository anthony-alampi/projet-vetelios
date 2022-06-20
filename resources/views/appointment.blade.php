@extends('base')

@section('content')
<section class="rendez-vous">
<h1 class='titre-custom'>Rendez-vous disponible</h1>
        <div class="rdv-nav-bottom ">

            @foreach ($appointments as $appointment ) {{--extrait chaque rendez-vous contenu dans le tableau --}}
                <div class="container-cards">
                    
                    <div class="cards">
                        <h5 class="date-rdv"><i class="fa-solid fa-calendar-day mx-2"></i>{{ date('d-M-Y', strtotime(($appointment->date)))}}</h5>
                        <p class="heure-rdv"><i class="fa-solid fa-clock mx-2"></i>{{ date('h:m', strtotime(($appointment->horaire)))}}</p>
                        <p class="veterinaire-rdv">Vétérinaire : {{$appointment->veterinaire}}</p>
                        @if (Auth::user())
                            <a href="{{route('appointmentSelect', $appointment->slug)}}" class="btn-rdv">Prendre ce rendez-vous<i class="fa-solid fa-calendar-check mx-2"></i></a>
                        @else
                            <a href="{{route('login')}}" class="btn-rdv">se connecter pour prendre rdv<i class="fa-solid fa-calendar-check mx-2"></i></a>
                        @endif
                        
                    </div>
                </div>
            @endforeach
        </div>
        <div class="paginate">
                    {{$appointments->links('vendor.pagination.custom')}} {{--customisation de la pagination--}}
                </div>
</section>

@endsection

