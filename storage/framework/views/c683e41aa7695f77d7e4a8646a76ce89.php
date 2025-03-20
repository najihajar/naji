<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> <?php echo $__env->yieldContent('title'); ?> </title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo e('assets/app.css'); ?>" />

        
    </head>
    <body >
        <!-- bar de navigation -->
        <?php echo $__env->make('navbar/navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <!-- Tous nos contenus seront affiché ici  -->
        <?php echo $__env->yieldContent('content'); ?>
    
        <!-- Pied de page -->
        <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <!-- Nos script  -->
        <?php echo $__env->make('script', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    

        <?php if(Auth::check() && Auth::user()->role === 'admin'): ?>
            <a href="<?php echo e(route('admin.announcements.index')); ?>" class="btn btn-primary">📋 Gérer les annonces</a>
        <?php endif; ?>

    </body>
</html>
<?php /**PATH C:\Users\HP\Desktop\nv\Hajar\resources\views/base.blade.php ENDPATH**/ ?>