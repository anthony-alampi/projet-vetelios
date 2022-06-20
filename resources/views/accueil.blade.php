@extends('base')

@section('content')

<header>
<video id="video" autoplay="autoplay" muted="" loop="loop" src="{{asset('assets/videos/video-header2.mp4')}}" autoplay></video> 
</header>

<main>
    <article>
        <section class="section-presentation">
            <h1 class="titre-custom none">Clinique Vétérinaire Vételios</h1>
            <span class="design-separation"></span>
            <p class="texte-custom">
            La clinique vétérinaire Vétélios est située ZA du Champ Chassy, sur le rond-point des jardiniers, 71380 Chatenoy-en-Bresse, à proximité de Chalon-sur-Saône.
            La clinique est spacieuse et moderne: 500 mètres carrés exclusivement dédiés à la médecine et chirurgie des carnivores domestiques et nouveaux animaux de compagnie. 
            Un matériel de pointe, avec le premier scanner de Saône et Loire pour apporter les meilleurs soins à vos compagnons. 
            Un parking privé, gratuit et facile d'accès est mis à votre disposition</p>
            </section>
        <div class="parallax"></div>
        <section class="section-services">
            <h1 class="titre-custom">Nos services</h1>
             <span class="design-separation"></span>
             <p class="texte-custom">
            La clinique vétérinaire Vétélios est située ZA du Champ Chassy, sur le rond-point des jardiniers, 71380 Chatenoy-en-Bresse, à proximité de Chalon-sur-Saône.
            La clinique est spacieuse et moderne: 500 mètres carrés exclusivement dédiés à la médecine et chirurgie des carnivores domestiques et nouveaux animaux de compagnie.</p>

            <div class="container">
                <a class=" clinique lien-bloc-nav bloc" href="{{route('clinique')}}">La clinique</a>
                <a class=" boutique lien-bloc-nav bloc" href="#">La boutique</a>
                <a class=" rdv lien-bloc-nav bloc" href="{{route('appointment')}}">Rendez-vous</a>
            </div>
        </section>
        <div class="parallax2"></div>
        <section class="section-informations">
            <h1 class="titre-custom">La clinique et les urgences</h1>
            <span class="design-separation"></span>
            <div class="container-urgence">
            <p class="texte-custom">
            La clinique assure les urgences vétérinaires de la région depuis 2018. Elle est ouverte 7 jours sur 7, toutes les nuits de 19h à 8h le lendemain matin en semaine, les week-ends du samedi midi au lundi matin 8h, et 24 heures sur 24 les jours fériés. Elle se situe sur la zone d’activité des Milles au 35 rue Émilien gautier.<br>Urgence vétérinaire: Vous pouvez nous contacter au 04 42 82 13 13.<br>Nous assurons les gardes de plus de 140 cliniques et cabinets vétérinaires des communes d’Aix-en-Provence, Martigues, Salon-de-Provence, Istres, Vitrolles, Marignane, Manosque, Les Pennes Mirabeau, Gardanne notamment. En nous confiant leurs permanences et leurs continuités de soins, vos vétérinaires se fient à nous pour assurer au mieux les urgences de vos animaux.</p>
            <img src="{{asset('assets/images/Accueil/urgence-veterinaire.jpg')}}" alt="">
            </div>
            </section>
    </article>
</main>

@endsection