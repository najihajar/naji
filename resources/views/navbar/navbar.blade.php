
<link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
<nav class="navbar navbar-expand-lg " style="height: 80px;background-color: #e9ecef;" >
    <div class="container">
        <!-- Logo ou nom de l'application -->
        <a class="navbar-brand" href="{{ route('app_accueil') }}">
            <img src="{{ asset('images/gry.jpg') }}" alt="Logo" style="height: 60px;">
        </a>

        <!-- Bouton pour les écrans mobiles -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Contenu de la barre de navigation -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Liens de navigation -->
                <li class="nav-item">
                    <a class="nav-link fw-bold @if(request()->routeIs('app_accueil')) active @endif" href="{{ route('app_accueil') }}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold @if(request()->routeIs('app_presentation')) active @endif" href="{{ route('app_presentation') }}">Présentation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold @if(request()->routeIs('app_club')) active @endif" href="{{ route('app_club') }}">Clubs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold @if(request()->routeIs('app_contact')) active @endif" href="{{ route('app_contact') }}">Contact</a>
                </li>

                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="bg-orange-500 text-white px-6 py-2 rounded-md hover:bg-orange-600 transition duration-200">Login</a>
                @endif
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="bg-orange-500 text-white px-6 py-2 rounded-md hover:bg-orange-600 transition duration-200">Register</a>
                @endif
            </ul>
        </div>
    </div>
</nav>