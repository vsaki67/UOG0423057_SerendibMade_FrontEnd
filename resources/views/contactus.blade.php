@extends('layouts.app')

@section('title', 'SerendibMade - Contact Us')

@section('content')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- Contact page section start -->
        <section 
            class="w-full h-[750px] md:h-[850px] bg-cover bg-center bg-no-repeat flex items-center justify-center" 
            style="background-image: url('{{ asset('Images_used/Contactus_images/img1.png') }}');">
            
            <div class="backdrop-blur-sm bg-white/70 rounded-2xl p-10 w-full max-w-6xl shadow-lg relative">
                
                <!-- ✅ Success/Error Popup -->
                <div id="popup" class="hidden absolute top-4 left-1/2 transform -translate-x-1/2 bg-green-600 text-white px-6 py-3 rounded-lg shadow-lg text-center z-50 transition-all duration-300"></div>

                <!-- Contact Info Boxes -->
                <div class="flex flex-col md:flex-row justify-between gap-6 mb-10">
                    <div class="bg-white p-6 rounded-xl shadow-md flex-1 text-center transition transform hover:scale-105 duration-300">
                        <i class="bx bx-location-plus text-green-700 text-4xl mb-3"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-1">Our Head Office</h3>
                        <p class="text-gray-600">Colombo 07, Sri Lanka</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md flex-1 text-center transition transform hover:scale-105 duration-300">
                        <i class="bx bx-envelope text-green-700 text-4xl mb-3"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-1">Email Us</h3>
                        <p class="text-gray-600">serendibmade@gmail.com</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md flex-1 text-center transition transform hover:scale-105 duration-300">
                        <i class="bx bx-phone text-green-700 text-4xl mb-3"></i>
                        <h3 class="text-xl font-bold text-gray-800 mb-1">Call Us</h3>
                        <p class="text-gray-600">+94 075 034 4245</p>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white p-8 rounded-xl shadow-md max-w-4xl mx-auto">
                    <form id="contactForm">
                        <div class="flex flex-col md:flex-row gap-4 mb-4">
                            <input type="email" name="email" placeholder="Your Email" class="flex-1 p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-600" required>
                            <input type="tel" name="phone" placeholder="Your Contact Number" class="flex-1 p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-600" required>
                        </div>
                        <input type="text" name="subject" placeholder="Subject" class="w-full p-3 border border-gray-300 rounded mb-4 focus:outline-none focus:ring-2 focus:ring-green-600" required>
                        <textarea name="message" rows="5" placeholder="Message" class="w-full p-3 border border-gray-300 rounded mb-4 focus:outline-none focus:ring-2 focus:ring-green-600" required></textarea>
                        <div class="text-center">
                            <button type="submit" class="bg-green-700 text-white px-6 py-3 rounded-lg hover:bg-green-800 transition">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- ✅ JS Script -->
            <script>
                const form = document.getElementById('contactForm');
                const popup = document.getElementById('popup');

                form.addEventListener('submit', function (e) {
                    e.preventDefault();

                    const inputs = form.querySelectorAll('input, textarea');
                    let valid = true;

                    inputs.forEach(input => {
                        if (!input.value.trim()) {
                            valid = false;
                        }
                    });

                    if (!valid) {
                        showPopup("⚠️ Please fill in all required fields", "bg-red-600");
                        return;
                    }

                    // Simulate message sending
                    showPopup("✅ Message sent successfully! You’ll get a reply soon.", "bg-green-600");

                    form.reset();
                });

                function showPopup(message, bgClass) {
                    popup.className = `absolute top-4 left-1/2 transform -translate-x-1/2 text-white px-6 py-3 rounded-lg shadow-lg text-center z-50 ${bgClass}`;
                    popup.textContent = message;
                    popup.classList.remove('hidden');

                    setTimeout(() => {
                        popup.classList.add('hidden');
                    }, 3500);
                }
            </script>

        </section>

    <style>
        @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
        }
        .animate-fadeInUp {
        animation: fadeInUp 0.8s ease forwards;
        animation-delay: 0.3s;
        }
    </style>

    <!-- Google Map Section -->
    <div class="w-full bg-green-50 pt-3 py-10 px-15">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center min-h-[600px]">
        
        <!-- 🕒 Opening Times Card -->
        <div class="bg-white shadow-xl rounded-2xl p-10 text-center transition hover:shadow-2xl duration-300 hover:scale-105 hover:rotate-1 opacity-0 translate-y-10 animate-fadeInUp">
        <h2 class="text-4xl font-bold text-green-800 mb-6">Opening Hours</h2>
        <div class="text-xl text-gray-700 space-y-6">
            <div>
            <p class="font-semibold text-gray-800">Monday – Friday</p>
            <p>9:00 AM – 7:00 PM</p>
            </div>
            <div>
            <p class="font-semibold text-gray-800">Saturday & Sunday</p>
            <p>8:00 AM – 8:00 PM</p>
            </div>
        </div>
        </div>

        <!-- 🗺️ Google Map Embed -->
        <div class="overflow-hidden rounded-2xl shadow-xl min-h-[400px] transition-transform duration-500 hover:scale-105 hover:animate-pulse opacity-0 translate-y-10 animate-fadeInUp">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2986.237217866108!2d79.86485650216356!3d6.902399153328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2597c71921dab%3A0x8fe1cd648229bc6e!2sArcade%20Independence%20Square!5e0!3m2!1sen!2slk!4v1753533640214!5m2!1sen!2slk" 
            width="100%" 
            height="100%" 
            class="w-full h-[400px]" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        </div>
        
    </div>
    </div>


    @include('partials.footer')

@endsection