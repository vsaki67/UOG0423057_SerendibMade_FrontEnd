

<?php $__env->startSection('title', 'SerendibMade - Home'); ?>

<?php $__env->startSection('content'); ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#D97706',
                        secondary: '#059669',
                        accent: '#DC2626'
                    }
                }
            }
        }
    </script>
    <style>
        .cinzel-decorative {
            font-family: 'Cinzel Decorative', serif;
        }
        .raleway {
            font-family: 'Raleway', sans-serif;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        .carousel-container {
            position: relative;
            overflow: hidden;
        }
        .carousel-slide {
            display: none;
            animation: fadeIn 0.5s ease-in-out;
        }
        .carousel-slide.active {
            display: block;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .gradient-overlay {
            background: linear-gradient(45deg, rgba(217, 119, 6, 0.8), rgba(5, 150, 105, 0.8));
        }
    </style>

        <!-- Hero Carousel -->
        <section class="carousel-container h-[85vh] max-h-[800px] relative overflow-hidden">
                <!-- Slide 1 -->
                <div class="carousel-slide active relative h-full transition-opacity duration-1000 ease-in-out">
                    <img src="<?php echo e(asset('Images_used/homepage_images/bg_2.png')); ?>" alt="Sri Lankan Crafts" 
                        class="absolute inset-0 w-full h-full object-cover object-center transform transition-transform duration-1000 ease-in-out scale-100 group-hover:scale-105">
                    
                    <!-- Elegant gradient overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-black/20"></div>
                    
                    <div class="relative z-10 h-full flex items-center justify-center px-4">
                        <div class="text-center max-w-4xl px-4 transform transition-all duration-700 ease-in-out translate-y-0 opacity-100">
                            <h1 class="text-4xl md:text-5xl font-bold mb-6 text-white font-cinzel-decorative tracking-wide">
                                Discover Authentic Sri Lankan Crafts & Culture
                            </h1>
                            <p class="text-xl md:text-2xl mb-8 text-gray-100 font-raleway leading-relaxed max-w-2xl mx-auto">
                                Handcrafted treasures from the pearl of the Indian Ocean
                            </p>
                            <button class="bg-white text-primary px-10 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-all 
                                        duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Shop Now →
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 2 -->
                <div class="carousel-slide relative h-full transition-opacity duration-1000 ease-in-out">
                    <img src="<?php echo e(asset('Images_used/homepage_images/bg_1.png')); ?>" alt="Local Artisans" 
                        class="absolute inset-0 w-full h-full object-cover object-center transform transition-transform duration-1000 ease-in-out scale-100 group-hover:scale-105">
                    
                    <!-- Different gradient direction for variety -->
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/30 via-black/50 to-black/70"></div>
                    
                    <div class="relative z-10 h-full flex items-center justify-center px-4">
                        <div class="text-center max-w-4xl px-4 transform transition-all duration-700 ease-in-out translate-y-0 opacity-100">
                            <h1 class="text-4xl md:text-6xl font-bold mb-6 text-white font-cinzel-decorative tracking-wide">
                                Support Local Artisans
                            </h1>
                            <p class="text-xl md:text-2xl mb-8 text-gray-100 font-raleway leading-relaxed max-w-2xl mx-auto">
                                Every purchase supports traditional craftspeople and preserves heritage
                            </p>
                            <button class="bg-white text-primary px-10 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-all 
                                        duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Learn More →
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 3 -->
                <div class="carousel-slide relative h-full transition-opacity duration-1000 ease-in-out">
                    <img src="<?php echo e(asset('Images_used/homepage_images/bg_3.png')); ?>" alt="Ceylon Tea" 
                        class="absolute inset-0 w-full h-full object-cover object-center transform transition-transform duration-1000 ease-in-out scale-100 group-hover:scale-105">
                    
                    <!-- Radial gradient overlay -->
                    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,rgba(0,0,0,0.3)_0%,rgba(0,0,0,0.7)_100%)]"></div>
                    
                    <div class="relative z-10 h-full flex items-center justify-center px-4">
                        <div class="text-center max-w-4xl px-4 transform transition-all duration-700 ease-in-out translate-y-0 opacity-100">
                            <h1 class="text-4xl md:text-6xl font-bold mb-6 text-white font-cinzel-decorative tracking-wide">
                                From Sri Lanka's Hands To Your Heart
                            </h1>
                            <p class="text-xl md:text-2xl mb-8 text-gray-100 font-raleway leading-relaxed max-w-2xl mx-auto">
                                Experience the finest flavors of Sri Lanka's lush plantations
                            </p>
                            <button class="bg-white text-primary px-10 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-all 
                                        duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Explore →
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Carousel Controls -->
                <button onclick="heroPreviousSlide()" 
                        class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white p-3 rounded-full 
                            transition-all duration-300 hover:scale-110 shadow-lg border border-white/20">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                
                <button onclick="heroNextSlide()" 
                        class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white p-3 rounded-full 
                            transition-all duration-300 hover:scale-110 shadow-lg border border-white/20">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>

                <!-- Elegant Carousel Indicators -->
                <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex space-x-3">
                    <button onclick="heroGoToSlide(0)" 
                            class="hero-carousel-indicator active w-12 h-1.5 bg-white/80 hover:bg-white rounded-full transition-all duration-300"></button>
                    <button onclick="heroGoToSlide(1)" 
                            class="hero-carousel-indicator w-12 h-1.5 bg-white/50 hover:bg-white rounded-full transition-all duration-300"></button>
                    <button onclick="heroGoToSlide(2)" 
                            class="hero-carousel-indicator w-12 h-1.5 bg-white/50 hover:bg-white rounded-full transition-all duration-300"></button>
                </div>
        </section>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Hero Carousel functionality
                let heroCurrentSlide = 0;
                const heroSlides = document.querySelectorAll('.carousel-slide');
                const heroIndicators = document.querySelectorAll('.hero-carousel-indicator');

                function heroShowSlide(index) {
                    heroSlides.forEach(slide => {
                        slide.classList.remove('active');
                        slide.style.opacity = '0';
                    });

                    heroSlides[index].classList.add('active');
                    setTimeout(() => {
                        heroSlides[index].style.opacity = '1';
                    }, 10);

                    heroIndicators.forEach((indicator, i) => {
                        if (i === index) {
                            indicator.classList.add('bg-white/80');
                            indicator.classList.remove('bg-white/50');
                        } else {
                            indicator.classList.add('bg-white/50');
                            indicator.classList.remove('bg-white/80');
                        }
                    });
                }

                function heroNextSlide() {
                    heroCurrentSlide = (heroCurrentSlide + 1) % heroSlides.length;
                    heroShowSlide(heroCurrentSlide);
                }

                function heroPreviousSlide() {
                    heroCurrentSlide = (heroCurrentSlide - 1 + heroSlides.length) % heroSlides.length;
                    heroShowSlide(heroCurrentSlide);
                }

                function heroGoToSlide(index) {
                    heroCurrentSlide = index;
                    heroShowSlide(heroCurrentSlide);
                }

                // Auto-advance
                let heroSlideInterval = setInterval(heroNextSlide, 5000);

                // Pause auto-advance when user interacts
                const heroCarouselControls = document.querySelectorAll('[onclick^="heroPreviousSlide"], [onclick^="heroNextSlide"], [onclick^="heroGoToSlide"]');
                heroCarouselControls.forEach(control => {
                    control.addEventListener('click', () => {
                        clearInterval(heroSlideInterval);
                        heroSlideInterval = setInterval(heroNextSlide, 5000);
                    });
                });

                // Expose globally (so HTML onclick works)
                window.heroNextSlide = heroNextSlide;
                window.heroPreviousSlide = heroPreviousSlide;
                window.heroGoToSlide = heroGoToSlide;

                // Initialize
                heroShowSlide(0);
            });
        </script>

        <!-- Product Categories Section -->
        <!--<section class="py-12 bg-white">-->
        <section class="py-12" style="background-color: #FAF5EF;">
            <div class="container mx-auto px-4">
                <h1 class="text-4xl font-bold text-center mb-4" style="color: #5E3023;">Featured Products</h1>
                <p class="text-lg text-center mb-8 max-w-2xl mx-auto" style="color: #7b8b8e;">Explore our authentic Sri Lankan made collections</p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Traditional Art -->
                    <div class="relative group rounded-xl overflow-hidden h-64 shadow-lg hover:shadow-xl transition-all">
                        <!--<img src="Images\cover_art.png" alt="Traditional Art" class="w-full h-full object-cover">-->
                        <img src="<?php echo e(asset('Images_used/homepage_images/cover_art.png')); ?>" alt="Traditional Art" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex flex-col justify-end p-6">
                        <h2 class="text-white text-3xl font-bold mb-2">TRADITIONAL ART</h2>
                        <button class="self-start bg-white text-gray-900 px-6 py-2 rounded-full text-sm font-semibold hover:bg-gray-100 transition">
                            SHOP NOW →
                        </button>
                        </div>
                    </div>

                    <!-- Spices -->
                    <div class="relative group rounded-xl overflow-hidden h-64 shadow-lg hover:shadow-xl transition-all">
                        <!--<img src="Images/cover_spices.png" alt="Spices" class="w-full h-full object-cover">-->
                        <img src="<?php echo e(asset('Images_used/homepage_images/cover_spices.png')); ?>" alt="Traditional Art" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex flex-col justify-end p-6">
                        <h2 class="text-white text-3xl font-bold mb-2">SPICES</h2>
                        <button class="self-start bg-white text-gray-900 px-6 py-2 rounded-full text-sm font-semibold hover:bg-gray-100 transition">
                            SHOP NOW →
                        </button>
                        </div>
                    </div>

                    <!-- Tea -->
                    <div class="relative group rounded-xl overflow-hidden h-64 shadow-lg hover:shadow-xl transition-all">
                        <!--<img src="Images/cover_tea.png" alt="Tea" class="w-full h-full object-cover">-->
                        <img src="<?php echo e(asset('Images_used/homepage_images/cover_tea.png')); ?>" alt="Traditional Art" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex flex-col justify-end p-6">
                        <h2 class="text-white text-3xl font-bold mb-2">TEA</h2>
                        <button class="self-start bg-white text-gray-900 px-6 py-2 rounded-full text-sm font-semibold hover:bg-gray-100 transition">
                            SHOP NOW →
                        </button>
                        </div>
                    </div>

                    <!-- Batik -->
                    <div class="relative group rounded-xl overflow-hidden h-64 shadow-lg hover:shadow-xl transition-all">
                        <!--<img src="Images/cover_batik.png" alt="Batik" class="w-full h-full object-cover">-->
                        <img src="<?php echo e(asset('Images_used/homepage_images/cover_batik.png')); ?>" alt="Traditional Art" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex flex-col justify-end p-6">
                        <h2 class="text-white text-3xl font-bold mb-2">BATIK</h2>
                        <button class="self-start bg-white text-gray-900 px-6 py-2 rounded-full text-sm font-semibold hover:bg-gray-100 transition">
                            SHOP NOW →
                        </button>
                        </div>
                    </div>

                    <!-- Gems -->
                    <div class="relative group rounded-xl overflow-hidden h-64 shadow-lg hover:shadow-xl transition-all">
                        <!--<img src="Images/cover_gems.png" alt="Team" class="w-full h-full object-cover">-->
                        <img src="<?php echo e(asset('Images_used/homepage_images/cover_gems.png')); ?>" alt="Traditional Art" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex flex-col justify-end p-6">
                        <h2 class="text-white text-3xl font-bold mb-2">GEMS</h2>
                        <button class="self-start bg-white text-gray-900 px-6 py-2 rounded-full text-sm font-semibold hover:bg-gray-100 transition">
                            SHOP NOW →
                        </button>
                        </div>
                    </div>

                    <!-- Masks -->
                    <div class="relative group rounded-xl overflow-hidden h-64 shadow-lg hover:shadow-xl transition-all">
                        <!--<img src="Images/cover_mask.png" alt="Masks" class="w-full h-full object-cover">-->
                        <img src="<?php echo e(asset('Images_used/homepage_images/cover_mask.png')); ?>" alt="Traditional Art" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex flex-col justify-end p-6">
                        <h2 class="text-white text-3xl font-bold mb-2">MASKS</h2>
                        <button class="self-start bg-white text-gray-900 px-6 py-2 rounded-full text-sm font-semibold hover:bg-gray-100 transition">
                            SHOP NOW →
                        </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Best Selling Products -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-3" style="color: #5E3023;">Best Selling Products</h2>
                <p class="text-lg max-w-2xl mx-auto" style="color: #7b8b8e;">Discover our most popular items loved by customers</p>
            </div>

            <!-- Carousel Container -->
            <div class="relative">
                <!-- Slides Wrapper -->
                <div class="overflow-hidden">
                    <div id="productCarousel" class="flex transition-transform duration-300 ease-in-out">
                        <!-- Slide 1 -->
                        <div class="min-w-full">
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                                <?php
                                    $productNames = [
                                        1 => "Premium Quality Cinnamon Sticks",
                                        2 => "Ceylon Black Tea Leaves",
                                        3 => "Batik Painted Cotton Saree"
                                    ];
                                ?>
                                <?php $__currentLoopData = [1, 2, 3]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 group">
                                    <div class="h-64 w-full overflow-hidden">
                                        <img 
                                            src="<?php echo e(asset('Images_used/homepage_images/BS_' . $product . '.png')); ?>" 
                                            alt="<?php echo e($productNames[$product]); ?>" 
                                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                        />
                                    </div>
                                    <div class="p-6">
                                        <h3 class="text-xl font-semibold text-gray-900 mb-2"><?php echo e($productNames[$product]); ?></h3>
                                        <p class="text-gray-600 mb-4">Exceptional quality with outstanding performance and durability.</p>
                                        <div class="flex justify-between items-center">
                                            <span class="text-lg font-bold" style="color: #5E3023;">Rs. <?php echo e(10000 + ($product * 2000)); ?></span>
                                            <button class="text-sm font-medium hover:text-indigo-500 transition-colors" style="color: #895737;">
                                                View Details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="min-w-full">
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                                <?php
                                    $productNames = [
                                        4 => "Ceylon Green Saphire",
                                        5 => "Ceylon Spices Gift Set",
                                        6 => "Laksha Tea Set"
                                    ];
                                ?>
                                <?php $__currentLoopData = [4, 5, 6]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 group">
                                    <div class="h-64 w-full overflow-hidden">
                                        <img 
                                            src="<?php echo e(asset('Images_used/homepage_images/BS_' . $product . '.png')); ?>" 
                                            alt="<?php echo e($productNames[$product]); ?>" 
                                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                        />
                                    </div>
                                    <div class="p-6">
                                        <h3 class="text-xl font-semibold text-gray-900 mb-2"><?php echo e($productNames[$product]); ?></h3>
                                        <p class="text-gray-600 mb-4">Exceptional quality with outstanding performance and durability.</p>
                                        <div class="flex justify-between items-center">
                                            <span class="text-lg font-bold" style="color: #5E3023;">Rs. <?php echo e(10000 + ($product * 2000)); ?></span>
                                            <button class="text-sm font-medium hover:text-indigo-500 transition-colors" style="color: #895737;">
                                                View Details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Controls -->
                <button onclick="productPrevSlide()" 
                        class="absolute left-0 top-1/2 -translate-y-1/2 -ml-4 bg-white p-3 rounded-full shadow-md hover:text-indigo-600 hover:bg-gray-50 transition-colors focus:outline-none focus:ring-2" style="color: #5E3023;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button onclick="productNextSlide()" 
                        class="absolute right-0 top-1/2 -translate-y-1/2 -mr-4 bg-white p-3 rounded-full shadow-md hover:text-indigo-600 hover:bg-gray-50 transition-colors focus:outline-none focus:ring-2" style="color: #5E3023;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>

                <!-- Indicators -->
                <div class="flex justify-center mt-8 space-x-2">
                    <?php $__currentLoopData = [1, 2]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <button onclick="productGoToSlide(<?php echo e($loop->index); ?>)" 
                            class="w-3 h-3 rounded-full hover:bg-indigo-500 transition-colors focus:outline-none"
                            style="background-color: <?php echo e($loop->index === 0 ? '#5E3023' : '#D9C7B8'); ?>">
                        <span class="sr-only">Go to slide <?php echo e($slide); ?></span>
                    </button>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>

        <script>
            // Product Carousel functionality
            let productCurrentSlide = 0;
            const productCarousel = document.getElementById('productCarousel');
            const productSlides = document.querySelectorAll('#productCarousel > div');
            const totalProductSlides = productSlides.length;

            function productUpdateSlidePosition() {
                // Remove transition for instant wrap-around
                if (productCurrentSlide === -1 || productCurrentSlide === totalProductSlides) {
                    productCarousel.style.transition = 'none';
                } else {
                    productCarousel.style.transition = 'transform 300ms ease-in-out';
                }

                // Handle infinite looping
                if (productCurrentSlide === -1) {
                    productCurrentSlide = totalProductSlides - 1;
                } else if (productCurrentSlide === totalProductSlides) {
                    productCurrentSlide = 0;
                }

                const offset = productCurrentSlide * -100;
                productCarousel.style.transform = `translateX(${offset}%)`;

                // Force reflow to apply the transition change
                void productCarousel.offsetWidth;
            }

            function productNextSlide() {
                productCurrentSlide++;
                productUpdateSlidePosition();
            }

            function productPrevSlide() {
                productCurrentSlide--;
                productUpdateSlidePosition();
            }

            function productGoToSlide(index) {
                productCurrentSlide = index;
                productUpdateSlidePosition();
            }
        </script>

        <!-- Explore Sri Lanka -->
        <section class="py-16 bg-white relative overflow-hidden">
            <!-- Doodle Animation Background -->
            <div id="doodle-container" class="absolute inset-0 overflow-hidden pointer-events-none"></div>
            
            <div class="container mx-auto px-4 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-3xl font-bold mb-6 text-gray-800">Explore Sri Lanka</h2>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Discover the rich cultural heritage of Sri Lanka through our authentic products. Each item tells a story of traditional craftsmanship passed down through generations. From the vibrant colors of batik art to the aromatic spices that define our cuisine, experience the essence of the pearl of the Indian Ocean.
                        </p>
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-primary">500+</div>
                                <div class="text-sm text-gray-600">Unique Products</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-primary">200+</div>
                                <div class="text-sm text-gray-600">Local Artisans</div>
                            </div>
                        </div>
                        <button class="bg-primary text-white px-6 py-3 rounded-lg hover:bg-orange-600 transition">Discover More</button>
                    </div>
                    <!--Sri lanka map-->
                    <div class="w-70 h-96 rounded-lg overflow-hidden mx-auto">
                        <img src="<?php echo e(asset('Images_used/homepage_images/sri-lanka.png')); ?>" alt="SriLankan_Map" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            <style>
                .doodle {
                    position: absolute;
                    opacity: 0.3;
                    animation: float linear infinite;
                    z-index: 1;
                }
                @keyframes float {
                    0% {
                        transform: translateY(0) rotate(0deg);
                    }
                    100% {
                        transform: translateY(-100vh) rotate(360deg);
                    }
                }
            </style>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const doodles = [
                        '🪷', // lotus (for batik)
                        '🎭', // traditional mask
                        '🧵', // handloom/textiles
                        '🍵', // pottery/tea
                        '🧺', // cane crafts
                        '🌿', // spices
                        '🖌️', // painting
                        '🧶', // knitting
                        '🪡'  // sewing
                    ];

                    const container = document.getElementById('doodle-container');
                    const sectionHeight = document.querySelector('section').offsetHeight;
                    const sectionWidth = document.querySelector('section').offsetWidth;

                    for (let i = 0; i < 30; i++) {
                        const span = document.createElement('span');
                        span.className = 'doodle';
                        span.style.left = `${Math.random() * sectionWidth}px`;
                        span.style.top = `${Math.random() * sectionHeight + sectionHeight}px`;
                        span.style.fontSize = `${Math.random() * 20 + 20}px`;
                        span.style.animationDuration = `${Math.random() * 20 + 10}s`;
                        span.style.animationDelay = `${Math.random() * 5}s`;
                        span.innerText = doodles[Math.floor(Math.random() * doodles.length)];
                        container.appendChild(span);
                    }
                });
            </script>
        </section>

        <!-- Want to Join as an Artist -->
        <section class="py-16 bg-gradient-to-r from-[#007D7D] to-[#663399]">
            <div class="container mx-auto px-4 text-center text-white">
                <h2 class="text-3xl font-bold mb-6">Want to Join as an Artist?</h2>
                <p class="text-xl mb-8 max-w-2xl mx-auto">
                    Share your talents with the world. Join our community of skilled artisans and showcase your traditional crafts to a global audience.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="bg-[#CC3333] text-white px-8 py-3 rounded-lg font-semibold hover:bg-[#b82e2e] transition">Apply Now</button>
                    <button class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-[#FFCC00] hover:text-[#007D7D] transition">Learn More</button>
                </div>
            </div>
        </section>

        <!-- Artisan Spotlight -->
        <section class="py-16 bg-gray-100">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Artisan Spotlight</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Batik Artist -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden text-center">
                        <div class="h-48 overflow-hidden">
                            <img src="<?php echo e(asset('Images_used/homepage_images/artist1.png')); ?>" alt="Traditional Art" class="w-full h-full object-cover">

                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold text-xl mb-2">Kamal Perera</h3>
                            <p class="text-primary font-medium mb-2">Batik Artist</p>
                            <p class="text-gray-600 text-sm">Master of traditional batik techniques with 25 years of experience creating stunning textile art.</p>
                        </div>
                    </div>
                    
                    <!-- Wood Carver -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden text-center">
                        <div class="h-48 overflow-hidden">
                           <img src="<?php echo e(asset('Images_used/homepage_images/artist3.png')); ?>" alt="Traditional Art" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold text-xl mb-2">Rajan Silva</h3>
                            <p class="text-primary font-medium mb-2">Wood Carver</p>
                            <p class="text-gray-600 text-sm">Specializes in traditional mask carving and wooden sculptures, preserving ancient techniques.</p>
                        </div>
                    </div>
                    
                    <!-- Jewelry Designer -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden text-center">
                        <div class="h-48 overflow-hidden">
                            <img src="<?php echo e(asset('Images_used/homepage_images/artist4.png')); ?>" alt="Traditional Art" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold text-xl mb-2">Nirmala Fernando</h3>
                            <p class="text-primary font-medium mb-2">Jewelry Designer</p>
                            <p class="text-gray-600 text-sm">Creates exquisite jewelry using traditional Sri Lankan gemstones and contemporary designs.</p>
                        </div>
                    </div>

                    <!-- Pottery Maker -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden text-center">
                        <div class="h-48 overflow-hidden">
                            <img src="<?php echo e(asset('Images_used/homepage_images/artist2.png')); ?>" alt="Traditional Art" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold text-xl mb-2">Sunila Rathnayake</h3>
                            <p class="text-primary font-medium mb-2">Pottery Maker</p>
                            <p class="text-gray-600 text-sm">Creates beautiful terracotta pottery using traditional Sri Lankan methods passed down through generations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Customer Reviews Section -->
        <section class="py-20 bg-[#FDF9F5]">
            <div class="max-w-6xl mx-auto px-6">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-serif font-bold text-[#5E3023] mb-4">Experiences That Speak Volumes</h2>
                    <p class="text-lg text-[#5E3023]/90">Discover why thousands trust our craftsmanship</p>
                </div>

                <!-- Reviews Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Review 1 -->
                    <div class="bg-white p-8 rounded-xl border border-[#F2E6D8] shadow-md hover:shadow-lg transition-all">
                        <div class="flex mb-5">
                            <svg class="w-6 h-6 text-[#FFCC00]" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-6 h-6 text-[#FFCC00]" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-6 h-6 text-[#FFCC00]" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-6 h-6 text-[#FFCC00]" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-6 h-6 text-[#FFCC00]" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                        <blockquote class="text-lg italic text-[#5E3023] mb-6 leading-relaxed">
                            "The batik arrived framed in handmade teak – a stunning presentation."
                        </blockquote>
                        <div class="pt-5 border-t border-[#F2E6D8]">
                            <p class="font-medium text-[#5E3023]">Vorandi Sakthma</p>
                            <p class="text-sm text-[#007D7D] mt-1 flex items-center">
                                <svg class="w-4 h-4 mr-1 text-[#339966]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Verified Collector
                            </p>
                        </div>
                    </div>

                    <!-- Review 2 -->
                    <div class="bg-white p-8 rounded-xl border border-[#F2E6D8] shadow-md hover:shadow-lg transition-all">
                        <div class="flex mb-5">
                            <svg class="w-6 h-6 text-[#FFCC00]" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-6 h-6 text-[#FFCC00]" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-6 h-6 text-[#FFCC00]" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-6 h-6 text-[#FFCC00]" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-6 h-6 text-[#FFCC00]" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                        <blockquote class="text-lg italic text-[#5E3023] mb-6 leading-relaxed">
                            "Our office now serves this Ceylon tea exclusively."
                        </blockquote>
                        <div class="pt-5 border-t border-[#F2E6D8]">
                            <p class="font-medium text-[#5E3023]">Hiruni Hansika</p>
                            <p class="text-sm text-[#007D7D] mt-1 flex items-center">
                                <svg class="w-4 h-4 mr-1 text-[#339966]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Corporate Buyer
                            </p>
                        </div>
                    </div>

                    <!-- Review 3 -->
                    <div class="bg-white p-8 rounded-xl border border-[#F2E6D8] shadow-md hover:shadow-lg transition-all">
                        <div class="flex mb-5">
                            <svg class="w-6 h-6 text-[#FFCC00]" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-6 h-6 text-[#FFCC00]" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-6 h-6 text-[#FFCC00]" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-6 h-6 text-[#FFCC00]" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-6 h-6 text-[#FFCC00]" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                        <blockquote class="text-lg italic text-[#5E3023] mb-6 leading-relaxed">
                            "The Kolam mask now takes pride of place in our Bali villa."
                        </blockquote>
                        <div class="pt-5 border-t border-[#F2E6D8]">
                            <p class="font-medium text-[#5E3023]">Yuki Shimada</p>
                            <p class="text-sm text-[#007D7D] mt-1">
                                International Client
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CTA -->
                <!--<div class="mt-16 text-center">
                    <a href="#" class="text-[#007D7D] font-medium hover:text-[#006666] transition-colors inline-flex items-center">
                        Read More Stories
                        <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>-->
            </div>
        </section>

        <!-- FAQ -->
        <section class="py-16 bg-gray-100">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Frequently Asked Questions</h2>
                <div class="max-w-3xl mx-auto">
                    <div class="space-y-4">
                        <div class="bg-white rounded-lg shadow-md">
                            <button onclick="toggleFaq(0)" class="w-full text-left p-6 focus:outline-none">
                                <div class="flex justify-between items-center">
                                    <h3 class="font-semibold text-lg">How do I know if a product is authentic?</h3>
                                    <svg class="w-5 h-5 faq-icon transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                                <div class="faq-content hidden mt-4 text-gray-600">
                                    All our products come with authenticity certificates. We work directly with local artisans and ensure every item meets our quality standards. Each product page includes detailed information about the artisan and crafting process.
                                </div>
                            </button>
                        </div>
                        
                        <div class="bg-white rounded-lg shadow-md">
                            <button onclick="toggleFaq(1)" class="w-full text-left p-6 focus:outline-none">
                                <div class="flex justify-between items-center">
                                    <h3 class="font-semibold text-lg">What is your shipping policy?</h3>
                                    <svg class="w-5 h-5 faq-icon transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                                <div class="faq-content hidden mt-4 text-gray-600">
                                    We offer worldwide shipping with tracking. Standard delivery takes 7-14 business days internationally. Express shipping is available for faster delivery. Free shipping on orders over $75.
                                </div>
                            </button>
                        </div>
                        
                        <div class="bg-white rounded-lg shadow-md">
                            <button onclick="toggleFaq(2)" class="w-full text-left p-6 focus:outline-none">
                                <div class="flex justify-between items-center">
                                    <h3 class="font-semibold text-lg">Do you offer custom orders?</h3>
                                    <svg class="w-5 h-5 faq-icon transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                                <div class="faq-content hidden mt-4 text-gray-600">
                                    Yes! We work with our artisans to create custom pieces. Contact us with your requirements and we'll provide a quote. Custom orders typically take 2-4 weeks to complete.
                                </div>
                            </button>
                        </div>
                        
                        <div class="bg-white rounded-lg shadow-md">
                            <button onclick="toggleFaq(3)" class="w-full text-left p-6 focus:outline-none">
                                <div class="flex justify-between items-center">
                                    <h3 class="font-semibold text-lg">What is your return policy?</h3>
                                    <svg class="w-5 h-5 faq-icon transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                                <div class="faq-content hidden mt-4 text-gray-600">
                                    We offer a 30-day return policy for unused items in original condition. Custom orders and perishables (like tea and spices) are non-returnable. Return shipping costs are covered by the customer unless the item is defective.
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script>
            function toggleFaq(index) {
                const faqItems = document.querySelectorAll('.faq-content');
                const faqIcons = document.querySelectorAll('.faq-icon');
                
                const content = faqItems[index];
                const icon = faqIcons[index];
                
                content.classList.toggle('hidden');
                
                if (content.classList.contains('hidden')) {
                    icon.style.transform = 'rotate(0deg)';
                } else {
                    icon.style.transform = 'rotate(180deg)';
                }
            }
        </script>

        <!-- Footer -->
        <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\UOG0423057_FrontEnd\resources\views/homeindex.blade.php ENDPATH**/ ?>