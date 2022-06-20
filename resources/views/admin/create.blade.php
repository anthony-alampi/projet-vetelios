@extends('base')

@section('content')

    <div class="container">
        <h1 class="titre-custom">Créer une nouvelle disponibilité</h1>

        <form class="form-create" method="POST" action="{{route('admin.store')}}">
            @csrf
            
                <div class="bloc-input-create">
                    <label>Date</label>
                    <input type="date" name="date" class="form-control" placeholder="date du rendez-vous">
                    @error('date')
                    <span role="alert">Une date est nécessaire</span>
                    @enderror
                </div>

                <div class="bloc-input-create">
                     <label>Horaire</label>
                    <input type="time"name="horaire" class="form-control" placeholder="heure du rendez-vous">
                    @error('horaire')
                    <span role="alert">Un horaire est obligatoire</span>
                    @enderror
                </div>

                <div class="bloc-input-create">
                    <label>Vétérinaire</label>
                    <input type="text" name="veterinaire" class="form-control" placeholder="Vétérinaire">
                    @error('veterinaire')
                    <span role="alert">Vétérinaire requis</span>
                    @enderror
                </div>

            <div class="d-flex justify-content-center mb-5 mt-5">
                <button type="submit" class="btn btn-primary">Poster le rendez-vous</button>
            </div>
        </form>
    </div>
@endsection
    
