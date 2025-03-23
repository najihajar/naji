@extends('base')
@section('title', 'Clubs')

@section('content')
<link rel="stylesheet" href="{{ asset('CSS/style.css') }}">



<!-- Conteneur principal -->
<div class="full-page-container">
    <!-- Texte avec fond semi-transparent -->
    <div class="overlay-text">
        <h2>
            <span style="color: #d63384;">Nos Clubs</span>
        </h2>
    </div>
</div></br>
<div class="clubs-container">
    <!-- Club 1 -->
    <div class="club">
    <div class="club-header">
        <img src="{{ asset('images/sport.png') }}" alt="Club de Sport Logo" class="club-logo">
        <h2>Club de Sport</h2>
    </div>
    <h5 class="club-description">
         <strong>Le Club de Sport</strong> est un espace dynamique et convivial dédié à la promotion d'un mode de vie sain et actif. Il offre à ses membres une variété d'activités sportives adaptées à tous les niveaux, que vous soyez débutant ou sportif confirmé. Grâce à des entraîneurs qualifiés et des installations modernes, le club vise à améliorer la condition physique, la coordination et le bien-être général de ses membres. Rejoignez-nous pour des séances dynamiques et motivantes dans une ambiance conviviale et énergisante !
        <br><br>
        <strong>Activités proposées :</strong>
        <ul>
            <li><strong>Activités de fitness </strong> Zumba, Aérobic, Cardio, Step, Fitball</li>
            <li><strong>Sports collectifs </strong>  basketball, volleyball</li>
            <li><strong>Événements spéciaux </strong> Journées sportives, challenges internes, collaborations interclubs.</li>
        </ul>
        <br>
        <strong>Buts du club :</strong>
        <ul>
            <li>Promouvoir la santé et le bien-être.</li>
            <li>Développer les compétences sportives.</li>
            <li>Favoriser l'esprit d'équipe.</li>
            <li>Encourager la participation communautaire.</li>
        </ul>
</h5>
    <div class="club-gallery">
        <img src="{{ asset('images/sport1.png') }}" alt="Club de Sport Image 1">
        <img src="{{ asset('images/sport2.jpg') }}" alt="Club de Sport Image 2">
        <img src="{{ asset('images/sport3.jpg') }}" alt="Club de Sport Image 3">
        <img src="{{ asset('images/sport4.jpg') }}" alt="Club de Sport Image 4">
        <img src="{{ asset('images/sport5.jpg') }}" alt="Club de Sport Image 5">
        <img src="{{ asset('images/sport6.jpg') }}" alt="Club de Sport Image 6">
    </div>
</div>
    <!-- Club 2 -->
    <div class="club">
    <div class="club-header">
        <img src="{{ asset('images/cooking.png') }}" alt="Club de Cuisine et d'Économie Domestique Logo" class="club-logo">
        <h2>Club de Cuisine et d'Économie Domestique</h2>
    </div>
    <h5 class="club-description">
         <strong>Le Club de Cuisine et d'Économie Domestique</strong> est un espace convivial et éducatif dédié à l'apprentissage des techniques culinaires, à la gestion du foyer et à la promotion d'un mode de vie sain et durable. Ce club offre à ses membres l'opportunité de développer des compétences pratiques en cuisine, en gestion des ressources et en organisation domestique, tout en favorisant la créativité et le partage.
        <br><br>
        <strong>Activités proposées :</strong>
        <ul>
            <li><strong>Ateliers de cuisine :</strong> Apprentissage de recettes traditionnelles et modernes, techniques de pâtisserie, découverte de cuisines du monde.</li>
            
        </ul>
        <br>
        <strong>Buts du club :</strong>
        <ul>
            <li>Développer des compétences pratiques en cuisine et en gestion domestique.</li>
            <li>Encourager la créativité à travers la découverte de nouvelles recettes et techniques.</li>
            <li>Favoriser la convivialité et le partage entre les membres.</li>
        </ul>
    </h5>
    <div class="club-gallery">
        <img src="{{ asset('images/cooking1.png') }}" alt="Club de Cuisine Image 1">
        <img src="{{ asset('images/cooking2.png') }}" alt="Club de Cuisine Image 2">
        <img src="{{ asset('images/cooking3.png') }}" alt="Club de Cuisine Image 3">
        <img src="{{ asset('images/cooking4.png') }}" alt="Club de Cuisine Image 4">
        <img src="{{ asset('images/cooking5.png') }}" alt="Club de Cuisine Image 5">
        <img src="{{ asset('images/cooking6.png') }}" alt="Club de Cuisine Image 6">
    </div>
</div>

    <!-- Club 3 -->
    <div class="club">
        <div class="club-header">
            <img src="{{ asset('images/culturel.png') }}" alt="Club 2 Logo" class="club-logo">
            <h2>Club Culturel Scientifique</h2>
        </div>
        <h5 class="club-description">
        <strong>Le Club Culturel Scientifique</strong> est une association ou un groupe organisé qui a pour mission de promouvoir la culture scientifique, de diffuser les connaissances scientifiques et de susciter l'intérêt pour les sciences auprès du grand public ou d'un public cible (comme les étudiants ou les jeunes). Ce type de club vise à rendre les sciences accessibles, ludiques et engageantes, tout en encourageant la curiosité intellectuelle, la réflexion critique et l'innovation.
        <br><br>
        <strong>Activités proposées :</strong>
        <ul>
            
            <li><strong>Journées d'étude  </strong></li>
            <li><strong>Formations en développement personnel  </strong></li>
            <li><strong>Séries de conférences, présentations et concours  </strong></li>
            <li><strong>Ateliers de communication et débats  </strong></li>

        </ul>
        <br>
        <strong>Buts du club :</strong>
        <ul>
            <li>Contribuer à la formation d'un citoyen complet sur le plan intellectuel et moral </li>
            <li>Stimuler l'esprit de coopération</li>
            <li>Développer les compétences de vie</li>
            <li>Encadrer les étudiantes talentueuses</li>
            
            <li>Stimuler la créativité et l'innovation chez les étudiantes</li>
         
        </ul>
    </h5>
        <div class="club-gallery">
            <img src="{{ asset('images/1.png') }}" alt="Club 2 Image 1">
            <img src="{{ asset('images/2.png') }}" alt="Club 2 Image 2">
            <img src="{{ asset('images/3.png') }}" alt="Club 2 Image 3">
            <img src="{{ asset('images/4.png') }}" alt="Club 2 Image 4">
            <img src="{{ asset('images/5.png') }}" alt="Club 2 Image 5">
            <img src="{{ asset('images/6.png') }}" alt="Club 2 Image 6">
        </div>
    </div>
    <!-- Club 4-->
    <div class="club">
    <div class="club-header">
        <img src="{{ asset('images/social.png') }}" alt="Club de Service Communautaire Logo" class="club-logo">
        <h2>Club de Service Communautaire</h2>
    </div>
    <h5 class="club-description">
         <strong>Le Club de Service Communautaire</strong> est un espace dédié à l'engagement social, à la solidarité et à l'amélioration des conditions de vie des membres de la communauté. À travers des initiatives variées et des projets concrets, le club vise à sensibiliser, éduquer et soutenir les personnes dans le besoin, tout en encourageant le bénévolat et la participation active de ses membres.
        <br><br>
        <strong>Activités réalisées :</strong>
        <ul>
            <li><strong>Initiatives sociales </strong> </li>
            <li><strong>Sensibilisation et éducation </strong> </li>
            <li><strong>Visites et explorations </strong> </li>
            <li><strong>Formations et ateliers </strong> </li>
            <li><strong>Collaborations et partenariats </strong> </li>
        </ul>
        <br>
        <strong>Objectifs du club :</strong>
        <ul>
            <li>Promouvoir l'esprit de solidarité et d'entraide.</li>
            <li>Sensibiliser la communauté à des enjeux sociaux et de santé.</li>
            <li>Encourager l'engagement citoyen et le bénévolat.</li>
            
        </ul>
    </h5>
    <div class="club-gallery">
        <img src="{{ asset('images/community1.png') }}" alt="Club de Service Communautaire Image 1">
        <img src="{{ asset('images/community2.png') }}" alt="Club de Service Communautaire Image 2">
        <img src="{{ asset('images/community3.png') }}" alt="Club de Service Communautaire Image 3">
        <img src="{{ asset('images/community4.png') }}" alt="Club de Service Communautaire Image 4">
        <img src="{{ asset('images/community5.png') }}" alt="Club de Service Communautaire Image 5">
        <img src="{{ asset('images/community6.png') }}" alt="Club de Service Communautaire Image 6">
    </div>
</div>
@endsection

<style>
.full-page-container {
    background-image: url('{{ asset('images/pre2.jpg') }}'); /* Remplace 'pre2.jpg' par ton image */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 100%;
    height: 200px; /* Ajuste la hauteur selon ton besoin */
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}

.overlay-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: blue;
    text-align: center;
    font-size: 7rem;
    font-weight: bold; 
    padding: 20px;
    border-radius: 10px;
}

    .clubs-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    margin: 20px;
}

.club {
    width: 500px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background-color: #f9f9f9; 
}

.club:hover {
    transform: scale(1.2); 
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); 
}


.club-header {
    position: relative;
    text-align: center;
    padding: 20px;
    background-color: #f0f0f0;
}

.club-logo {
    width: 100px;
    height: 100px;
    object-fit: contain;
}

.club-header h2 {
    font-size: 2rem;
    margin-top: 10px;
    color: #0000CD;
    font-weight: bold; 
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2); 
}




.club-description {
    padding: 15px;
    font-size: 1rem;
    color: #333;
    display: flex;
    flex-direction: column;
    text-align: justify; 
    font-style: normal; 
    font-family: 'Times New Roman', serif; 
}



.club-description ul {
    padding-left: 20px;
}


.club-gallery {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center;
    margin-top: 10px;
}

.club-gallery img {
    width: 165px;
    height: 165px;
    object-fit: cover;
    border-radius: 5px;
    transition: transform 0.3s ease;
}

.club-gallery img:hover {
    transform: scale(1.5); 
}


.overlay-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    text-align: center;
    z-index: 2;
}

.overlay-text h2 {
    font-size: 2.5rem;
    font-weight: bold;
}



</style>