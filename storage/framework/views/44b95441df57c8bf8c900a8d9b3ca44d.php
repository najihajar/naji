<?php if (isset($component)) { $__componentOriginal15a72a62debbe72bfa7a4f1dc73a4a07 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal15a72a62debbe72bfa7a4f1dc73a4a07 = $attributes; } ?>
<?php $component = App\View\Components\AdminAppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin-app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AdminAppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <div class="flex items-center justify-between bg-gradient-to-r from-blue-600 to-purple-600 p-4 shadow-lg">
            <div class="flex items-center">
                
                <h2 class="font-bold text-2xl text-black tracking-wide ">
                    <?php echo e(__('Admin Dashboard')); ?>

                </h2>
                
            </div>
        </div>
     <?php $__env->endSlot(); ?>

    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white p-6 shadow-xl fixed h-full">
            <nav>
                <ul class="space-y-4">
                    <li>
                        <a href="<?php echo e(route('admin/annonces')); ?>" class="flex items-center justify-center w-full text-center bg-blue-500 hover:bg-blue-700 text-black font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300">
                            
                            Annonces
                        </a>
                    </li>
                    
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 ml-64 p-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <!-- Content will be loaded here dynamically -->
                        
                    </div>
                </div>
            </div>
        </main>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal15a72a62debbe72bfa7a4f1dc73a4a07)): ?>
<?php $attributes = $__attributesOriginal15a72a62debbe72bfa7a4f1dc73a4a07; ?>
<?php unset($__attributesOriginal15a72a62debbe72bfa7a4f1dc73a4a07); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal15a72a62debbe72bfa7a4f1dc73a4a07)): ?>
<?php $component = $__componentOriginal15a72a62debbe72bfa7a4f1dc73a4a07; ?>
<?php unset($__componentOriginal15a72a62debbe72bfa7a4f1dc73a4a07); ?>
<?php endif; ?><?php /**PATH C:\Users\HP\Desktop\monStg\myproj\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>