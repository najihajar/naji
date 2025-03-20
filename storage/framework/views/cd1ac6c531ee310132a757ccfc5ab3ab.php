
<?php $__env->startSection('title', 'Accueil'); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('CSS/style.css')); ?>">

<!-- Section principale -->
<div class="container-custom">
    <!-- Texte -->
    <div class="text-section">
        <h2>
            <span style="color: #007bff;">مؤسستنا</span><br>
            <span style="color: #d63384;">ليست مجرد محل إقامة، إنها</span><br>
            <span style="color: #007bff;">فضاء للحياة والإبداع</span>
        </h2>

        <h4>
            <span style="color: #d63384;">Notre établissement</span><br>
            <span style="color: #007bff;">n'est pas juste un lieu de résidence,</span><br>
            <span style="color: #d63384;">c'est un espace de vie et d'épanouissement</span>
        </h4>
    </div>

    <!-- Image -->
    <div class="image-section">
        <img src="<?php echo e(asset('images/photo.jpg')); ?>" alt="Illustration">
    </div>
</div>

<!-- Section des annonces -->
<div class="container annonces">
    <h3>📢 Annonces Importantes</h3>
    <ul>
        
    </ul>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\HP\Desktop\nv\Hajar\resources\views/accueil/index.blade.php ENDPATH**/ ?>