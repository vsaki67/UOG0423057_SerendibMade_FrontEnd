<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SerendibMade - Register</title>
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
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Raleway&display=swap');

        .cinzel-decorative { font-family: 'Cinzel Decorative', serif; }
        .raleway { font-family: 'Raleway', sans-serif; }

        .input-focus:focus {
            border-color: #C8A165 !important;
            box-shadow: 0 0 0 3px rgba(200, 161, 101, 0.1) !important;
        }
        .input-hover:hover {
            border-color: #C8A165 !important;
        }

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

        @keyframes floatUp {
            0% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
            100% { transform: translateY(-100px) rotate(360deg); opacity: 0; }
        }

        .floating-shape {
            animation: floatUp linear infinite;
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center p-4 bg-[#004D40] overflow-hidden relative">

    <!-- Animated Background Container -->
    <div id="animatedBg" class="fixed inset-0 pointer-events-none overflow-hidden z-0"></div>

    <!-- Main Registration Container -->
    <div class="bg-white bg-opacity-95 backdrop-blur-lg rounded-3xl shadow-2xl px-5 py-12 w-full max-w-lg relative z-10 transform transition-all duration-500 hover:scale-105 fade-in">
        
        <!-- Branding -->
        <div class="flex flex-col items-center space-y-1 mb-5">
            <a href="/" class="flex items-center space-x-2">
                <div class="text-xl font-bold">
                    <span class="cinzel-decorative" style="color: #007D7D;">SERENDIB</span>
                    <span class="raleway" style="color: #7b8b8e;">MADE</span>
                </div>
            </a>
            <p class="text-gray-600 text-xs text-center">Create your account below</p>
        </div>

        <!-- Session Status -->
        <?php if(session('status')): ?>
            <div class="mb-4 text-sm text-green-600">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>

        <!-- Registration Form -->
        <?php if($errors->any()): ?>
            <div class="mb-4 text-sm text-red-600">
                <ul class="list-disc pl-5 space-y-1">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo e(route('register')); ?>" class="space-y-4">
            <?php echo csrf_field(); ?>

            <!-- Name -->
            <div>
                <label for="name" class="text-gray-700 text-xs font-medium">Name</label>
                <input id="name" class="w-full px-3 py-2 text-sm border-2 border-gray-200 rounded-lg bg-gray-50 focus:outline-none input-focus input-hover"
                    type="text" name="name" value="<?php echo e(old('name')); ?>" required autofocus autocomplete="name" />
                <?php if($errors->has('name')): ?>
                    <p class="mt-1 text-sm text-red-600"><?php echo e($errors->first('name')); ?></p>
                <?php endif; ?>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="text-gray-700 text-xs font-medium">Email</label>
                <input id="email" class="w-full px-3 py-2 text-sm border-2 border-gray-200 rounded-lg bg-gray-50 focus:outline-none input-focus input-hover"
                    type="email" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="username" />
                <?php if($errors->has('email')): ?>
                    <p class="mt-1 text-sm text-red-600"><?php echo e($errors->first('email')); ?></p>
                <?php endif; ?>
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="text-gray-700 text-xs font-medium">Password</label>
                <input id="password" class="w-full px-3 py-2 text-sm border-2 border-gray-200 rounded-lg bg-gray-50 focus:outline-none input-focus input-hover"
                    type="password" name="password" required autocomplete="new-password" />
                <?php if($errors->has('password')): ?>
                    <p class="mt-1 text-sm text-red-600"><?php echo e($errors->first('password')); ?></p>
                <?php endif; ?>
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="text-gray-700 text-xs font-medium">Confirm Password</label>
                <input id="password_confirmation" class="w-full px-3 py-2 text-sm border-2 border-gray-200 rounded-lg bg-gray-50 focus:outline-none input-focus input-hover"
                    type="password" name="password_confirmation" required autocomplete="new-password" />
                <?php if($errors->has('password_confirmation')): ?>
                    <p class="mt-1 text-sm text-red-600"><?php echo e($errors->first('password_confirmation')); ?></p>
                <?php endif; ?>
            </div>

            <!-- Role -->
            <div>
                <label for="role" class="text-gray-700 text-xs font-medium">Register As</label>
                <select id="role" name="role" required
                    class="w-full px-3 py-2 text-sm border-2 border-gray-200 rounded-lg bg-gray-50 focus:outline-none input-focus input-hover">
                    <option value="">Select a role</option>
                    <option value="customer" <?php echo e(old('role') == 'customer' ? 'selected' : ''); ?>>Customer</option>
                    <option value="artisan" <?php echo e(old('role') == 'artisan' ? 'selected' : ''); ?>>Artisan</option>
                </select>
                <?php if($errors->has('role')): ?>
                    <p class="mt-1 text-sm text-red-600"><?php echo e($errors->first('role')); ?></p>
                <?php endif; ?>
            </div>

            <!-- Submit -->
            <div>
                <button type="submit"
                    class="w-full py-2 text-sm text-white font-semibold rounded-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl btn-gradient">
                    <?php echo e(__('Register')); ?>

                </button>
            </div>

            <!-- Already Registered -->
            <div class="text-center mt-3">
                <p class="text-gray-600 text-sm">
                    <?php echo e(__('Already have an account?')); ?>

                    <a href="<?php echo e(route('login')); ?>" class="font-semibold transition-all duration-300 hover:underline transform hover:scale-105 ml-1" style="color: #C8A165;">
                        <?php echo e(__('Sign in here')); ?>

                    </a>
                </p>
            </div>
        </form>

    </div>

    <!-- Background Decorative Bubbles -->
    <div class="fixed inset-0 pointer-events-none z-0">
        <div class="absolute top-10 left-10 w-20 h-20 rounded-full opacity-5 animate-pulse" style="background: radial-gradient(circle, #C8A165, transparent);"></div>
        <div class="absolute top-32 right-20 w-16 h-16 rounded-full opacity-5 animate-ping" style="background: radial-gradient(circle, #C8A165, transparent); animation-delay: 1s;"></div>
        <div class="absolute bottom-20 left-1/4 w-24 h-24 rounded-full opacity-5 animate-bounce" style="background: radial-gradient(circle, #C8A165, transparent); animation-delay: 2s;"></div>
        <div class="absolute bottom-32 right-1/3 w-12 h-12 rounded-full opacity-5 animate-pulse" style="background: radial-gradient(circle, #C8A165, transparent); animation-delay: 3s;"></div>
        <div class="absolute top-1/2 left-5 w-8 h-8 rounded-full opacity-10 animate-bounce" style="background: #C8A165; animation-duration: 6s; animation-delay: 1s;"></div>
        <div class="absolute top-1/3 right-10 w-6 h-6 rounded-full opacity-10 animate-ping" style="background: #C8A165; animation-duration: 8s; animation-delay: 2s;"></div>
    </div>

    <!-- Floating Shape Script -->
    <script>
        const animatedBg = document.getElementById('animatedBg');

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
            setTimeout(() => shape.remove(), (duration + delay) * 1000);
        }

        for (let i = 0; i < 5; i++) setTimeout(createFloatingShape, i * 1000);
        setInterval(createFloatingShape, 2000);
    </script>

</body>
</html>
<?php /**PATH F:\UOG0423057_FrontEnd\resources\views/registerpg.blade.php ENDPATH**/ ?>