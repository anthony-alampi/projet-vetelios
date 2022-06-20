@extends('base')
@section('content')

<header class="header-connexion"></header>

<main>
    <video class="background-video-form" autoplay="autoplay" muted="" loop="loop" src="{{asset('assets/videos/background-form.mp4')}}" autoplay></video> 

    <article>
        <section class="section-form">
            <h1 class="titre-custom">créer un compte</h1>

            <form class="container-form" method="POST" action="{{ route('register') }}">
            @csrf
            
                <img src="{{asset('assets/images/logo/logo.png')}}" alt="">

                <div class="bloc-identite">
{{-- nom------------------------------ --}}
                    <div class="bloc-custom">
                        <label  for="nom">Nom</label>
                        <input  id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus placeholder="Ex: Dupont Jean">
                        @error('nom')
                            <span class="invalid" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

{{-- prenom------------------------------ --}}
                    <div class="bloc-custom">
                        <label for="prenom">Prénom</label>
                        <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus placeholder="Ex: Dupont Jean">
                        @error('prenom')
                            <span class="invalid" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
{{-- teltelephone------------------------------ --}}
                <div class="bloc-identite">

                    <div class="bloc-custom">
                        <label for="telephone">Téléphone</label>
                        <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" autofocus>
                        @error('telephone')
                            <span class="invalid" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> 
{{-- email------------------------------ --}}
                    <div class="bloc-custom">
                        <label for="email">Adresse email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Ex:monadresse@ex.com">
                        @error('email')
                            <span class="invalide" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
{{-- mot de passe------------------------------ --}}
                <div class="bloc-identite">
                    <div class="bloc-custom">
                        <label for="password">Mot de passe</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="*******">

                        @error('password')
                            <span class="invalide" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="bloc-custom">
                        <label for="password-confirm">Confirmation</label>
                        <input class="form-control" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="*******">
                    </div>    
                </div>
                    <button class="btn-form" type="submit" >
                        S'inscrire
                    </button>

                    @if (Route::has('login'))
                <a class="lien-register" href="{{route('login')}}" >Déja un compte? cliquez-ici</a>
                @endif

        </form>
        </section>
    </article>
</main>



        


                



@endsection
