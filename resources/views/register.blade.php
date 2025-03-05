<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cute Registration Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'cutepink': '#FFD1DC',
                        'cuteblue': '#A0D2EB',
                    },
                    fontFamily: {
                        nunito: ['Nunito', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>
<body class="bg-gradient-to-r from-cuteblue/30 to-cutepink/40 font-nunito flex items-center justify-center min-h-screen p-4">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
            <!-- Header with cute illustration -->
            <div class="bg-gradient-to-r from-cuteblue to-cutepink p-4 text-center">
                <div class="h-32 flex items-center justify-center">
                    <svg class="w-24 h-24" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="100" cy="100" r="80" fill="#FFD1DC" />
                        <circle cx="70" cy="80" r="10" fill="#333" />
                        <circle cx="130" cy="80" r="10" fill="#333" />
                        <path d="M70 120 Q100 150 130 120" stroke="#333" stroke-width="4" fill="none" />
                    </svg>
                </div>
                <h1 class="text-white font-bold text-2xl mt-2">Join Us!</h1>
            </div>

            <!-- Form -->
            <div class="p-8">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-600 text-sm font-medium mb-2">Full Name</label>
                        <div class="relative">
                            <input type="text" id="name" name="name" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-cuteblue focus:ring focus:ring-cuteblue/20 transition-all outline-none" placeholder="Your Name" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-gray-600 text-sm font-medium mb-2">Email Address</label>
                        <div class="relative">
                            <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-cuteblue focus:ring focus:ring-cuteblue/20 transition-all outline-none" placeholder="hello@example.com" required>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="password" class="block text-gray-600 text-sm font-medium mb-2">Password</label>
                        <div class="relative">
                            <input type="password" id="password" name="password" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-cuteblue focus:ring focus:ring-cuteblue/20 transition-all outline-none" placeholder="••••••••" required>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="password_confirmation" class="block text-gray-600 text-sm font-medium mb-2">Confirm Password</label>
                        <div class="relative">
                            <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-cuteblue focus:ring focus:ring-cuteblue/20 transition-all outline-none" placeholder="••••••••" required>
                        </div>
                    </div>

                    <div class="flex items-center mb-6">
                        <input id="terms" type="checkbox" class="h-4 w-4 accent-cutepink" required>
                        <label for="terms" class="ml-2 block text-sm text-gray-500">I agree to the <a href="#" class="text-cuteblue hover:underline">Terms of Service</a></label>
                    </div>
                    
                    <button type="submit" class="w-full bg-gradient-to-r from-cuteblue to-cutepink hover:opacity-90 text-white font-bold py-3 px-4 rounded-xl shadow-md hover:shadow-lg transition-all">
                        Create Account
                    </button>
                </form>
                
                <div class="text-center mt-6">
                    <p class="text-sm text-gray-500">
                        Already have an account? 
                        <a href="{{ route('login') }}" class="text-cuteblue hover:underline font-medium">Sign in</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>