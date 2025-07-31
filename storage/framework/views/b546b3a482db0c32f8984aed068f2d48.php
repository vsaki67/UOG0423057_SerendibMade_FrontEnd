<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>SerendibMade - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'serendib-teal': '#004D40',
                        'serendib-gold': '#B88A42',
                        'serendib-gray': '#B0B0B0'
                    }
                }
            }
        };
    </script>
    <style>
        .cinzel-decorative { font-family: 'Cinzel Decorative', serif; }
        .raleway { font-family: 'Raleway', sans-serif; }

        @keyframes floatUp {
            0% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
            10%, 90% { opacity: 0.1; }
            100% { transform: translateY(-100px) rotate(360deg); opacity: 0; }
        }
        .floating-shape { animation: floatUp linear infinite; }

        .input-focus:focus {
            border-color: #C8A165 !important;
            box-shadow: 0 0 0 3px rgba(200, 161, 101, 0.1) !important;
        }
        .input-hover:hover { border-color: #C8A165 !important; }

        .btn-gradient {
            background: linear-gradient(135deg, #C8A165 0%, #004D40 100%);
        }
        .btn-gradient:hover {
            box-shadow: 0 10px 25px rgba(200, 161, 101, 0.3);
        }

        .fade-in {
            animation: fadeIn 0.6s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-5 relative overflow-hidden" style="background-color: #004D40;">
    
    <!-- 🔄 Custom Error Message Box -->
    <div id="customErrorMsg" class="hidden fixed top-5 left-1/2 transform -translate-x-1/2 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded shadow z-50 max-w-md text-center">
        <span class="block sm:inline" id="customErrorText"></span>
    </div>

    <!-- Animated Background Container -->
    <div id="animatedBg" class="fixed inset-0 pointer-events-none overflow-hidden"></div>

    <!-- Login Container -->
    <div class="bg-white bg-opacity-95 backdrop-blur-lg rounded-3xl shadow-2xl p-10 w-full max-w-md relative z-10 transform transition-all duration-500 hover:scale-105 fade-in login-container">
        
        <div class="flex flex-col items-center space-y-2 mb-8">
            <a href="/" class="flex items-center space-x-2">
                <div class="text-2xl font-bold">
                    <span class="cinzel-decorative" style="color: #007D7D;">SERENDIB</span>
                    <span class="raleway" style="color: #7b8b8e;">MADE</span>
                </div>
            </a>
            <p class="text-gray-600 text-sm text-center">Welcome back! Please sign in to your account</p>
        </div>

        <!-- Login Form -->
        <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>
            <div class="relative group">
                <label class="block text-gray-700 font-semibold mb-2 text-sm">Email</label>
                <input type="email" name="email" required
                    class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl text-base transition-all duration-300 bg-gray-50 focus:outline-none focus:bg-white focus:shadow-lg input-focus input-hover" placeholder="Enter your email" />
            </div>

            <div class="relative group mt-6">
                <label class="block text-gray-700 font-semibold mb-2 text-sm">Password</label>
                <input type="password" name="password" required
                    class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl text-base transition-all duration-300 bg-gray-50 focus:outline-none focus:bg-white focus:shadow-lg input-focus input-hover" placeholder="Enter your password" />
            </div>

            <button type="submit"
                class="w-full mt-8 py-4 text-white font-semibold rounded-xl text-base transition-all duration-300 transform hover:-translate-y-1 hover:shadow-2xl btn-gradient">
                Sign In
            </button>
        </form>


        <!--<div class="text-center mt-6">
            <button onclick="handleForgotPassword()" class="text-sm transition-all duration-300 hover:underline transform hover:scale-105" style="color: #C8A165;">
                Forgot your password?
            </button>
        </div>-->

        <div class="relative my-8">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-200"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class="px-4 bg-white text-gray-500">or</span>
            </div>
        </div>

        <div class="text-center">
            <p class="text-gray-600 text-sm">
                Don't have an account?
                <button onclick="window.location.href='/registerpg'" class="font-semibold transition-all duration-300 hover:underline transform hover:scale-105 ml-1" style="color: #C8A165; background: none; border: none; padding: 0; cursor: pointer;">
                    Sign up here
                </button>
            </p>
        </div>
    </div>

    <!-- Floating Background Elements -->
    <div class="fixed inset-0 pointer-events-none">
        <div class="absolute top-10 left-10 w-20 h-20 rounded-full opacity-5 animate-pulse" style="background: radial-gradient(circle, #C8A165, transparent);"></div>
        <div class="absolute top-32 right-20 w-16 h-16 rounded-full opacity-5 animate-ping" style="background: radial-gradient(circle, #C8A165, transparent); animation-delay: 1s;"></div>
        <div class="absolute bottom-20 left-1/4 w-24 h-24 rounded-full opacity-5 animate-bounce" style="background: radial-gradient(circle, #C8A165, transparent); animation-delay: 2s;"></div>
        <div class="absolute bottom-32 right-1/3 w-12 h-12 rounded-full opacity-5 animate-pulse" style="background: radial-gradient(circle, #C8A165, transparent); animation-delay: 3s;"></div>
        <div class="absolute top-1/2 left-5 w-8 h-8 rounded-full opacity-10 animate-bounce" style="background: #C8A165; animation-duration: 6s; animation-delay: 1s;"></div>
        <div class="absolute top-1/3 right-10 w-6 h-6 rounded-full opacity-10 animate-ping" style="background: #C8A165; animation-duration: 8s; animation-delay: 2s;"></div>
    </div>

    <script>
        const animatedBg = document.getElementById('animatedBg');
        const shapes = [];

        function createFloatingShape() {
            const shape = document.createElement('div');
            shape.className = 'absolute rounded-full floating-shape';
            const size = Math.random() * 60 + 20;
            const left = Math.random() * 100;
            const duration = Math.random() * 10 + 15;
            const delay = Math.random() * 5;
            shape.style.width = size + 'px';
            shape.style.height = size + 'px';
            shape.style.left = left + '%';
            shape.style.background = 'linear-gradient(45deg, #C8A165, rgba(200, 161, 101, 0.6))';
            shape.style.opacity = '0.1';
            shape.style.animationDuration = duration + 's';
            shape.style.animationDelay = delay + 's';
            shape.style.bottom = '-100px';
            animatedBg.appendChild(shape);
            setTimeout(() => {
                if (shape.parentNode) shape.parentNode.removeChild(shape);
            }, (duration + delay) * 1000);
        }

        for (let i = 0; i < 5; i++) {
            setTimeout(createFloatingShape, i * 1000);
        }

        setInterval(createFloatingShape, 2000);

        const loginBtn = document.getElementById('loginBtn');
        const usernameInput = document.getElementById('username');
        const passwordInput = document.getElementById('password');

        // 🔄 Show Custom Error Message
        function showErrorMessage(message) {
            const box = document.getElementById('customErrorMsg');
            const text = document.getElementById('customErrorText');
            text.textContent = message;
            box.classList.remove('hidden');
            setTimeout(() => box.classList.add('hidden'), 3000);
        }

        function handleLogin() {
            const username = usernameInput.value.trim();
            const password = passwordInput.value.trim();

            if (username && password) {
                loginBtn.innerHTML = `
                    <div class="flex items-center justify-center">
                        <div class="animate-spin rounded-full h-5 w-5 border-b-2 border-white mr-2"></div>
                        Signing In...
                    </div>
                `;
                loginBtn.disabled = true;

                setTimeout(() => {
                    alert(`Welcome back, ${username}! Login successful.`);
                    loginBtn.innerHTML = 'Sign In';
                    loginBtn.disabled = false;
                    usernameInput.value = '';
                    passwordInput.value = '';
                }, 1500);
            } else {
                showErrorMessage('Please enter both username and password.');
            }
        }

        function handleForgotPassword() {
            alert('Password reset functionality would be implemented here.');
        }

        loginBtn.addEventListener('click', handleLogin);

        [usernameInput, passwordInput].forEach(input => {
            input.addEventListener('keypress', (e) => {
                if (e.key === 'Enter') handleLogin();
            });
        });

        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('focus', function () {
                this.parentElement.style.transform = 'scale(1.02)';
            });
            input.addEventListener('blur', function () {
                this.parentElement.style.transform = 'scale(1)';
            });
        });

        document.addEventListener('mousemove', (e) => {
            const cursor = { x: e.clientX, y: e.clientY };
            const container = document.querySelector('.login-container');
            if (container) {
                const rect = container.getBoundingClientRect();
                const centerX = rect.left + rect.width / 2;
                const centerY = rect.top + rect.height / 2;
                const deltaX = (cursor.x - centerX) * 0.01;
                const deltaY = (cursor.y - centerY) * 0.01;
                container.style.transform = `translate(${deltaX}px, ${deltaY}px) scale(1.05)`;
            }
        });
    </script>
</body>
</html>
<?php /**PATH F:\UOG0423057_FrontEnd\resources\views/loginpg.blade.php ENDPATH**/ ?>