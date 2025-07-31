@extends('layouts.app')

@section('title', 'SerendibMade - Artisan')

@section('content')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">
    
    <style>
        .artisan-image {
            transition: transform 0.3s ease;
        }
        .craftsmanship-video {
            aspect-ratio: 16 / 9;
        }
    </style>

    <!-- Hero Section -->
    <header class="bg-teal-700 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Meet Our Artisans</h1>
            <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8">
                The talented hands and creative minds behind every SerendibMade product
            </p>
            <a href="#artisans" class="bg-white text-teal-700 px-6 py-3 rounded-full font-medium hover:bg-gray-100 transition duration-300 inline-block">
                Explore Their Stories
            </a>
        </div>
    </header>

    <!-- Artisan Spotlight Intro -->
    <section id="artisans" class="py-16 bg-white">
        <div class="container mx-auto px-4 text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Master Craftspeople of Sri Lanka</h2>
            <p class="text-gray-600 max-w-3xl mx-auto">
                Each SerendibMade product is lovingly created by skilled artisans who have honed their craft over generations. 
                Discover the faces and stories behind our beautiful creations.
            </p>
        </div>
    </section>

    <!-- Artisan Grid Section -->
    <section class="bg-gray-50 py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-12">
                Meet Our Master Artisans
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Artisan 1 -->
                <div class="artisan-card bg-white rounded-xl shadow-md hover:shadow-xl transition duration-300">
                    <img src="{{ asset('Images_used/Artisan_images/img1.png') }}" alt="Sri Lankan woman weaving on a handloom"
                         class="artisan-image w-full h-64 object-cover hover:scale-105">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-1">Nimali Fernando</h3>
                        <p class="text-teal-600 font-medium mb-3">Handloom Weaver</p>
                        <p class="text-gray-600 mb-4">
                            Nimali uses age‑old weaving techniques with cotton and silk to create vibrant Dumbara textiles unique to Sri Lanka.
                        </p>
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <i class="fas fa-map-marker-alt mr-2 text-teal-500"></i>
                            <span>Kurunegala / Kandy Region</span>
                        </div>
                        <a href="#" class="text-teal-600 font-medium hover:text-teal-700 inline-flex items-center">
                            View Nimali’s Work <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Artisan 2 -->
                <div class="artisan-card bg-white rounded-xl shadow-md hover:shadow-xl transition duration-300">
                    <img src="{{ asset('Images_used/Artisan_images/img2.png') }}" alt="Artisan carving traditional Sri Lankan wood mask"
                         class="artisan-image w-full h-64 object-cover hover:scale-105">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-1">Rajiv Perera</h3>
                        <p class="text-teal-600 font-medium mb-3">Wood Carver</p>
                        <p class="text-gray-600 mb-4">
                            From Ambalangoda, Rajiv crafts ceremonial masks used in Kolam, Sanni & Raksha rituals—each bursting with color and symbolism.
                        </p>
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <i class="fas fa-map-marker-alt mr-2 text-teal-500"></i>
                            <span>Ambalangoda, Southern Province</span>
                        </div>
                        <a href="#" class="text-teal-600 font-medium hover:text-teal-700 inline-flex items-center">
                            View Rajiv’s Work <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Artisan 3 -->
                <div class="artisan-card bg-white rounded-xl shadow-md hover:shadow-xl transition duration-300">
                    <img src="{{ asset('Images_used/Artisan_images/img3.png') }}" alt="Artist painting traditional Batik fabric"
                         class="artisan-image w-full h-64 object-cover hover:scale-105">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-1">Lakshmi Bandara</h3>
                        <p class="text-teal-600 font-medium mb-3">Batik Artist</p>
                        <p class="text-gray-600 mb-4">
                            Lakshmi uses wax-resist dyeing in bold patterns, merging Kandyan motifs with modern aesthetics in her batik fabrics.
                        </p>
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <i class="fas fa-map-marker-alt mr-2 text-teal-500"></i>
                            <span>Matale / Central Province</span>
                        </div>
                        <a href="#" class="text-teal-600 font-medium hover:text-teal-700 inline-flex items-center">
                            View Lakshmi’s Work <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="#" class="inline-block bg-teal-600 text-white px-8 py-3 rounded-full font-medium hover:bg-teal-700 transition duration-300">
                    Meet More Artisans
                </a>
            </div>
        </div>
    </section>

    <!-- Craftsmanship Video -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">The Art of Creation</h2>
                <div class="craftsmanship-video bg-gray-300 rounded-lg overflow-hidden shadow-lg">
                    <video controls class="w-full h-auto">
                        <source src="{{ asset('Images_used/Artisan_images/Srilanka.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </section>

    <!-- Artisan Stories -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Stories From the Workshop</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    Read about the traditions, challenges, and triumphs of Sri Lanka's artisan community.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Story 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1471&q=80"
                         alt="Artisans working together" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Preserving Heritage Through Craft</h3>
                        <p class="text-gray-600 mb-4">
                            How our artisans are keeping ancient Sri Lankan techniques alive while adapting to modern markets.
                        </p>
                        <a href="#" class="text-teal-600 font-medium hover:text-teal-700 inline-flex items-center">
                            Read Story <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Story 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&fit=crop&w=1469&q=80"
                         alt="Artisan teaching" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Passing the Torch</h3>
                        <p class="text-gray-600 mb-4">
                            Meet the young apprentices learning traditional crafts from master artisans in our mentorship program.
                        </p>
                        <a href="#" class="text-teal-600 font-medium hover:text-teal-700 inline-flex items-center">
                            Read Story <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Story 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1470&q=80"
                         alt="Sustainable materials" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Sustainable by Tradition</h3>
                        <p class="text-gray-600 mb-4">
                            How our artisans have always worked with eco-friendly materials and processes — long before it was trendy.
                        </p>
                        <a href="#" class="text-teal-600 font-medium hover:text-teal-700 inline-flex items-center">
                            Read Story <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-teal-700 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Support Sri Lankan Artisans</h2>
            <p class="text-xl max-w-3xl mx-auto mb-8">
                Every purchase directly benefits the talented craftspeople who create our products and helps preserve Sri Lanka's rich artisanal heritage.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#" class="bg-white text-teal-700 px-8 py-3 rounded-full font-medium hover:bg-gray-100 transition duration-300">
                    Shop Artisan-Made Products
                </a>
                <a href="#" class="border-2 border-white text-white px-8 py-3 rounded-full font-medium hover:bg-white hover:text-teal-700 transition duration-300">
                    Learn About Our Mission
                </a>
            </div>
        </div>
    </section>

    @include('partials.footer')
@endsection
