<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="custom-header font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Edit Annonce')); ?>

        </h2>
     <?php $__env->endSlot(); ?>
    <link rel="stylesheet" href="<?php echo e(asset('CSS/style.css')); ?>">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg custom-container">
                <div class="p-6 text-gray-900">
                    <h1 class="font-semibold text-xl text-gray-800 leading-tight custom-heading">Edit Annonce</h1>
                    <hr class="mb-4 custom-hr" />
                    <form action="<?php echo e(route('admin/annonces/update', $annonce->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="mb-4 custom-form-group">
                            <label for="titre" class="custom-label">Titre</label>
                            <input type="text" name="titre" id="titre" class="custom-input" value="<?php echo e($annonce->titre); ?>" required>
                        </div>
                        <div class="mb-4 custom-form-group">
                            <label for="contenu" class="custom-label">Contenu</label>
                            <textarea name="contenu" id="contenu" class="custom-textarea" rows="4" required><?php echo e($annonce->contenu); ?></textarea>
                        </div>
                        <div class="mb-4 custom-form-group">
                            <label for="image" class="custom-label">Image</label>
                            <input type="file" name="image" id="image" class="custom-input">
                            <?php if($annonce->image): ?>
                                <img src="<?php echo e(asset('storage/' . $annonce->image)); ?>" alt="Annonce Image" class="w-20 h-20 object-cover mt-2">
                            <?php endif; ?>
                        </div>
                        <button type="submit" class="custom-button custom-hover-button custom-button-blue">Update Annonce</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\Users\HP\Desktop\monStg\myproj\resources\views/admin/annonce/edit.blade.php ENDPATH**/ ?>