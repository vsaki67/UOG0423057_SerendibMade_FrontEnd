<!-- resources/views/wishlist.blade.php -->



<?php $__env->startSection('content'); ?>
<div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl font-bold text-center text-emerald-700 mb-8">Your Wishlist</h2>

        <div id="wishlist-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Wishlist items will be dynamically inserted here -->
            <?php if(isset($wishlistItems) && count($wishlistItems) > 0): ?>
                <?php $__currentLoopData = $wishlistItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="wishlist-item bg-white rounded-2xl shadow hover:shadow-lg transition duration-300 overflow-hidden" data-id="<?php echo e($item['id']); ?>">
                    <img src="<?php echo e(asset('Images_used/ProductPage_images/' . $item['image'])); ?>" alt="<?php echo e($item['name']); ?>" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <h3 class="text-xl font-semibold text-gray-800"><?php echo e($item['name']); ?></h3>
                        <p class="text-sm text-gray-500 mt-1">Price: $<?php echo e(number_format($item['price'], 2)); ?></p>
                        <div class="flex items-center justify-between mt-4">
                            <button class="add-to-cart-from-wishlist bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700 transition flex items-center gap-1"
                                data-id="<?php echo e($item['id']); ?>"
                                data-name="<?php echo e($item['name']); ?>"
                                data-price="<?php echo e($item['price']); ?>"
                                data-image="<?php echo e($item['image']); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Add to Cart
                            </button>
                            <button class="remove-from-wishlist text-red-500 hover:text-red-700 transition flex items-center gap-1"
                                data-id="<?php echo e($item['id']); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                                Remove
                            </button>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <div class="col-span-full text-center py-12">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                    <h3 class="mt-4 text-lg font-medium text-gray-900">Your wishlist is empty</h3>
                    <p class="mt-1 text-gray-500">Start adding items to your wishlist from our products page.</p>
                    <div class="mt-6">
                        <a href="/productpg" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                            Browse Products
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <?php if(isset($wishlistItems) && count($wishlistItems) > 0): ?>
        <div class="text-center mt-10">
            <a href="/productpg" class="inline-block bg-emerald-600 text-white px-6 py-2 rounded-xl hover:bg-emerald-700 transition">
                Continue Shopping
            </a>
        </div>
        <?php endif; ?>
    </div>
</div>

<!-- Cart Notification Element -->
<div id="cart-notification" class="hidden fixed bottom-5 right-5 bg-emerald-600 text-white px-6 py-3 rounded-lg shadow-lg items-center gap-2">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
    </svg>
    <span id="notification-message">Item added to cart</span>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize cart if it doesn't exist
        if (!localStorage.getItem('cart')) {
            localStorage.setItem('cart', JSON.stringify([]));
        }

        // Remove item from wishlist
        document.querySelectorAll('.remove-from-wishlist').forEach(button => {
            button.addEventListener('click', function() {
                const productId = this.dataset.id;
                removeFromWishlist(productId);
                
                // Remove the item from the DOM
                const itemElement = this.closest('.wishlist-item');
                itemElement.classList.add('opacity-0', 'transition-opacity', 'duration-300');
                setTimeout(() => {
                    itemElement.remove();
                    checkEmptyWishlist();
                }, 300);
            });
        });

        // Add to cart from wishlist
        document.querySelectorAll('.add-to-cart-from-wishlist').forEach(button => {
            button.addEventListener('click', function() {
                const product = {
                    id: this.dataset.id,
                    name: this.dataset.name,
                    price: parseFloat(this.dataset.price),
                    image: this.dataset.image
                };
                
                addToCart(product);
                showCartNotification(product.name);
            });
        });

        function removeFromWishlist(productId) {
            let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
            wishlist = wishlist.filter(item => item.id !== productId);
            localStorage.setItem('wishlist', JSON.stringify(wishlist));
            
            // Update wishlist buttons on product page if it exists
            if (typeof updateWishlistButtons === 'function') {
                updateWishlistButtons();
            }
        }

        function addToCart(product) {
            const cart = JSON.parse(localStorage.getItem('cart'));
            const existingItem = cart.find(item => item.id === product.id);
            
            if (existingItem) {
                existingItem.quantity = (existingItem.quantity || 1) + 1;
            } else {
                product.quantity = 1;
                cart.push(product);
            }
            
            localStorage.setItem('cart', JSON.stringify(cart));
            
            // Update cart counter if it exists
            if (typeof updateCartCounter === 'function') {
                updateCartCounter();
            }
        }

        function showCartNotification(productName) {
            const notification = document.getElementById('cart-notification');
            const message = document.getElementById('notification-message');
            
            message.textContent = `${productName} added to cart`;
            notification.classList.remove('hidden');
            notification.classList.add('flex');
            
            setTimeout(() => {
                notification.classList.add('hidden');
                notification.classList.remove('flex');
            }, 3000);
        }

        function checkEmptyWishlist() {
            const wishlistContainer = document.getElementById('wishlist-container');
            const wishlistItems = wishlistContainer.querySelectorAll('.wishlist-item');
            
            if (wishlistItems.length === 0) {
                wishlistContainer.innerHTML = `
                    <div class="col-span-full text-center py-12">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                        <h3 class="mt-4 text-lg font-medium text-gray-900">Your wishlist is empty</h3>
                        <p class="mt-1 text-gray-500">Start adding items to your wishlist from our products page.</p>
                        <div class="mt-6">
                            <a href="/productpg" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                                Browse Products
                            </a>
                        </div>
                    </div>
                `;
                
                // Hide the "Continue Shopping" button
                const continueShoppingDiv = document.querySelector('.text-center.mt-10');
                if (continueShoppingDiv) {
                    continueShoppingDiv.style.display = 'none';
                }
            }
        }
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\UOG0423057_FrontEnd\resources\views/wishlist.blade.php ENDPATH**/ ?>