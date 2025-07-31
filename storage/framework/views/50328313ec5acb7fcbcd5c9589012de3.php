

<?php $__env->startSection('title', 'SerendibMade - Products'); ?>

<?php $__env->startSection('content'); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">
    
    <style>
        /* Custom styles */
        .product-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .section-title {
            font-family: 'Cinzel Decorative', serif;
            position: relative;
            display: inline-block;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            width: 50%;
            height: 2px;
            bottom: -8px;
            left: 25%;
            background: linear-gradient(to right, transparent, #5E3023, transparent);
        }
        
        .product-image-container {
            position: relative;
            overflow: hidden;
            height: 0;
            padding-bottom: 100%;
        }
        
        .product-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .featured-product-image {
            height: 100%;
            min-height: 400px;
            object-fit: cover;
        }
        
        .product-badge {
            position: absolute;
            top: 12px;
            left: 12px;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
        }
        
        .artisan-story {
            border-left: 3px solid #5E3023;
            padding-left: 16px;
        }
        
        /* Cart notification */
        #cart-notification {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #007D7D;
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            z-index: 1000;
            transition: all 0.3s ease;
            display: none;
            align-items: center;
            gap: 10px;
            opacity: 0;
        }
        
        #cart-notification.show {
            display: flex;
            opacity: 1;
        }

        /* Wishlist notification */
        #wishlist-notification {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #CC3333;
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            z-index: 1000;
            transition: all 0.3s ease;
            display: none;
            align-items: center;
            gap: 10px;
            opacity: 0;
        }
        
        #wishlist-notification.show {
            display: flex;
            opacity: 1;
        }
        
        /* Cart counter */
        #cart-counter {
            background: #CC3333;
            color: white;
            border-radius: 50%;
            padding: 2px 6px;
            font-size: 12px;
            margin-left: 4px;
        }

        /* Wishlist button active state */
        .wishlist-btn.active {
            background-color: #FFCC00;
        }

        .wishlist-btn.active svg {
            fill: #CC3333;
            stroke: #CC3333;
        }
    </style>

    <!-- Cart Notification Element -->
    <div id="cart-notification" class="hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
        <span id="notification-message">Item added to cart</span>
    </div>

    <!-- Wishlist Notification Element -->
    <div id="wishlist-notification" class="hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
        <span id="wishlist-notification-message">Item added to wishlist</span>
    </div>

    <!-- Traditional Art Section -->
    <section id="traditional-art" class="py-16 bg-[#F9F5F0]">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="section-title text-3xl md:text-4xl font-bold text-[#5E3023]">Traditional Art Collection</h2>
                <p class="text-[#5E3023] max-w-3xl mx-auto mt-4">Our traditional art pieces are created by master artisans using techniques passed down through generations.</p>
            </div>
            
            <!-- Featured Product -->
            <div class="mb-16 bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="md:flex">
                    <div class="md:w-1/2">
                        <div class="h-full">
                            <img src="<?php echo e(asset('Images_used/ProductPage_images/art4.png')); ?>" alt="Sacred Buddha Painting" class="featured-product-image w-full">
                        </div>
                    </div>
                    <div class="md:w-1/2 p-8 flex flex-col justify-center">
                        <div class="flex items-center mb-4">
                            <div class="flex text-[#FFCC00]">★ ★ ★ ★ ★</div>
                            <span class="text-sm text-gray-500 ml-2">(42 reviews)</span>
                        </div>
                        <h3 class="text-3xl font-bold text-[#5E3023] mb-4">Sacred Buddha Painting</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">This exquisite painting depicts the Buddha in meditation, created using traditional natural pigments on handmade paper.</p>
                        <div class="mb-6">
                            <span class="text-3xl font-bold text-[#007D7D]">$129.99</span>
                            <span class="text-lg text-gray-500 line-through ml-2">$159.99</span>
                            <span class="ml-4 bg-[#CC3333] text-white text-sm font-semibold px-2 py-1 rounded">20% OFF</span>
                        </div>
                        <div class="mb-6 artisan-story">
                            <h4 class="font-semibold text-[#5E3023] mb-2">Artisan Story:</h4>
                            <p class="text-gray-600">Created by Master Artist Sarath Wijesinghe from Kandy, who has been practicing this art form for over 35 years.</p>
                        </div>
                        <div class="flex gap-4">
                            <button 
                                class="add-to-cart-btn bg-[#007D7D] hover:bg-[#006666] text-white px-6 py-3 rounded-lg transition-colors font-semibold flex items-center justify-center gap-2 flex-1"
                                data-id="art4"
                                data-name="Sacred Buddha Painting"
                                data-price="129.99"
                                data-image="art4.png"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Add to Cart
                            </button>
                            <button 
                                class="wishlist-btn bg-gray-100 hover:bg-gray-200 text-gray-800 px-4 py-3 rounded-lg transition-colors font-semibold flex items-center justify-center"
                                data-id="art4"
                                data-name="Sacred Buddha Painting"
                                data-price="129.99"
                                data-image="art4.png"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Product Card 1 -->
                <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <div class="product-image-container">
                            <img src="<?php echo e(asset('Images_used/ProductPage_images/art1.png')); ?>" alt="Elephant Wood Carving" class="product-image">
                        </div>
                        <div class="absolute top-4 right-4">
                            <button class="wishlist-btn p-2 bg-white rounded-full shadow-md hover:bg-[#FFCC00] transition-colors"
                                data-id="art1"
                                data-name="Elephant Wood Carving"
                                data-price="124.99"
                                data-image="art1.png">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#CC3333]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-1">
                            <div class="flex text-[#FFCC00]">★ ★ ★ ★ ☆</div>
                            <span class="text-xs text-gray-500 ml-1">(18)</span>
                        </div>
                        <h4 class="text-xl font-semibold text-[#5E3023] mb-2">Elephant Wood Carving</h4>
                        <p class="text-gray-600 text-sm mb-4">Handcrafted from sustainably sourced teak wood, this 12" carving symbolizes wisdom and strength.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-[#007D7D]">$124.99</span>
                            <button 
                                class="add-to-cart-btn bg-[#007D7D] text-white px-4 py-2 rounded-lg hover:bg-[#006666] transition-colors flex items-center gap-1"
                                data-id="art1"
                                data-name="Elephant Wood Carving"
                                data-price="124.99"
                                data-image="art1.png"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Add
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <div class="product-image-container">
                            <img src="<?php echo e(asset('Images_used/ProductPage_images/art2.png')); ?>" alt="Traditional Mask" class="product-image">
                        </div>
                        <div class="absolute top-4 right-4">
                            <button class="wishlist-btn p-2 bg-white rounded-full shadow-md hover:bg-[#FFCC00] transition-colors"
                                data-id="art2"
                                data-name="Kolam Mask"
                                data-price="95.50"
                                data-image="art2.png">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                        <span class="product-badge bg-[#663399] text-white">NEW</span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-1">
                            <div class="flex text-[#FFCC00]">★ ★ ★ ★ ☆</div>
                            <span class="text-xs text-gray-500 ml-1">(9)</span>
                        </div>
                        <h4 class="text-xl font-semibold text-[#5E3023] mb-2">Kolam Mask</h4>
                        <p class="text-gray-600 text-sm mb-4">Authentic Sri Lankan ceremonial mask, hand-carved and painted using traditional techniques from Ambalangoda.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-[#007D7D]">$95.50</span>
                            <button 
                                class="add-to-cart-btn bg-[#007D7D] text-white px-4 py-2 rounded-lg hover:bg-[#006666] transition-colors flex items-center gap-1"
                                data-id="art2"
                                data-name="Kolam Mask"
                                data-price="95.50"
                                data-image="art2.png"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Add
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <div class="product-image-container">
                            <img src="<?php echo e(asset('Images_used/ProductPage_images/art3.png')); ?>" alt="Temple Scene Canvas" class="product-image">
                        </div>
                        <div class="absolute top-4 right-4">
                            <button class="wishlist-btn p-2 bg-white rounded-full shadow-md hover:bg-[#FFCC00] transition-colors"
                                data-id="art3"
                                data-name="Temple Scene Canvas"
                                data-price="67.99"
                                data-image="art3.png">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                        <span class="product-badge bg-[#339966] text-white">ECO-FRIENDLY</span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-1">
                            <div class="flex text-[#FFCC00]">★ ★ ★ ★ ★</div>
                            <span class="text-xs text-gray-500 ml-1">(32)</span>
                        </div>
                        <h4 class="text-xl font-semibold text-[#5E3023] mb-2">Temple Scene Canvas</h4>
                        <p class="text-gray-600 text-sm mb-4">Traditional Sri Lankan temple artwork with gold leaf details, depicting the famous Temple of the Tooth in Kandy.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-[#007D7D]">$67.99</span>
                            <button 
                                class="add-to-cart-btn bg-[#007D7D] text-white px-4 py-2 rounded-lg hover:bg-[#006666] transition-colors flex items-center gap-1"
                                data-id="art3"
                                data-name="Temple Scene Canvas"
                                data-price="67.99"
                                data-image="art3.png"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Add
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View More Button -->
            <div class="mt-12 text-center">
                <a href="#" class="inline-block border-2 border-[#5E3023] text-[#5E3023] font-semibold px-8 py-3 rounded-lg hover:bg-[#5E3023] hover:text-white transition-colors">
                    View All Traditional Art
                </a>
            </div>
        </div>
    </section>

    <!-- Batik Section -->
    <section id="batik" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="section-title text-3xl md:text-4xl font-bold text-gray-800">Batik Collection</h2>
                <p class="text-gray-600 max-w-3xl mx-auto mt-4">Discover the vibrant world of Sri Lankan batik, where wax-resist dyeing techniques create stunning patterns on fabric, each telling a unique story.</p>
            </div>
            
            <!-- Batik Story -->
            <div class="mb-12 bg-gray-50 rounded-xl p-8 md:p-12">
                <div class="md:flex items-center">
                    <div class="md:w-1/3 mb-6 md:mb-0 md:pr-8">
                        <div class="product-image-container rounded-lg overflow-hidden">
                            <img src="<?php echo e(asset('Images_used/ProductPage_images/batik1.png')); ?>" alt="Batik Artisan" class="product-image">
                        </div>
                    </div>
                    <div class="md:w-2/3">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">The Art of Sri Lankan Batik</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">Batik in Sri Lanka is more than just fabric - it's a cultural heritage. Our artisans use traditional methods of applying wax and dyes to create intricate designs that often depict local flora, fauna, and cultural motifs.</p>
                        <p class="text-gray-600 leading-relaxed">Each piece is unique, with the characteristic "crackle" effect that occurs when dye penetrates the wax-resist lines. This labor-intensive process can take weeks to complete for a single piece.</p>
                    </div>
                </div>
            </div>
            
            <!-- Batik Products -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <div class="product-image-container">
                            <img src="<?php echo e(asset('Images_used/ProductPage_images/batik2.png')); ?>" alt="Traditional Batik Dress" class="product-image">
                        </div>
                        <div class="absolute top-4 right-4">
                            <button class="wishlist-btn p-2 bg-white rounded-full shadow-md hover:bg-[#FFCC00] transition-colors"
                                data-id="batik2"
                                data-name="Traditional Batik Dress"
                                data-price="156.99"
                                data-image="batik2.png">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Traditional Batik Dress</h4>
                        <p class="text-gray-600 text-sm mb-4">Handcrafted luxury silk batik dress featuring peacock motifs, perfect for special occasions or as a statement piece.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$156.99</span>
                            <button class="add-to-cart-btn bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors"
                                data-id="batik2"
                                data-name="Traditional Batik Dress"
                                data-price="156.99"
                                data-image="batik2.png">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <div class="product-image-container">
                            <img src="<?php echo e(asset('Images_used/ProductPage_images/batik3.png')); ?>" alt="Batik Mens Shirt" class="product-image">
                        </div>
                        <div class="absolute top-4 right-4">
                            <button class="wishlist-btn p-2 bg-white rounded-full shadow-md hover:bg-[#FFCC00] transition-colors"
                                data-id="batik3"
                                data-name="Batik Mens Shirt"
                                data-price="78.99"
                                data-image="batik3.png">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Batik Mens Shirt</h4>
                        <p class="text-gray-600 text-sm mb-4">Stylish batik luxury shirt for men, featuring intricate patterns and a comfortable fit, perfect for casual outings.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$78.99</span>
                            <button class="add-to-cart-btn bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors"
                                data-id="batik3"
                                data-name="Batik Mens Shirt"
                                data-price="78.99"
                                data-image="batik3.png">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <div class="product-image-container">
                            <img src="<?php echo e(asset('Images_used/ProductPage_images/batik4.png')); ?>" alt="Batik Scarf" class="product-image">
                        </div>
                        <div class="absolute top-4 right-4">
                            <button class="wishlist-btn p-2 bg-white rounded-full shadow-md hover:bg-[#FFCC00] transition-colors"
                                data-id="batik4"
                                data-name="Silk Batik Scarf"
                                data-price="42.99"
                                data-image="batik4.png">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Silk Batik Scarf</h4>
                        <p class="text-gray-600 text-sm mb-4">Luxurious silk scarf with intricate batik print in vibrant colors, lightweight and perfect for any season.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$42.99</span>
                            <button class="add-to-cart-btn bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors"
                                data-id="batik4"
                                data-name="Silk Batik Scarf"
                                data-price="42.99"
                                data-image="batik4.png">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- View More Button -->
            <div class="mt-12 text-center">
                <a href="#" class="inline-block border-2 border-blue-600 text-blue-600 font-semibold px-8 py-3 rounded-lg hover:bg-blue-600 hover:text-white transition-colors">
                    Explore More Batik
                </a>
            </div>
        </div>
    </section>

    <!-- Spices Section -->
    <section id="spices" class="py-16 bg-[#F8F5F0]">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="section-title text-3xl md:text-4xl font-bold text-gray-800">Ceylon Spices</h2>
                <p class="text-gray-600 max-w-3xl mx-auto mt-4">Experience the aromatic spices from the lush gardens of Sri Lanka, known for their exceptional quality and flavor.</p>
            </div>
            
            <!-- Spice Benefits -->
            <div class="grid md:grid-cols-3 gap-6 mb-12">
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div class="text-blue-600 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Premium Quality</h3>
                    <p class="text-gray-600">Our spices are handpicked at peak freshness and carefully processed to preserve their essential oils and flavors.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div class="text-blue-600 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Direct from Source</h3>
                    <p class="text-gray-600">We work directly with small-scale farmers to bring you the freshest spices while supporting local communities.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <div class="text-blue-600 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Sustainable Packaging</h3>
                    <p class="text-gray-600">Our spices come in eco-friendly packaging that preserves freshness while minimizing environmental impact.</p>
                </div>
            </div>
            
            <!-- Spice Products -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <div class="product-image-container">
                            <img src="<?php echo e(asset('Images_used/ProductPage_images/spice1.png')); ?>" alt="Ceylon Cinnamon" class="product-image">
                        </div>
                        <div class="absolute top-4 right-4">
                            <button class="wishlist-btn p-2 bg-white rounded-full shadow-md hover:bg-[#FFCC00] transition-colors"
                                data-id="spice1"
                                data-name="Ceylon Cinnamon"
                                data-price="24.99"
                                data-image="spice1.png">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Ceylon Cinnamon</h4>
                        <p class="text-gray-600 text-sm mb-4">Premium quality true cinnamon (Cinnamomum verum) with delicate flavor and low coumarin content.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$24.99</span>
                            <button class="add-to-cart-btn bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors"
                                data-id="spice1"
                                data-name="Ceylon Cinnamon"
                                data-price="24.99"
                                data-image="spice1.png">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <div class="product-image-container">
                            <img src="<?php echo e(asset('Images_used/ProductPage_images/spice2.png')); ?>" alt="Ceylon Cardamom" class="product-image">
                        </div>
                        <div class="absolute top-4 right-4">
                            <button class="wishlist-btn p-2 bg-white rounded-full shadow-md hover:bg-[#FFCC00] transition-colors"
                                data-id="spice2"
                                data-name="Ceylon Cardamom"
                                data-price="18.99"
                                data-image="spice2.png">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Ceylon Cardamom</h4>
                        <p class="text-gray-600 text-sm mb-4">Aromatic green cardamom pods with citrusy, floral notes, perfect for both sweet and savory dishes.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$18.99</span>
                            <button class="add-to-cart-btn bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors"
                                data-id="spice2"
                                data-name="Ceylon Cardamom"
                                data-price="18.99"
                                data-image="spice2.png">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <div class="product-image-container">
                            <img src="<?php echo e(asset('Images_used/ProductPage_images/spice3.png')); ?>" alt="Curry Spice Mix" class="product-image">
                        </div>
                        <div class="absolute top-4 right-4">
                            <button class="wishlist-btn p-2 bg-white rounded-full shadow-md hover:bg-[#FFCC00] transition-colors"
                                data-id="spice3"
                                data-name="Curry Spice Mix"
                                data-price="16.99"
                                data-image="spice3.png">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Curry Spice Mix</h4>
                        <p class="text-gray-600 text-sm mb-4">Authentic Sri Lankan curry blend with 12 spices, including coriander, cumin, fennel, and mustard seeds.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$16.99</span>
                            <button class="add-to-cart-btn bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors"
                                data-id="spice3"
                                data-name="Curry Spice Mix"
                                data-price="16.99"
                                data-image="spice3.png">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Spice Guide CTA -->
            <div class="mt-12 bg-[#5E3023] rounded-xl p-8 text-white">
                <div class="md:flex items-center justify-between">
                    <div class="md:w-2/3 mb-6 md:mb-0">
                        <h3 class="text-2xl font-bold mb-2">Discover the Spice of Life</h3>
                        <p>Download our free guide to Sri Lankan spices, including recipes, health benefits, and usage tips.</p>
                    </div>
                    <div class="md:w-1/3 text-right">
                        <button class="bg-white text-[#5E3023] px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                            Get Your Free Guide
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tea Section -->
    <section id="tea" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="section-title text-3xl md:text-4xl font-bold text-gray-800">Ceylon Tea</h2>
                <p class="text-gray-600 max-w-3xl mx-auto mt-4">World-renowned tea from the misty highlands of Sri Lanka, celebrated for its bright flavor and aromatic qualities.</p>
            </div>
            
            <!-- Featured Tea Products -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <div class="product-image-container">
                            <img src="<?php echo e(asset('Images_used/ProductPage_images/tea1.png')); ?>" alt="Ceylon Earl Grey" class="product-image">
                        </div>
                        <div class="absolute top-4 right-4">
                            <button class="wishlist-btn p-2 bg-white rounded-full shadow-md hover:bg-[#FFCC00] transition-colors"
                                data-id="tea1"
                                data-name="Ceylon Earl Grey"
                                data-price="19.99"
                                data-image="tea1.png">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Ceylon Earl Grey</h4>
                        <p class="text-gray-600 text-sm mb-4">Premium black tea with natural bergamot oil, creating a distinctive citrusy aroma.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$19.99</span>
                            <button class="add-to-cart-btn bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors"
                                data-id="tea1"
                                data-name="Ceylon Earl Grey"
                                data-price="19.99"
                                data-image="tea1.png">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <div class="product-image-container">
                            <img src="<?php echo e(asset('Images_used/ProductPage_images/tea2.png')); ?>" alt="Orange Pekoe" class="product-image">
                        </div>
                        <div class="absolute top-4 right-4">
                            <button class="wishlist-btn p-2 bg-white rounded-full shadow-md hover:bg-[#FFCC00] transition-colors"
                                data-id="tea2"
                                data-name="Orange Pekoe"
                                data-price="15.99"
                                data-image="tea2.png">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Orange Pekoe</h4>
                        <p class="text-gray-600 text-sm mb-4">High-grade Ceylon black tea from Nuwara Eliya with bright flavor and golden liquor.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$15.99</span>
                            <button class="add-to-cart-btn bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors"
                                data-id="tea2"
                                data-name="Orange Pekoe"
                                data-price="15.99"
                                data-image="tea2.png">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <div class="product-image-container">
                            <img src="<?php echo e(asset('Images_used/ProductPage_images/tea3.png')); ?>" alt="Ceylon Green Tea" class="product-image">
                        </div>
                        <div class="absolute top-4 right-4">
                            <button class="wishlist-btn p-2 bg-white rounded-full shadow-md hover:bg-[#FFCC00] transition-colors"
                                data-id="tea3"
                                data-name="Ceylon Green Tea"
                                data-price="22.99"
                                data-image="tea3.png">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Ceylon Green Tea</h4>
                        <p class="text-gray-600 text-sm mb-4">Organic green tea leaves with a light, refreshing taste and high antioxidant content.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$22.99</span>
                            <button class="add-to-cart-btn bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors"
                                data-id="tea3"
                                data-name="Ceylon Green Tea"
                                data-price="22.99"
                                data-image="tea3.png">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Tea Subscription CTA -->
            <div class="mt-12 bg-gradient-to-r from-green-700 to-green-900 rounded-xl p-8 text-white">
                <div class="md:flex items-center justify-between">
                    <div class="md:w-2/3 mb-6 md:mb-0">
                        <h3 class="text-2xl font-bold mb-2">Tea Lover's Subscription</h3>
                        <p class="mb-4">Never run out of your favorite Ceylon tea. Our subscription service delivers fresh tea to your door every month.</p>
                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-green-300" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Free shipping on all orders
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-green-300" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                15% discount on subscription teas
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-green-300" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Flexible plans - cancel anytime
                            </li>
                        </ul>
                    </div>
                    <div class="md:w-1/3 text-center">
                        <button class="bg-white text-green-800 px-8 py-4 rounded-lg font-bold hover:bg-gray-100 transition-colors text-lg">
                            Start Your Tea Journey
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gems Section -->
    <section id="gems" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="section-title text-3xl md:text-4xl font-bold text-gray-800">Ceylon Gems</h2>
                <p class="text-gray-600 max-w-3xl mx-auto mt-4">Sri Lanka, the "Jewel Box of the Indian Ocean," is renowned for its spectacular gemstones, including some of the world's finest sapphires.</p>
            </div>
            
            <!-- Gemstone Guide --> 
            <div class="mb-12 bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="md:flex">
                    <div class="md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">About Ceylon Gemstones</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">Sri Lanka has been a leading source of fine gemstones for over 2,500 years. The island's unique geological conditions produce gems of exceptional clarity and color.</p>
                        <p class="text-gray-600 mb-6 leading-relaxed">Our gemstones are ethically sourced through fair trade practices, supporting local miners and lapidaries while ensuring the highest quality for our customers.</p>
                        <a href="#" class="text-blue-600 font-semibold hover:underline flex items-center">
                            Learn more about our ethical sourcing
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                    <div class="md:w-1/2">
                        <div class="h-full">
                            <img src="<?php echo e(asset('Images_used/ProductPage_images/gem1.png')); ?>" alt="Ceylon Gemstones" class="featured-product-image w-full">
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Gemstone Products -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Blue Sapphire -->
                <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <div class="product-image-container">
                            <img src="<?php echo e(asset('Images_used/ProductPage_images/gem2.png')); ?>" alt="Blue Sapphire" class="product-image">
                        </div>
                        <div class="absolute top-4 right-4">
                            <button class="wishlist-btn p-2 bg-white rounded-full shadow-md hover:bg-[#FFCC00] transition-colors"
                                data-id="gem2"
                                data-name="Ceylon Blue Sapphire"
                                data-price="1299.99"
                                data-image="gem2.png">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Ceylon Blue Sapphire</h4>
                        <p class="text-gray-600 text-sm mb-4">2.5 carat natural blue sapphire with excellent clarity and cornflower blue color, set in sterling silver.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$1,299.99</span>
                            <button class="add-to-cart-btn bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors"
                                data-id="gem2"
                                data-name="Ceylon Blue Sapphire"
                                data-price="1299.99"
                                data-image="gem2.png">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Star Ruby -->
                <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <div class="product-image-container">
                            <img src="<?php echo e(asset('Images_used/ProductPage_images/gem3.png')); ?>" alt="Star Ruby" class="product-image">
                        </div>
                        <div class="absolute top-4 right-4">
                            <button class="wishlist-btn p-2 bg-white rounded-full shadow-md hover:bg-[#FFCC00] transition-colors"
                                data-id="gem3"
                                data-name="Star Ruby"
                                data-price="899.99"
                                data-image="gem3.png">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Star Ruby</h4>
                        <p class="text-gray-600 text-sm mb-4">Rare star ruby displaying sharp asterism (star effect) when viewed under direct light.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$899.99</span>
                            <button class="add-to-cart-btn bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors"
                                data-id="gem3"
                                data-name="Star Ruby"
                                data-price="899.99"
                                data-image="gem3.png">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Yellow Sapphire -->
                <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="relative">
                        <div class="product-image-container">
                            <img src="<?php echo e(asset('Images_used/ProductPage_images/gem4.png')); ?>" alt="Yellow Sapphire" class="product-image">
                        </div>
                        <div class="absolute top-4 right-4">
                            <button class="wishlist-btn p-2 bg-white rounded-full shadow-md hover:bg-[#FFCC00] transition-colors"
                                data-id="gem4"
                                data-name="Yellow Sapphire"
                                data-price="756.99"
                                data-image="gem4.png">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Yellow Sapphire</h4>
                        <p class="text-gray-600 text-sm mb-4">Brilliant yellow sapphire stone with excellent cut and clarity, perfect for custom jewelry.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$756.99</span>
                            <button class="add-to-cart-btn bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors"
                                data-id="gem4"
                                data-name="Yellow Sapphire"
                                data-price="756.99"
                                data-image="gem4.png">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Certification Info -->
            <div class="mt-16 bg-white rounded-2xl shadow-lg p-10 border border-gray-200">
                <div class="text-center">
                    <h3 class="text-3xl font-extrabold text-gray-800 mb-4 tracking-tight">Certified Authentic Gemstones</h3>
                    <p class="text-gray-600 max-w-2xl mx-auto mb-8 text-lg">
                        Every gemstone you purchase from us is certified by internationally recognized gemological laboratories,
                        ensuring natural origin, superior quality, and authenticity.
                    </p>

                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 mt-6">
                        <div class="text-center">
                            <div class="text-xl font-semibold text-[#5E3023]">GIA</div>
                            <p class="text-sm text-gray-500">Gemological Institute of America</p>
                        </div>
                        <div class="text-center">
                            <div class="text-xl font-semibold text-[#5E3023]">AGTA</div>
                            <p class="text-sm text-gray-500">American Gem Trade Association</p>
                        </div>
                        <div class="text-center">
                            <div class="text-xl font-semibold text-[#5E3023]">GSL</div>
                            <p class="text-sm text-gray-500">Gemological Science International</p>
                        </div>
                        <div class="text-center">
                            <div class="text-xl font-semibold text-[#5E3023]">NGJA</div>
                            <p class="text-sm text-gray-500">National Gem and Jewelry Authority</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize empty cart and wishlist if none exists
            if (!localStorage.getItem('cart')) {
                localStorage.setItem('cart', JSON.stringify([]));
            }
            if (!localStorage.getItem('wishlist')) {
                localStorage.setItem('wishlist', JSON.stringify([]));
            }

            // Load wishlist items and update button states
            updateWishlistButtons();

            // Add to cart button handlers
            document.querySelectorAll('.add-to-cart-btn').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const product = {
                        id: this.dataset.id,
                        name: this.dataset.name,
                        price: parseFloat(this.dataset.price),
                        image: this.dataset.image
                    };

                    if (!product.id) {
                        console.error('Product ID is missing');
                        return;
                    }

                    addToCart(product);
                });
            });

            // Wishlist button handlers
            document.querySelectorAll('.wishlist-btn').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const product = {
                        id: this.dataset.id,
                        name: this.dataset.name,
                        price: parseFloat(this.dataset.price),
                        image: this.dataset.image
                    };

                    if (!product.id) {
                        console.error('Product ID is missing');
                        return;
                    }

                    toggleWishlist(product, this);
                });
            });
        });

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
            showCartNotification(product.name);
            updateCartCounter();
        }

        function toggleWishlist(product, button) {
            const wishlist = JSON.parse(localStorage.getItem('wishlist'));
            const existingIndex = wishlist.findIndex(item => item.id === product.id);
            
            if (existingIndex > -1) {
                // Remove from wishlist
                wishlist.splice(existingIndex, 1);
                button.classList.remove('active');
                button.querySelector('svg').classList.remove('text-[#CC3333]');
                button.querySelector('svg').classList.add('text-gray-400');
                button.querySelector('svg').setAttribute('fill', 'none');
                showWishlistNotification(product.name, false);
            } else {
                // Add to wishlist
                wishlist.push(product);
                button.classList.add('active');
                button.querySelector('svg').classList.remove('text-gray-400');
                button.querySelector('svg').classList.add('text-[#CC3333]');
                button.querySelector('svg').setAttribute('fill', 'currentColor');
                showWishlistNotification(product.name, true);
            }
            
            localStorage.setItem('wishlist', JSON.stringify(wishlist));
        }

        function updateWishlistButtons() {
            const wishlist = JSON.parse(localStorage.getItem('wishlist'));
            
            document.querySelectorAll('.wishlist-btn').forEach(button => {
                const productId = button.dataset.id;
                const isInWishlist = wishlist.some(item => item.id === productId);
                
                if (isInWishlist) {
                    button.classList.add('active');
                    button.querySelector('svg').classList.remove('text-gray-400');
                    button.querySelector('svg').classList.add('text-[#CC3333]');
                    button.querySelector('svg').setAttribute('fill', 'currentColor');
                } else {
                    button.classList.remove('active');
                    button.querySelector('svg').classList.remove('text-[#CC3333]');
                    button.querySelector('svg').classList.add('text-gray-400');
                    button.querySelector('svg').setAttribute('fill', 'none');
                }
            });
        }

        function showCartNotification(productName) {
            const notification = document.getElementById('cart-notification');
            const message = document.getElementById('notification-message');
            
            message.textContent = `${productName} added to cart`;
            notification.classList.add('show');
            
            setTimeout(() => {
                notification.classList.remove('show');
            }, 3000);
        }

        function showWishlistNotification(productName, added) {
            const notification = document.getElementById('wishlist-notification');
            const message = document.getElementById('wishlist-notification-message');
            
            message.textContent = added ? `${productName} added to wishlist` : `${productName} removed from wishlist`;
            notification.classList.add('show');
            
            setTimeout(() => {
                notification.classList.remove('show');
            }, 3000);
        }

        function updateCartCounter() {
            const cart = JSON.parse(localStorage.getItem('cart'));
            const counter = document.getElementById('cart-counter');
            
            if (counter) {
                const totalItems = cart.reduce((sum, item) => sum + (item.quantity || 1), 0);
                counter.textContent = totalItems;
            }
        }
    </script>

    <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\UOG0423057_FrontEnd\resources\views/productpg.blade.php ENDPATH**/ ?>