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
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Admin Annonce')); ?>

        </h2>
     <?php $__env->endSlot(); ?>
    <link rel="stylesheet" href="<?php echo e(asset('CSS/style.css')); ?>">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex items-center justify-between mb-6">
                        <h1 class="text-3xl font-extrabold text-gray-800">📢 Liste des Annonces</h1>
                        <a href="<?php echo e(route('admin/annonces/create')); ?>" class="bg-blue-200 text-black px-4 py-2 rounded-lg shadow hover:bg-blue-300 transition">
                            ➕ Ajouter une Annonce
                        </a>
                    </div>
                    <hr class="mb-4 border-gray-300"/>
                    <?php if(Session::has('success')): ?>
                        <div class="bg-green-100 border border-green-500 text-green-800 px-4 py-3 rounded-lg mb-4 shadow" role="alert">
                            ✅ <?php echo e(Session::get('success')); ?>

                        </div>
                    <?php endif; ?>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-lg">
                            <thead class="bg-gray-700 text-white">
                                <tr>
                                    <th class="px-6 py-4 text-left font-semibold">Titre</th>
                                    <th class="px-6 py-4 text-left font-semibold">Contenu</th>
                                    <th class="px-6 py-4 text-left font-semibold">Image</th>
                                    <th class="px-6 py-4 text-center font-semibold">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $annonces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $annonce): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="border-b hover:bg-gray-100 transition">
                                        <td class="px-6 py-4 text-gray-900 font-medium text-lg"><?php echo e($annonce->titre); ?></td>
                                        <td class="px-6 py-4 text-gray-700 text-lg"><?php echo e($annonce->contenu); ?></td>
                                        <td class="px-6 py-4">
                                            <?php if($annonce->image): ?>
                                                <img src="<?php echo e(asset('storage/' . $annonce->image)); ?>" alt="Annonce Image" class="w-20 h-20 object-cover">
                                            <?php else: ?>
                                                <span>No Image</span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="px-6 py-4 flex justify-center space-x-3">
                                            <a href="<?php echo e(route('admin/annonces/show', $annonce->id)); ?>" 
                                               class="bg-blue-200 text-black px-4 py-2 rounded-lg shadow hover:bg-blue-300 transition">
                                                👁 Voir
                                            </a>
                                            <a href="<?php echo e(route('admin/annonces/edit', $annonce->id)); ?>" 
                                               class="bg-yellow-200 text-black px-4 py-2 rounded-lg shadow hover:bg-yellow-300 transition">
                                                ✏ Modifier
                                            </a>
                                            <form action="<?php echo e(route('admin/annonces/destroy', $annonce->id)); ?>" method="POST" 
                                                  onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette annonce ?');">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" 
                                                        class="bg-red-200 text-black px-4 py-2 rounded-lg shadow hover:bg-red-300 transition">
                                                    🗑 Supprimer
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
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
<?php endif; ?><?php /**PATH C:\Users\HP\Desktop\monStg\myproj\resources\views/admin/annonce/home.blade.php ENDPATH**/ ?>