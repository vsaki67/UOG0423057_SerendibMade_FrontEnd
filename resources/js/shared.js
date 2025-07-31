// ======================
// Shared Cart Functions
// ======================
let cart = JSON.parse(localStorage.getItem('cart')) || [];

function saveCart() {
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartCounter();
    if (window.location.pathname.includes('/cart')) {
        displayCart();
    }
    window.dispatchEvent(new Event('cartUpdated'));
}

function updateCartCounter() {
    try {
        const counter = document.getElementById('cart-counter');
        if (counter) {
            const totalItems = cart.reduce((total, item) => total + (item.quantity || 1), 0);
            counter.textContent = totalItems;
            counter.classList.toggle('hidden', totalItems === 0);
        }
    } catch (error) {
        console.error('Error updating cart counter:', error);
    }
}

function showCartNotification(message = 'Item added to cart') {
    try {
        const notification = document.getElementById('cart-notification');
        if (notification) {
            const messageEl = notification.querySelector('#notification-message');
            if (messageEl) messageEl.textContent = message;
            
            notification.classList.remove('hidden', 'opacity-0');
            notification.classList.add('flex', 'opacity-100');
            
            setTimeout(() => {
                notification.classList.add('opacity-0');
                setTimeout(() => notification.classList.add('hidden'), 300);
            }, 3000);
        }
    } catch (error) {
        console.error('Error showing cart notification:', error);
    }
}

function addToCart(product) {
    const existingItem = cart.find(item => item.id === product.id);
    
    if (existingItem) {
        existingItem.quantity = (existingItem.quantity || 1) + 1;
    } else {
        product.quantity = 1;
        cart.push(product);
    }
    
    saveCart();
    showCartNotification(`${product.name} added to cart`);
}

function removeFromCart(id) {
    cart = cart.filter(item => item.id !== id);
    saveCart();
    showCartNotification('Item removed from cart');
}

function displayCart() {
    try {
        const cartItemsEl = document.getElementById('cart-items');
        const cartSubtotalEl = document.getElementById('cart-subtotal');
        const checkoutBtn = document.getElementById('checkout-btn');

        let subtotal = 0;
        let html = '';

        if (cart.length === 0) {
            html = `<div class="text-center py-8">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <h3 class="mt-4 text-lg font-medium text-gray-900">Your cart is empty</h3>
                <p class="mt-1 text-gray-500">Start adding some items to your cart</p>
                <div class="mt-6">
                    <a href="/products" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-teal-600 hover:bg-teal-700">
                        Continue Shopping
                    </a>
                </div>
            </div>`;
            
            if (checkoutBtn) {
                checkoutBtn.style.display = 'none';
            }
        } else {
            cart.forEach(item => {
                const total = (item.price || 0) * (item.quantity || 1);
                subtotal += total;

                html += `
                    <div class="cart-item flex flex-col sm:flex-row justify-between items-start sm:items-center bg-gray-50 p-4 rounded-lg shadow mb-3 gap-3">
                        <div class="flex items-center gap-4 flex-1 min-w-0">
                            <img src="/Images_used/ProductPage_images/${item.image || 'default-product.png'}" 
                                 alt="${item.name}" 
                                 class="w-16 h-16 object-cover rounded">
                            <div class="min-w-0">
                                <h3 class="font-semibold text-gray-800 truncate">${item.name}</h3>
                                <p class="text-sm text-gray-600">$${(item.price || 0).toFixed(2)} × ${item.quantity || 1}</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <span class="font-bold text-teal-700 whitespace-nowrap">$${total.toFixed(2)}</span>
                            <button onclick="removeFromCart('${item.id}')" 
                                    class="text-red-600 hover:text-red-800 transition-colors"
                                    aria-label="Remove item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                `;
            });

            if (checkoutBtn) {
                checkoutBtn.style.display = 'block';
            }
        }

        if (cartItemsEl) cartItemsEl.innerHTML = html;
        if (cartSubtotalEl) cartSubtotalEl.textContent = `$${subtotal.toFixed(2)}`;
    } catch (error) {
        console.error('Error displaying cart:', error);
    }
}

// ======================
// Navbar Functions
// ======================
function setupNavbar() {
    try {
        // Desktop dropdown toggle
        document.querySelectorAll('.dropdown-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.stopPropagation();
                const dropdown = this.closest('.dropdown');
                const menu = dropdown?.querySelector('.dropdown-menu');

                if (!menu) return;

                // Close others
                document.querySelectorAll('.dropdown-menu').forEach(m => {
                    if (m !== menu) m.classList.add('hidden');
                });

                menu.classList.toggle('hidden');
            });
        });

        // Close dropdowns on outside click
        document.addEventListener('click', () => {
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                menu.classList.add('hidden');
            });
        });

        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        const mobileMenu = document.getElementById('mobileMenu');

        if (mobileMenuButton && mobileMenu && !mobileMenuButton.hasAttribute('data-initialized')) {
            mobileMenuButton.addEventListener('click', function () {
                mobileMenu.classList.toggle('hidden');
                this.setAttribute('aria-expanded', !mobileMenu.classList.contains('hidden'));
            });
            mobileMenuButton.setAttribute('data-initialized', 'true');
        }
    } catch (error) {
        console.error('Error setting up navbar:', error);
    }
}

// ======================
// Global Functions
// ======================
window.changeLang = function (lang) {
    try {
        const element = document.getElementById('currentLang');
        if (element) element.textContent = lang;
    } catch (error) {
        console.error('Error changing language:', error);
    }
};

window.toggleProductsMenu = function () {
    try {
        const menu = document.getElementById('mobileProductsMenu');
        if (menu) menu.classList.toggle('hidden');
    } catch (error) {
        console.error('Error toggling products menu:', error);
    }
};

// ======================
// Initialization
// ======================
document.addEventListener('DOMContentLoaded', function() {
    setupNavbar();
    updateCartCounter();

    if (window.location.pathname.includes('/cart')) {
        displayCart();
    }
});

// ======================
// Exports & Events
// ======================
window.addToCart = addToCart;
window.removeFromCart = removeFromCart;
window.updateCartCounter = updateCartCounter;
window.showCartNotification = showCartNotification;

window.addEventListener('cartUpdated', function() {
    updateCartCounter();
    if (window.location.pathname.includes('/cart')) {
        displayCart();
    }
});

export default setupNavbar;
