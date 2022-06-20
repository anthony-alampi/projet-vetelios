<footer>
    <div class="plan-du-site">
        <a class="lien-clinique" href="{{route('clinique')}}">La clinique</a>
        <a class="lien-boutique" href="#">La boutique</a>
        <a class="lien-rdv" href="{{route('appointment')}}">Rendez-vous</a>
        <a class="lien-connexion" href="{{route('login')}}">Connexion</a>
    </div>
    <div class="container-adresse">
        <ul class="nav-list">
            <li class="list-item">Clinique Vétélios</li>
            <li class="list-item">26 Rue Brun,<br>83000 Toulon</li>
            <li class="list-item">Téléphone : 04 82 39 60 21</li>
        </ul>
    </div>

    <div id="map"></div>


    <div class="container-reseaux">
        <a href=""><img src="{{asset('assets/images/sociaux/facebook.png')}}" alt=""></a>
        <a href=""><img src="{{asset('assets/images/sociaux/instagram.png')}}" alt=""></a>
    </div>
    {{-- <p class="copyright">Copyright © 2022 Clinique Vétélios - Tous droits réservés</p> --}}
</footer>