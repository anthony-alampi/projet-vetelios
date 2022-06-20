@extends('base')
@section('content')

<main>
    <video class="background-video-form" autoplay="autoplay" muted="" loop="loop" src="{{asset('assets/videos/background-form.mp4')}}" autoplay></video> 
    <article>
        <section class="section-form">
            <h1 class="titre-custom">Connexion à votre compte</h1>

            <form class="container-form" method="POST" action="{{ route('login') }}">
                @csrf
                <img src="{{asset('assets/images/logo/logo.png')}}" alt="">

                <div class="bloc-custom">
                    <label  for="email">Adresse email</label>

                    <input id="email" type="email" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Entrez votre email">

                    {{-- @error('email')
                        <span class="invalide">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror --}}

                </div>

                <div class="bloc-custom">
                    <label for="password" class="">Mot de passe</label>
                    <input id="password" type="password" name="password" placeholder="********">
                        
                    {{-- @error('password')
                        <span class="invalide">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror --}}

                </div>    
                
                <div class="bloc-custom">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label for="remember">
                        Se souvenir de moi
                    </label>
                </div>

                <button class="btn-form" type="submit">
                    Se connecter
                </button>

                @if (Route::has('password.request'))
                    <a class="mdp-item" href="{{ route('password.request') }}">
                        Mot de passe oublié?
                    </a>
                @endif

                @if (Route::has('register'))
                    <a class="lien-register" href="{{route('register')}}" >
                        Pas encore de compte ? cliquez-ici
                    </a>
                @endif

            </form>
        </section>
    </article>
</main>             
@endsection