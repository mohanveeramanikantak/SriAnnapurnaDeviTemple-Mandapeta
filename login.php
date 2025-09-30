<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temple - User Portal</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Inter for modern readability and Baloo 2 for heading flair -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@700&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Custom Tailwind Configuration - Violet/Pink Theme */
        :root {
            --color-primary: #a855f7;   /* Violet/Purple for accents */
            --color-secondary: #ec4899; /* Pink for highlights */
            --color-deep: #4c1d95;      /* Deep Purple for text/footer */
        }
        
        body {
            font-family: 'Inter', sans-serif;
            /* Soft background gradient from the main page */
            background: linear-gradient(135deg, #f3f4ff 0%, #fae8ff 100%);
            color: var(--color-deep);
            min-height: 100vh;
        }
        
        h1, h2 {
            font-family: 'Baloo 2', cursive;
            color: var(--color-deep);
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        /* Gradient Button Style (Pink to Violet) */
        .btn-gradient {
            background: linear-gradient(90deg, #ec4899 0%, #a855f7 100%);
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(168, 85, 247, 0.4);
        }

        .btn-gradient:hover {
            box-shadow: 0 8px 25px rgba(168, 85, 247, 0.8);
            transform: translateY(-2px); /* Slight lift effect */
        }
        
        /* Input Focus Style to match theme */
        input:focus {
            border-color: var(--color-primary) !important;
            box-shadow: 0 0 0 3px rgba(168, 85, 247, 0.3) !important;
        }

        /* Responsive Card Style (Glassy feel) */
        .glass-card {
            background-color: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(15px); 
            border: 1px solid rgba(255, 255, 255, 0.8);
            box-shadow: 0 10px 30px rgba(76, 29, 149, 0.1); /* Subtle deep purple shadow */
        }

    </style>
</head>
<body class="antialiased flex items-center justify-center p-4">

    <!-- Login/Registration Container (Centered and Responsive) -->
    <div class="w-full max-w-sm sm:max-w-md p-6 sm:p-8 rounded-3xl glass-card text-center transition-all duration-500">
        
        <!-- Header -->
        <h1 class="text-3xl sm:text-4xl font-extrabold mb-2 text-violet-800">
            Welcome, Devotee
        </h1>
        <p class="text-gray-600 mb-6 sm:mb-8 font-medium">
            Access the Seva & Event Portal
        </p>

        <!-- Tab Navigation (Login / Register) -->
        <div class="flex border-b border-violet-200 mb-8">
            <button id="tab-login" class="flex-1 py-3 text-lg font-semibold border-b-4 border-pink-500 text-pink-600 transition duration-300 rounded-t-lg hover:text-pink-700">
                Login
            </button>
            <button id="tab-register" class="flex-1 py-3 text-lg font-semibold border-b-4 border-transparent text-violet-600 transition duration-300 rounded-t-lg hover:text-pink-600 hover:border-violet-300">
                Register
            </button>
        </div>

        <!-- Login Form - ACTION SHOULD POINT TO YOUR PHP FILE (e.g., login.php) OR BE BLANK TO SUBMIT TO CURRENT PAGE -->
        <form id="login-form" method="POST" class="space-y-6">
            
            <div class="text-left">
                <label for="login-username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                <!-- ADDED name="username" -->
                <input type="text" id="login-username" name="username" required placeholder="e.g., admin or your_seva_name" 
                        class="w-full px-4 py-3 border border-violet-200 rounded-xl focus:outline-none focus:ring-4 focus:ring-violet-300/50 transition duration-200">
            </div>

            <div class="text-left">
                <label for="login-password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <!-- ADDED name="password" -->
                <input type="password" id="login-password" name="password" required placeholder="••••••••" 
                        class="w-full px-4 py-3 border border-violet-200 rounded-xl focus:outline-none focus:ring-4 focus:ring-violet-300/50 transition duration-200">
            </div>
            
            <div class="h-6"></div> 

            <button type="submit" class="w-full py-3 btn-gradient text-white font-bold rounded-full uppercase tracking-wider shadow-lg">
                Login
            </button>
        </form>

        <!-- Registration Form (Starts Hidden) -->
        <form id="register-form" method="POST" class="space-y-6 hidden">
            
            <div class="text-left">
                <label for="register-name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                <input type="text" id="register-name" name="full_name" required placeholder="Ramesh Sharma" 
                        class="w-full px-4 py-3 border border-violet-200 rounded-xl focus:outline-none focus:ring-4 focus:ring-violet-300/50 transition duration-200">
            </div>
            
            <div class="text-left">
                <label for="register-username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                 <!-- ADDED name="username" -->
                <input type="text" id="register-username" name="username" required placeholder="Choose a unique username" 
                        class="w-full px-4 py-3 border border-violet-200 rounded-xl focus:outline-none focus:ring-4 focus:ring-violet-300/50 transition duration-200">
            </div>

            <div class="text-left">
                <label for="register-password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                 <!-- ADDED name="password" -->
                <input type="password" id="register-password" name="password" required placeholder="••••••••" 
                        class="w-full px-4 py-3 border border-violet-200 rounded-xl focus:outline-none focus:ring-4 focus:ring-violet-300/50 transition duration-200">
            </div>
            
            <div class="text-left">
                <label for="register-confirm-password" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                <input type="password" id="register-confirm-password" name="confirm_password" required placeholder="••••••••" 
                        class="w-full px-4 py-3 border border-violet-200 rounded-xl focus:outline-none focus:ring-4 focus:ring-violet-300/50 transition duration-200">
            </div>

            <button type="submit" class="w-full py-3 btn-gradient text-white font-bold rounded-full uppercase tracking-wider shadow-lg">
                Create Account
            </button>
        </form>
        
        <!-- Back to Home Link -->
        <div class="mt-8 pt-4 border-t border-violet-100">
            <a href="index.php" class="inline-flex items-center text-violet-600 hover:text-pink-600 transition duration-200 font-semibold">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Temple Homepage
            </a>
        </div>
    </div>

    <script>
        const loginForm = document.getElementById('login-form');
        const registerForm = document.getElementById('register-form');
        const tabLogin = document.getElementById('tab-login');
        const tabRegister = document.getElementById('tab-register');

        /**
         * Switches the active form view (Login or Register) and updates the tab styles.
         * @param {string} activeTab - 'login' or 'register'
         */
        function switchForm(activeTab) {
            if (activeTab === 'login') {
                // Show Login, Hide Register
                loginForm.classList.remove('hidden');
                registerForm.classList.add('hidden');
                
                // Update Tab Styles
                tabLogin.classList.add('border-pink-500', 'text-pink-600');
                tabLogin.classList.remove('border-transparent', 'text-violet-600', 'hover:border-violet-300');
                
                tabRegister.classList.remove('border-pink-500', 'text-pink-600');
                tabRegister.classList.add('border-transparent', 'text-violet-600', 'hover:border-violet-300');

            } else if (activeTab === 'register') {
                // Show Register, Hide Login
                loginForm.classList.add('hidden');
                registerForm.classList.remove('hidden');

                // Update Tab Styles
                tabRegister.classList.add('border-pink-500', 'text-pink-600');
                tabRegister.classList.remove('border-transparent', 'text-violet-600', 'hover:border-violet-300');
                
                tabLogin.classList.remove('border-pink-500', 'text-pink-600');
                tabLogin.classList.add('border-transparent', 'text-violet-600', 'hover:border-violet-300');
            }
        }

        // Event Listeners for Tab Switching
        tabLogin.addEventListener('click', () => switchForm('login'));
        tabRegister.addEventListener('click', () => switchForm('register'));

        // *** REMOVED THE JAVASCRIPT SUBMIT LISTENERS THAT WERE BLOCKING THE PHP POST ***
