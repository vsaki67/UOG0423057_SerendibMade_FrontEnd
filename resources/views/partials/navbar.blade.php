@if(!request()->is('dashboard*'))
<nav class="bg-white shadow-lg sticky top-0 z-50">
    <!-- Discount Notification Bar -->
    <div class="bg-gray-700 text-white py-2 px-4 text-sm font-medium flex items-center justify-center relative">
        <span>🎉 Get 10% off your first order! Use code: <strong>WELCOME10</strong></span>
        <button 
            class="absolute right-4 text-white hover:text-gray-200 text-lg leading-none focus:outline-none"
            onclick="this.parentElement.style.display='none'"
            aria-label="Dismiss"
        >
            &times;
        </button>
    </div>

    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <div class="flex items-center space-x-2">
                <a href="/" class="flex items-center">
                    <img 
                        src="{{ asset('Images_used/homepage_images/SERENDIB-Made(1).png') }}" 
                        alt="SerendibMade Logo"
                        class="h-10 w-auto mr-2"
                    >
                    <div class="text-2xl font-bold">
                        <span style="font-family: 'Cinzel Decorative', serif; color: #007D7D">SERENDIB</span>
                        <span style="font-family: 'Raleway', sans-serif; color: #7b8b8e">MADE</span>
                    </div>
                </a>
            </div>

            <!-- Desktop Navigation - Only show when NOT in dashboard -->
            @if(!request()->is('dashboard*'))
            <div class="hidden lg:flex items-center space-x-8">
                <a href="/" class="text-gray-700 hover:text-[#007D7D] transition">Home</a>
                <div class="relative dropdown group">
                    <a href="/productpg" class="text-gray-700 hover:text-[#007D7D] transition flex items-center">
                        Products <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path></svg>
                    </a>
                    <div class="dropdown-menu absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                        <a href="/productpg" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F2E6D8] hover:text-[#007D7D]">Traditional Art</a>
                        <a href="/productpg" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F2E6D8] hover:text-[#007D7D]">Batik</a>
                        <a href="/productpg" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F2E6D8] hover:text-[#007D7D]">Spices</a>
                        <a href="/productpg" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F2E6D8] hover:text-[#007D7D]">Tea</a>
                        <a href="/productpg" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F2E6D8] hover:text-[#007D7D]">Masks</a>
                        <a href="/productpg" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F2E6D8] hover:text-[#007D7D]">Gems</a>
                    </div>
                </div>

                <a href="/aboutus" class="text-gray-700 hover:text-[#007D7D] transition">About Us</a>
                <a href="/artisanpg" class="text-gray-700 hover:text-[#007D7D] transition">Artisan</a>
                <a href="/contactus" class="text-gray-700 hover:text-[#007D7D] transition">Contact Us</a>

                <!-- Language Dropdown -->
                <div class="relative dropdown">
                    <button class="text-gray-700 hover:text-[#007D7D] transition flex items-center dropdown-btn">
                        <span id="currentLang">EN</span> 
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="dropdown-menu absolute right-0 mt-2 w-24 bg-white rounded-md shadow-lg py-1 hidden">
                        <button onclick="changeLang('EN')" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-[#F2E6D8]">English</button>
                        <button onclick="changeLang('JP')" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-[#F2E6D8]">日本語</button>
                    </div>
                </div>
            </div>
            @endif

            <!-- Icons and Mobile Menu Button -->
            <div class="flex items-center space-x-4">
                @auth
                    <!-- Show username -->
                    <span class="text-gray-700 font-medium">
                        Hello, {{ Auth::user()->name }}
                    </span>

                    <!-- Logout form -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button 
                            type="submit"
                            class="text-gray-700 hover:text-red-600 transition"
                            onclick="return confirm('Are you sure you want to log out?')"
                        >
                            Logout
                        </button>
                    </form>
                @else
                    <a href="/loginpg" class="text-gray-700 hover:text-[#007D7D] transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </a>
                @endauth

                <!-- Keep Wishlist and Cart - Only show when NOT in dashboard -->
                @if(!request()->is('dashboard*'))
                <a href="/wishlist" class="text-gray-700 hover:text-[#007D7D] transition relative">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                        </path>
                    </svg>
                </a>

                <a href="/cart" class="flex items-center text-gray-700 hover:text-[#007D7D] transition relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    <span id="cart-counter" class="ml-1">0</span>
                </a>
                @endif

                <!-- Mobile Toggle -->
                <div class="lg:hidden">
                    <button id="mobileMenuButton" aria-label="Toggle mobile menu" class="text-gray-700 hover:text-[#007D7D]">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu - Only show when NOT in dashboard -->
        @if(!request()->is('dashboard*'))
        <div id="mobileMenu" class="lg:hidden hidden border-t">
            <div class="py-4 space-y-4">
                <a href="/homeindex" class="block text-gray-700 hover:text-[#007D7D]">Home</a>
                <div>
                    <button onclick="toggleProductsMenu()" class="flex items-center justify-between w-full text-gray-700 hover:text-[#007D7D]">
                        Products
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="mobileProductsMenu" class="hidden ml-4 mt-2 space-y-2">
                        <a href="/productpg" class="block text-sm text-gray-600 hover:text-[#007D7D]">Traditional Art</a>
                        <a href="/productpg" class="block text-sm text-gray-600 hover:text-[#007D7D]">Batik</a>
                        <a href="/productpg" class="block text-sm text-gray-600 hover:text-[#007D7D]">Spices</a>
                        <a href="/productpg" class="block text-sm text-gray-600 hover:text-[#007D7D]">Tea</a>
                        <a href="/productpg" class="block text-sm text-gray-600 hover:text-[#007D7D]">Masks</a>
                        <a href="/productpg" class="block text-sm text-gray-600 hover:text-[#007D7D]">Gems</a>
                    </div>
                </div>
                <a href="/aboutus" class="block text-gray-700 hover:text-[#007D7D]">About Us</a>
                <a href="/artisanpg" class="block text-gray-700 hover:text-[#007D7D]">Artisan</a>
                <a href="/contactus" class="block text-gray-700 hover:text-[#007D7D]">Contact Us</a>
            </div>
        </div>
        @endif
    </div>

    <!-- Cart Notification -->
    <div id="cart-notification" class="fixed top-20 right-4 bg-green-500 text-white px-4 py-2 rounded-md shadow-lg items-center space-x-2 hidden">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
        <span id="notification-message">Item added to cart</span>
    </div>

    <!-- Logout Confirmation Modal -->
    <div id="logoutModal" class="fixed inset-0 z-50 bg-black bg-opacity-40 flex items-center justify-center hidden">
        <div class="bg-white rounded-2xl shadow-lg p-6 max-w-sm w-full text-center space-y-4">
            <h2 class="text-xl font-semibold text-gray-800">Log out?</h2>
            <p class="text-gray-600">Are you sure you want to log out of SerendibMade?</p>

            <div class="flex justify-center gap-4 mt-4">
                <!-- Cancel Button -->
                <button
                    onclick="document.getElementById('logoutModal').classList.add('hidden')"
                    class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition"
                >
                    Cancel
                </button>

                <!-- Confirm Logout Button -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button
                        type="submit"
                        class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition"
                    >
                        Yes, Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>

<script>
    // Mobile menu toggle
    document.getElementById('mobileMenuButton').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobileMenu');
        mobileMenu.classList.toggle('hidden');
    });

    // Products menu toggle for mobile
    function toggleProductsMenu() {
        const productsMenu = document.getElementById('mobileProductsMenu');
        productsMenu.classList.toggle('hidden');
    }

    // Language dropdown functionality
    const dropdownBtns = document.querySelectorAll('.dropdown-btn');
    dropdownBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const dropdown = this.nextElementSibling;
            dropdown.classList.toggle('hidden');
        });
    });

    // Close dropdowns when clicking outside
    document.addEventListener('click', function(e) {
        if (!e.target.matches('.dropdown-btn')) {
            const dropdowns = document.querySelectorAll('.dropdown-menu');
            dropdowns.forEach(dropdown => {
                if (!dropdown.classList.contains('hidden')) {
                    dropdown.classList.add('hidden');
                }
            });
        }
    });

    // Language change function
    function changeLang(lang) {
        document.getElementById('currentLang').textContent = lang;
        // Here you would typically make an AJAX call to change the language
    }
</script>
@endif