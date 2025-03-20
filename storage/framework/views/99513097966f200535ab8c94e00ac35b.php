
<link rel="stylesheet" href="<?php echo e(asset('CSS/style.css')); ?>">
<nav class="navbar navbar-expand-lg " style="height: 80px;background-color: #e9ecef;" >
    <div class="container">
        <!-- Logo ou nom de l'application -->
        <a class="navbar-brand" href="<?php echo e(route('app_accueil')); ?>">
            <img src="<?php echo e(asset('images/gry.jpg')); ?>" alt="Logo" style="height: 60px;">
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
                    <a class="nav-link fw-bold <?php if(request()->routeIs('app_accueil')): ?> active <?php endif; ?>" href="<?php echo e(route('app_accueil')); ?>">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold <?php if(request()->routeIs('app_presentation')): ?> active <?php endif; ?>" href="<?php echo e(route('app_presentation')); ?>">Présentation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold <?php if(request()->routeIs('app_club')): ?> active <?php endif; ?>" href="<?php echo e(route('app_club')); ?>">Clubs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold <?php if(request()->routeIs('app_contact')): ?> active <?php endif; ?>" href="<?php echo e(route('app_contact')); ?>">Contact</a>
                </li>

                <?php if(Route::has('login')): ?>
                    <a href="<?php echo e(route('login')); ?>" class="bg-orange-500 text-white px-6 py-2 rounded-md hover:bg-orange-600 transition duration-200">Login</a>
                <?php endif; ?>
                <?php if(Route::has('register')): ?>
                    <a href="<?php echo e(route('register')); ?>" class="bg-orange-500 text-white px-6 py-2 rounded-md hover:bg-orange-600 transition duration-200">Register</a>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav><?php /**PATH C:\Users\HP\Desktop\nv\Hajar\resources\views/navbar/navbar.blade.php ENDPATH**/ ?>