@extends('base')

@section('content')

<header class="header-clinique">
<h1 class="titre-header">La clinique & notre équipe Vételios</h1>
</header>

<main>
    <article>
        <section class="section-presentation">
            <h1 class="titre-custom none">L'organisation au sein de Vételios</h1>
            <span class="design-separation"></span>
            <p class="texte-custom">
            La clinique vétérinaire Vétélios est située ZA du Champ Chassy, sur le rond-point des jardiniers, 71380 Chatenoy-en-Bresse, à proximité de Chalon-sur-Saône.
            La clinique est spacieuse et moderne: 500 mètres carrés exclusivement dédiés à la médecine et chirurgie des carnivores domestiques et nouveaux animaux de compagnie. 
            Un matériel de pointe, avec le premier scanner de Saône et Loire pour apporter les meilleurs soins à vos compagnons. 
            Un parking privé, gratuit et facile d'accès est mis à votre disposition</p>
            </section>
            <div class="parallax"></div>

            <section class="section-presentation">
                <h1 class="titre-custom none">Présentation de l'équipe</h1>
                <span class="design-separation"></span>
                <div class="list-equipes">
                    <h3 class="titre-custom titre-exception-style">Nos Directeurs & Vétérinaires</h3>
                    <div class="equipe-item">
                        <img src="{{asset('assets/images/personnes/directrice.jpg')}}" alt="">
                        <ul class="list-infos">
                            <li class="info-item">Prénom : Marie-Paul</li>
                            <li class="info-item">Poste : Directrice</li>
                            <li class="info-item">Diplôme : Bachelor Ressource Humaine</li>
                            <li class="info-item">Motivation : Lutte pour la cause Animal </li>
                            <li class="info-item">Association : Bénévole 30M d'amies </li>
                        </ul>
                        <img src="{{asset('assets/images/personnes/veterinaire.jpg')}}" alt="">
                        <ul class="list-infos">
                            <li class="info-item">Prénom : Philippe Lekern</li>
                            <li class="info-item">Poste : Vétérinaire</li>
                            <li class="info-item">Diplôme : Docteur Vétérinaire</li>
                            <li class="info-item">Motivation : Lutte pour la cause Animal </li>
                            <li class="info-item">Passion : Développer l'auto-suffisance </li>
                        </ul>
                    </div>

                    <h1 class="titre-custom">Les assistantes Vételios</h1>
                    {{-- <span class="design-custom"></span> --}}
                    
                    <div class="equipe-item">
                        <img src="{{asset('assets/images/personnes/veterinaire2.jpg')}}" alt="">
                        <ul class="list-infos">
                            <li class="info-item">Prénom : Rosalie</li>
                            <li class="info-item">Poste : Assistante Vétérinaire</li>
                            <li class="info-item">Diplôme : Asv</li>
                            <li class="info-item">Motivation : Le bien-être animal </li>
                            <li class="info-item">Passion : Equitation </li>
                        </ul>
                        <img src="{{asset('assets/images/personnes/asv1.jpg')}}" alt="">
                        <ul class="list-infos">
                            <li class="info-item">Prénom : Calypsa</li>
                            <li class="info-item">Poste : Alternante Asv</li>
                            <li class="info-item">Diplôme : Asv</li>
                            <li class="info-item">Motivation : Lutte pour la cause Animal </li>
                            <li class="info-item">Association : Famille d'accueil(chats) </li>
                        </ul>
                    </div> 
                </div>
            </section>
            <div class="parallax"></div>
            <section class="section-services">
            <h1 class="titre-custom">Nos services</h1>
             <span class="design-separation"></span>
             <p class="texte-custom">
            La clinique vétérinaire Vétélios est située ZA du Champ Chassy, sur le rond-point des jardiniers, 71380 Chatenoy-en-Bresse, à proximité de Chalon-sur-Saône.
            La clinique est spacieuse et moderne: 500 mètres carrés exclusivement dédiés à la médecine et chirurgie des carnivores domestiques et nouveaux animaux de compagnie.</p>

            <div class="container">
                <a class=" clinique lien-bloc-nav bloc" href="/clinique">La clinique</a>
                <a class=" boutique lien-bloc-nav bloc" href="#">La boutique</a>
                <a class=" rdv lien-bloc-nav bloc" href="/rendez-vous">Rendez-vous</a>
            </div>
        </section>



@endsection