<nav>
    <img src="{{ asset('assets/images/logo/logo.png')}}" alt="">    
    <ul class="nav-list">
        <li class="nav-item"><a class="nav-lien" href="{{route('accueil')}}">Accueil</a></li>
        <li class="nav-item"><a class="nav-lien" href="{{route('clinique')}}"><i class="fa-solid fa-house-chimney-medical"></i>La clinique</a></li>
        <li class="nav-item"><a class="nav-lien" href="#"><i class="fa-solid fa-shop"></i>La boutique</a></li>
        <li class="nav-item"><a class="nav-lien" href="{{route('appointment')}}"><i class="fa-solid fa-calendar"></i>Prendre rendez-vous</a></li>
        @if (Auth::user())
            @if (Auth::user()->role == 'ADMIN')
                <li class="nav-item active"><a class="nav-lien" href="{{route('admin.adminGestion')}}"><i class="fa-solid fa-paw"></i>Espace Admin</a></li>
            @endif
            <li class="nav-item">
                    <form class="form-deco"  action="/logout" method="post">
                    @csrf
                    <button class="nav-lien">Déconnexion</button> 
                </form>
            </li>
        @else
            <li class="nav-item"><a class="nav-lien" href="/login"><i class="fa-solid fa-paw"></i>Compte</a></li>
        @endif  
    </ul>
</nav>


