<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart - SerendibMade</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .custom-overlay {
            background: rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-lg rounded-xl p-8 w-full max-w-2xl">
        <h1 class="text-2xl font-bold text-center text-teal-700 mb-6">🛒 Your Cart</h1>

        <div id="cart-items" class="space-y-4"></div>

        <div class="mt-6">
            <div class="flex justify-between mb-2">
                <span class="font-medium text-lg">Subtotal:</span>
                <span id="cart-subtotal" class="font-bold text-lg text-teal-700">$0.00</span>
            </div>
            <button id="checkout-btn" class="w-full bg-teal-600 text-white py-3 rounded-lg hover:bg-teal-700 transition">
                Proceed to Checkout
            </button>
        </div>
    </div>

    <!-- Custom Card Payment Popup -->
    <div id="payment-modal" class="fixed inset-0 flex items-center justify-center custom-overlay z-50 hidden">
        <div class="bg-white rounded-lg p-8 w-full max-w-md shadow-xl">
            <h2 class="text-xl font-bold text-teal-700 mb-4 text-center">💳 Card Payment</h2>
            <form id="payment-form" class="space-y-4">
                <input type="text" placeholder="Full Name" id="name" class="w-full border px-4 py-2 rounded" required>
                <input type="text" placeholder="Shipping Address" id="address" class="w-full border px-4 py-2 rounded" required>
                <input type="text" placeholder="Card Number" id="card" class="w-full border px-4 py-2 rounded" required>

                <div class="flex justify-end gap-2 mt-4">
                    <button type="button" onclick="closeModal('payment-modal')" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Cancel</button>
                    <button type="submit" class="px-6 py-2 bg-teal-600 text-white rounded hover:bg-teal-700">Pay</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Order Success Popup -->
    <div id="success-modal" class="fixed inset-0 flex items-center justify-center custom-overlay z-50 hidden">
        <div class="bg-white p-6 rounded-lg text-center shadow-xl max-w-sm">
            <h3 class="text-xl font-semibold text-teal-700 mb-2">🎉 Order Placed!</h3>
            <p class="text-gray-600 mb-4">Your order was successfully placed.</p>
            <button onclick="closeModal('success-modal')" class="bg-teal-600 text-white px-6 py-2 rounded hover:bg-teal-700">
                OK
            </button>
        </div>
    </div>

    <script>
        const cartItemsEl = document.getElementById('cart-items');
        const cartSubtotalEl = document.getElementById('cart-subtotal');

        function displayCart() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            let subtotal = 0;
            let html = '';

            if (cart.length === 0) {
                html = `<p class="text-center text-gray-500">Your cart is empty.</p>`;
                document.getElementById('checkout-btn').style.display = 'none';
            } else {
                cart.forEach(item => {
                    const total = item.price * item.quantity;
                    subtotal += total;

                    html += `
                        <div class="flex justify-between items-center bg-gray-50 p-3 rounded shadow">
                            <div>
                                <h3 class="font-semibold">${item.name}</h3>
                                <p class="text-sm text-gray-600">$${item.price.toFixed(2)} × ${item.quantity}</p>
                            </div>
                            <span class="font-bold text-teal-700">$${total.toFixed(2)}</span>
                        </div>
                    `;
                });
            }

            cartItemsEl.innerHTML = html;
            cartSubtotalEl.textContent = `$${subtotal.toFixed(2)}`;
        }

        function showModal(id) {
            document.getElementById(id).classList.remove('hidden');
        }

        function closeModal(id) {
            document.getElementById(id).classList.add('hidden');
        }

        document.getElementById('checkout-btn')?.addEventListener('click', () => {
            showModal('payment-modal');
        });

        document.getElementById('payment-form')?.addEventListener('submit', function (e) {
            e.preventDefault();
            const name = document.getElementById('name').value.trim();
            const address = document.getElementById('address').value.trim();
            const card = document.getElementById('card').value.trim();

            if (name && address && card) {
                closeModal('payment-modal');
                showModal('success-modal');
                localStorage.removeItem('cart');
                displayCart();
            } else {
                alert('Please fill all fields.'); // simple fallback
            }
        });

        document.addEventListener('DOMContentLoaded', () => {
            displayCart();
        });
    </script>
</body>
</html>
