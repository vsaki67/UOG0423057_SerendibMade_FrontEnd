

<?php $__env->startSection('title', 'SerendibMade - About Us'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom CSS -->
    <style>
        /* Animation Classes */
        .animate-on-scroll {
            opacity: 0;
            transition: all 0.6s ease-out;
        }
        
        .fade-in {
            transform: translateY(30px);
        }
        
        .slide-left {
            transform: translateX(-50px);
        }
        
        .slide-right {
            transform: translateX(50px);
        }
        
        .animate {
            opacity: 1;
            transform: translate(0) !important;
        }

        .sri-lanka-bg {
            background: linear-gradient(135deg, #2c5e1a 0%, #5b3c11 100%);
        }
        
        .floating {
            animation: floating 6s ease-in-out infinite;
        }
        
        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .pulse-glow {
            animation: pulseGlow 2s ease-in-out infinite;
        }
        
        @keyframes pulseGlow {
            0%, 100% { box-shadow: 0 0 20px rgba(139, 92, 54, 0.3); }
            50% { box-shadow: 0 0 40px rgba(139, 92, 54, 0.6); }
        }

        .craft-card {
            transition: all 0.3s ease;
            border: 1px solid rgba(214, 193, 172, 0.3);
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease-out;
        }

        .craft-card.animate {
            opacity: 1;
            transform: translateY(0);
        }

        .value-icon {
            background: linear-gradient(135deg, #8b5c38 0%, #5b3c11 100%);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .font-cinzel {
            font-family: 'Cinzel Decorative', serif;
        }

        .divider {
            height: 3px;
            background: linear-gradient(90deg, #8b5c38, #5b3c11, #2c5e1a);
            width: 100px;
            margin: 1rem auto;
            opacity: 0;
            transition: all 0.6s ease-out;
        }

        .divider.animate {
            opacity: 1;
            transform: scaleX(1);
        }
    </style>

    <!-- Hero Section -->
    <div class="sri-lanka-bg text-white py-24">
        <div class="container mx-auto px-6">
            <div class="text-center">
                <h1 class="text-5xl md:text-6xl font-bold mb-6 font-cinzel floating">Serendib Made</h1>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto opacity-90 leading-relaxed">
                    Celebrating the rich heritage and exquisite craftsmanship of Sri Lanka, 
                    where ancient traditions meet modern artistry.
                </p>
                <button class="bg-amber-600 text-white font-semibold px-8 py-3 rounded-full hover:bg-amber-700 transition-all duration-300 transform hover:scale-105">
                    Discover Our Crafts
                </button>
            </div>
        </div>
    </div>

    <!-- About section -->
    <div class="py-20 bg-amber-50">
        <div class="container mx-auto px-6">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-16 animate-on-scroll fade-in">
                    <h2 class="text-4xl font-bold text-gray-800 mb-6 font-cinzel">Our Story</h2>
                    <div class="divider animate-on-scroll"></div>
                    <p class="text-lg text-gray-700 leading-relaxed max-w-3xl mx-auto">
                        Serendib Made is more than just a brand – it's a celebration of Sri Lanka's 
                        incredible artistic legacy. From the ancient kingdoms to modern workshops, 
                        we showcase the finest traditional crafts that have been passed down through generations.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                    <div class="animate-on-scroll slide-left">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Preserving Traditions</h3>
                        <p class="text-gray-700 mb-6 leading-relaxed">
                            Every piece in our collection tells a story of skilled artisans who have 
                            dedicated their lives to perfecting their craft. We work directly with 
                            craftspeople across the island to ensure authentic quality and fair trade practices.
                        </p>
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center">
                                <span class="text-amber-600 text-xl">🎨</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Authentic Craftsmanship</h4>
                                <p class="text-sm text-gray-600">Traditional techniques passed down through generations</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                <span class="text-green-600 text-xl">👐</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Handmade Excellence</h4>
                                <p class="text-sm text-gray-600">Each piece crafted with care and attention to detail</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="animate-on-scroll slide-right">
                        <div class="bg-gradient-to-br from-amber-100 to-green-50 p-8 rounded-2xl pulse-glow h-full">
                            <div class="bg-white p-6 rounded-lg shadow-sm h-full">
                                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Our Mission</h3>
                                <p class="text-gray-700 leading-relaxed">
                                    To bridge the gap between Sri Lankan artisans and the global market, 
                                    ensuring that these beautiful traditional crafts continue to thrive 
                                    and reach appreciative audiences worldwide while preserving cultural heritage.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats Section -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center py-8 border-t border-b border-amber-200">
                    <div class="animate-on-scroll fade-in" style="transition-delay: 0.1s">
                        <div class="text-4xl font-bold text-amber-600 mb-2">200+</div>
                        <div class="text-gray-600">Artisans Supported</div>
                    </div>
                    <div class="animate-on-scroll fade-in" style="transition-delay: 0.2s">
                        <div class="text-4xl font-bold text-green-700 mb-2">50+</div>
                        <div class="text-gray-600">Traditional Crafts</div>
                    </div>
                    <div class="animate-on-scroll fade-in" style="transition-delay: 0.3s">
                        <div class="text-4xl font-bold text-amber-600 mb-2">15</div>
                        <div class="text-gray-600">Regions Covered</div>
                    </div>
                    <div class="animate-on-scroll fade-in" style="transition-delay: 0.4s">
                        <div class="text-4xl font-bold text-green-700 mb-2">100%</div>
                        <div class="text-gray-600">Ethically Sourced</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Craft Regions Section -->
    <div class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 animate-on-scroll fade-in">
                <h2 class="text-4xl font-bold text-gray-800 mb-6 font-cinzel">Crafts Across Sri Lanka</h2>
                <div class="divider animate-on-scroll"></div>
                <p class="text-lg text-gray-700 max-w-3xl mx-auto">
                    Discover the regions famous for their unique traditional crafts and the artisans who keep these traditions alive
                </p>
            </div>
            
            <!-- Craft Cards -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="craft-card" style="transition-delay: 0.1s">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-4">
                        <span class="text-3xl">🎭</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Traditional Masks</h3>
                    <p class="text-gray-700 mb-4">Ambalangoda's carved wooden masks used in traditional Kandyan and devil dances, each with symbolic meaning.</p>
                    <div class="flex items-center">
                        <span class="text-sm text-red-700 font-medium">Ambalangoda Region</span>
                    </div>
                </div>
                
                <div class="craft-card" style="transition-delay: 0.2s">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-4">
                        <span class="text-3xl">🍃</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Ceylon Tea</h3>
                    <p class="text-gray-700 mb-4">World-renowned tea from the hill country, particularly around Kandy and Nuwara Eliya, handpicked by generations.</p>
                    <div class="flex items-center">
                        <span class="text-sm text-green-700 font-medium">Central Highlands</span>
                    </div>
                </div>
                
                <div class="craft-card" style="transition-delay: 0.3s">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                        <span class="text-3xl">💎</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Precious Gems</h3>
                    <p class="text-gray-700 mb-4">Sapphires, rubies, and other precious stones from the gem capital of Ratnapura, carefully mined and cut.</p>
                    <div class="flex items-center">
                        <span class="text-sm text-purple-700 font-medium">Ratnapura</span>
                    </div>
                </div>
                
                <div class="craft-card" style="transition-delay: 0.4s">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-4">
                        <span class="text-3xl">🎨</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Batik Art</h3>
                    <p class="text-gray-700 mb-4">Hand-painted and wax-resist dyed textiles with intricate patterns and vibrant colors, each piece unique.</p>
                    <div class="flex items-center">
                        <span class="text-sm text-yellow-700 font-medium">Maharagama & Beyond</span>
                    </div>
                </div>
                
                <div class="craft-card" style="transition-delay: 0.5s">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mb-4">
                        <span class="text-3xl">🌶️</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Exotic Spices</h3>
                    <p class="text-gray-700 mb-4">Cinnamon, cardamom, cloves, and nutmeg grown in the spice gardens of Matale, harvested using traditional methods.</p>
                    <div class="flex items-center">
                        <span class="text-sm text-orange-700 font-medium">Matale District</span>
                    </div>
                </div>
                
                <div class="craft-card" style="transition-delay: 0.6s">
                    <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mb-4">
                        <span class="text-3xl">🏺</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Heritage Crafts</h3>
                    <p class="text-gray-700 mb-4">From pottery to woodcarving, Sri Lanka's diverse traditional crafts span the entire island, each with regional specialties.</p>
                    <div class="flex items-center">
                        <span class="text-sm text-amber-700 font-medium">Island-wide</span>
                    </div>
                </div>
            </div>

            <div class="text-center mt-16 animate-on-scroll fade-in">
                <button class="border-2 border-amber-600 text-amber-600 font-semibold px-8 py-3 rounded-full hover:bg-amber-600 hover:text-white transition-all duration-300">
                    Explore All Crafts
                </button>
            </div>
        </div>
    </div>

    <!-- Artisan Spotlight 
    <div class="py-20 bg-green-50">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center mb-16 animate-on-scroll fade-in">
                <h2 class="text-4xl font-bold text-gray-800 mb-6 font-cinzel">Artisan Spotlight</h2>
                <div class="divider animate-on-scroll"></div>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Meet the talented craftspeople behind our products, keeping centuries-old traditions alive
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-on-scroll slide-left">
                    <div class="bg-gradient-to-br from-amber-100 to-green-100 p-1 rounded-2xl">
                        <img src="https://images.unsplash.com/photo-1595475207225-428b62bda831?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" 
                             alt="Sri Lankan Artisan" 
                             class="w-full h-auto rounded-xl shadow-lg">
                    </div>
                </div>
                
                <div class="animate-on-scroll slide-right">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Mr. Bandara, Master Woodcarver</h3>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        From the historic city of Kandy, Mr. Bandara represents the fifth generation of woodcarvers in his family. 
                        Specializing in intricate temple carvings and traditional furniture, he has trained over 30 apprentices 
                        in this ancient craft.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <svg class="h-5 w-5 text-amber-600 mt-1 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Over 40 years of woodcarving experience</span>
                        </div>
                        <div class="flex items-start">
                            <svg class="h-5 w-5 text-amber-600 mt-1 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Uses only sustainably sourced local timber</span>
                        </div>
                        <div class="flex items-start">
                            <svg class="h-5 w-5 text-amber-600 mt-1 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Recipient of the Presidential Award for Traditional Arts</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

    <!-- Values section -->
    <div class="py-20 bg-amber-50">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl font-bold text-gray-800 mb-12 animate-on-scroll fade-in font-cinzel">Our Values</h2>
                <div class="divider animate-on-scroll"></div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="animate-on-scroll slide-left">
                        <div class="value-icon w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-white text-2xl">🤝</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Fair Trade</h3>
                        <p class="text-gray-700">Supporting artisan communities with fair wages and sustainable practices that uplift entire communities.</p>
                    </div>
                    
                    <div class="animate-on-scroll fade-in" style="transition-delay: 0.2s">
                        <div class="value-icon w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-white text-2xl">♻️</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Sustainability</h3>
                        <p class="text-gray-700">Eco-friendly practices and materials that respect our environment and preserve it for future generations.</p>
                    </div>
                    
                    <div class="animate-on-scroll slide-right">
                        <div class="value-icon w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-white text-2xl">✨</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Authenticity</h3>
                        <p class="text-gray-700">Genuine traditional crafts with verified heritage and quality, directly from the artisans who create them.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section 
    <div class="sri-lanka-bg text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <div class="max-w-3xl mx-auto animate-on-scroll fade-in">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 font-cinzel">Join Our Craft Revolution</h2>
                <p class="text-xl mb-8 opacity-90 leading-relaxed">
                    By choosing Serendib Made, you're not just acquiring beautiful crafts - you're helping preserve 
                    ancient traditions and support artisan communities across Sri Lanka.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <button class="bg-amber-600 text-white font-semibold px-8 py-4 rounded-full hover:bg-amber-700 transition-all duration-300 transform hover:scale-105">
                        Shop Our Collection
                    </button>
                    <button class="border-2 border-white text-white font-semibold px-8 py-4 rounded-full hover:bg-white hover:text-gray-800 transition-all duration-300">
                        Meet Our Artisans
                    </button>
                </div>
            </div>
        </div>
    </div>-->

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize observer for scroll animations
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            // Observe all animate-on-scroll elements
            document.querySelectorAll('.animate-on-scroll').forEach(el => {
                observer.observe(el);
            });

            // Special handling for craft cards with staggered delays
            const craftObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate');
                        craftObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });

            document.querySelectorAll('.craft-card').forEach(el => {
                craftObserver.observe(el);
            });

            // Special handling for divider
            const dividerObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate');
                        dividerObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.5
            });

            document.querySelectorAll('.divider').forEach(el => {
                dividerObserver.observe(el);
            });
        });
    </script>

    <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\UOG0423057_FrontEnd\resources\views/aboutus.blade.php ENDPATH**/ ?>