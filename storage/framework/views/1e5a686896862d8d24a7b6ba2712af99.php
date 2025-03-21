
<?php $__env->startSection('title', 'Accueil'); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('CSS/style.css')); ?>">

<div class="container-custom">
    <div class="text-section">
        <h2 class="animated-text fade-in-text">
            <span style="color: #007bff; font-size: 4rem;">مؤسستنا</span><br>
            <span style="color: #d63384;  font-size: 4rem;">ليست مجرد محل إقامة، إنها</span><br>
            <span style="color: #007bff; font-size: 4rem;">فضاء للحياة والإبداع</span>
        </h2>
        <h4 class="animated-text fade-in-text">
            <span style="color: #d63384; font-size: 3rem;">Notre établissement</span><br>
            <span style="color: #007bff; font-size: 3rem;">n'est pas juste un lieu de résidence,</span><br>
            <span style="color: #d63384; font-size:3rem;">c'est un espace de vie et d'épanouissement</span>
        </h4></br></br></br></br></br></br>
        <div class="scroll-down">
            <a href="javascript:void(0);" onclick="showAnnonces()">
                <img src="<?php echo e(asset('images/fléche.png')); ?>" alt="Flèche vers le bas" class="animated-arrow">
            </a>
        </div>
        <h1 id="annonces-title" style="color: red; text-align: center; margin-top: 20px;">📢 Annonces Importantes (Click)</h1> <!-- Titre pour les annonces -->
    </div>
    <div class="image-section">
        <img src="<?php echo e(asset('images/photo.jpg')); ?>" alt="Illustration" class="animated-image">
    </div>
</div>

<!-- Section Annonces -->
<div class="annonces" id="annonces" style="display: none;">
    <div class="container">
        <div class="annonces-grid">
            <?php $__currentLoopData = $annonces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $annonce): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="annonce-card">
                    <h4><?php echo e($annonce->titre); ?></h4>
                    <p><?php echo e($annonce->contenu); ?></p>
                    <?php if($annonce->image): ?>
                        <img src="<?php echo e(asset('storage/' . $annonce->image)); ?>" alt="Annonce Image" class="annonce-image">
                    <?php else: ?>
                        <span>No Image</span>
                    <?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<style>
    .fade-in-text {
        opacity: 0;
        animation: fadeIn 2s ease-in forwards;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

   

    .scroll-down {
        margin-top: 20px;
    }

    .scroll-down img {
        width: 100px;
        cursor: pointer;
        animation: bounce 1.5s infinite; /* Animation bounce ajoutée à la flèche */
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-10px);
        }
        60% {
            transform: translateY(-5px);
        }
    }

    .annonces-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
        padding: 20px;
    }

    .annonce-card {
        background: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .annonce-card:hover {
        transform: translateY(-5px);
    }

    .annonce-image {
        width: 100%;
        height: 200px; /* Taille fixe pour les images */
        object-fit: cover; /* Assure que l'image couvre toute la zone sans être déformée */
        border-radius: 8px;
    }
</style>

<script>
    function showAnnonces() {
        const annoncesSection = document.getElementById('annonces');
        const annoncesTitle = document.getElementById('annonces-title');
        annoncesSection.style.display = 'block'; // Afficher la section des annonces
        
    }
</script>

<?php echo $__env->make('base', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\HP\Desktop\monStg\myproj\resources\views/accueil/index.blade.php ENDPATH**/ ?>