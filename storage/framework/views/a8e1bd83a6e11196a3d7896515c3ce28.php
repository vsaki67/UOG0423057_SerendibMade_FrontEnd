

<?php $__env->startSection('title', 'SerendibMade - Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8">
    <h1 class="text-3xl font-semibold text-gray-800 mb-6">Dashboard</h1>

    <?php if(auth()->guard()->check()): ?>
        <p class="mb-6 text-lg text-gray-600">Welcome, <span class="font-semibold text-indigo-600"><?php echo e(Auth::user()->name); ?></span> (<?php echo e(Auth::user()->role); ?>)</p>

        <?php if(Auth::user()->role === 'admin'): ?>
            <!-- Admin Dashboard -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Products -->
                <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 p-6 hover:-translate-y-1">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Products</h3>
                    <p class="text-gray-600 mb-4">Manage all products in the system</p>
                    <div class="space-x-2">
                        <a href="#" class="inline-block px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg transition">Add Product</a>
                        <a href="#" class="inline-block px-4 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded-lg transition">View All</a>
                    </div>
                </div>

                <!-- Artisans -->
                <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 p-6 hover:-translate-y-1">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Artisans</h3>
                    <p class="text-gray-600 mb-4">Review and manage artisans</p>
                    <a href="#" class="inline-block px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg transition">Review Artisans</a>
                </div>

                <!-- Reviews -->
                <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 p-6 hover:-translate-y-1">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Reviews</h3>
                    <p class="text-gray-600 mb-4">Manage product and artisan reviews</p>
                    <a href="#" class="inline-block px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg transition">Review Content</a>
                </div>
            </div>

        <?php elseif(Auth::user()->role === 'artisan'): ?>
            <!-- Artisan Dashboard -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 p-6 hover:-translate-y-1">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">My Products</h3>
                    <p class="text-gray-600 mb-4">Manage your products</p>
                    <div class="space-x-2">
                        <a href="#" class="inline-block px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg transition">Add Product</a>
                        <a href="#" class="inline-block px-4 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded-lg transition">View My Products</a>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 p-6 hover:-translate-y-1">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">My Orders</h3>
                    <p class="text-gray-600 mb-4">View and manage orders</p>
                    <a href="#" class="inline-block px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg transition">View Orders</a>
                </div>
            </div>

        <?php else: ?>
            <!-- Customer Dashboard -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 p-6 hover:-translate-y-1">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">My Orders</h3>
                    <p class="text-gray-600 mb-4">Track your orders</p>
                    <a href="#" class="inline-block px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg transition">View My Orders</a>
                </div>

                <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 p-6 hover:-translate-y-1">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">My Reviews</h3>
                    <p class="text-gray-600 mb-4">Manage your reviews</p>
                    <a href="#" class="inline-block px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg transition">View My Reviews</a>
                </div>
            </div>
        <?php endif; ?>
    <?php else: ?>
        <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 rounded-lg" role="alert">
            Please <a href="<?php echo e(route('login')); ?>" class="text-indigo-600 underline">log in</a> to access the dashboard.
        </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\UOG0423057_FrontEnd\resources\views/dashboard.blade.php ENDPATH**/ ?>