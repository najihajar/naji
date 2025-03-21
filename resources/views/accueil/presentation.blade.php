@extends('base')
@section('title', 'Presentation')

@section('content')
<link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
<!-- Ajoutez Bootstrap CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Conteneur principal -->
<div class="full-page-container">
    <div class="overlay-text">
        <h2>Présentation de la résidence</h2>
    </div>
</div>

<!-- Image principale avec texte intégré -->
<div class="image-banner">
    <img src="{{ asset('images/img.jpg') }}" alt="À propos de la résidence" class="img-fluid expanded-image">
    <div class="banner-text">
        
        <p>
            <strong>Notre résidence</strong> est bien plus qu'un simple lieu de vie. C'est un espace conçu pour offrir confort, sécurité et bien-être à tous ses résidents. Avec des installations modernes et un environnement convivial, nous nous engageons à créer une communauté où chacun peut s'épanouir.
        </p>
        <p>
            Que vous cherchiez un endroit paisible pour vous reposer ou un lieu dynamique pour rencontrer vos voisins, notre résidence répond à tous vos besoins. Découvrez un cadre de vie exceptionnel, où chaque détail a été pensé pour vous.
        </p>
        
    </div>
    <a href="#gallery" class="scroll-arrow">
    <i class="fas fa-arrow-down"></i>
</a>

</div>

<!-- Galerie de photos avec Bootstrap -->
<div class="gallery-section" id="gallery" >
    <h3>Galerie de la Résidence</h3>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
            @for ($i = 1; $i <= 4; $i++)
                <div class="col">
                    <div class="card gallery-card animate-card">
                        <img src="{{ asset('images/img.jpg') }}" class="card-img-top" alt="Photo {{ $i }}">
                        <div class="card-body">
                            <h5 class="card-title">Titre {{ $i }}</h5>
                            <p class="card-text">Description {{ $i }}</p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>

<!-- Ajoutez le script Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection

<style>
body {
    font-family: 'Arial', sans-serif;
    background-color: #f8f9fa;
    color: #333;
    margin: 0;
    padding: 0;
}

/* Image principale */
.image-banner {
    position: relative;
    text-align: center;
    margin: 20px 0;
}

.expanded-image {
    width: 90%;
    height: auto;
    max-height: 750px;
    border-radius: 10px;
}

.banner-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: rgba(0, 0, 0, 0.5);
    color: white;
    padding: 20px;
    border-radius: 10px;
    font-size: 1.8rem;
    text-align: center;
}

/* Galerie de photos */
.gallery-section {
    padding: 60px 20px;
    background-color: #f0f0f0;
    text-align: center;
    width: 70%;
    max-height: 500px;
    margin: auto;
}

.gallery-card {
    border: none;
    border-radius: 10px;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.animate-card:hover {
    transform: scale(1.1);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
}

@media (max-width: 768px) {
    .expanded-image {
        height: 250px;
    }
}

.scroll-arrow {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    font-size: 2rem;
    color: white;
    background: blue;
    padding: 10px 15px;
    border-radius: 50%;
    transition: transform 0.3s ease;
    text-decoration: none;
}

.scroll-arrow:hover {
    transform: translateX(-50%) scale(1.2);
}

.scroll-arrow i {
    animation: bounce 1.5s infinite;
}

@keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(10px); }
}

</style>