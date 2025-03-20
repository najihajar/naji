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
            <?php echo e(__('Create Annonce')); ?>

        </h2>
     <?php $__env->endSlot(); ?>
<!-- Lien vers le fichier CSS -->
<link rel="stylesheet" href="<?php echo e(asset('CSS/style.css')); ?>">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg custom-container">
                <div class="p-6 text-gray-900">
                    <h1 class="font-semibold text-xl text-gray-800 leading-tight custom-heading">Add Annonce</h1>
                    <hr class="mb-4 custom-hr"/>
                    <?php if(session()->has('error')): ?>
                        <div class="custom-alert">
                            <?php echo e(session('error')); ?>

                        </div>
                    <?php endif; ?>
                    <a href="<?php echo e(route('admin/annonces')); ?>" class="custom-button custom-hover-button custom-button-blue">Go back</a></br></br>
                    <!-- Formulaire de création d'annonce -->
                    <form action="<?php echo e(route('admin/annonces/store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="mb-4 custom-form-group">
                            <label for="titre" class="custom-label">Titre</label>
                            <input type="text" name="titre" id="titre" class="custom-input" required>
                            <?php $__errorArgs = ['titre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="mb-4 custom-form-group">
                            <label for="contenu" class="custom-label">Contenu</label>
                            <textarea name="contenu" id="contenu" class="custom-textarea" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="custom-button custom-hover-button custom-button-blue">Create Annonce</button>
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
<?php endif; ?>
<?php /**PATH C:\Users\HP\Desktop\nv\Hajar\resources\views/admin/annonce/create.blade.php ENDPATH**/ ?>