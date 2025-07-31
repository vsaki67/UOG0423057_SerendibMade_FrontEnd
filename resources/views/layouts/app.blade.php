<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SerendibMADE')</title>
    <script src="{{ asset('js/shared.js') }}"></script>

    @vite(['resources/css/app.css', 'resources/js/shared.js'])
    
    <!-- Add your fonts if needed -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&family=Raleway&display=swap" rel="stylesheet">
</head>
<body class="min-h-screen flex flex-col">
    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>
    <div id="cart-notification" class="fixed bottom-4 right-4 bg-green-500 text-white px-4 py-2 rounded-md shadow-lg hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
        <span id="notification-message"></span>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Scripts -->
    @yield('scripts')
</body>
</html>