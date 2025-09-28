<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | HPZ Crew</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="https://tdr-racing.com/assets/logo-b.svg">
</head>
<body class="bg-[#fefbfb] text-gray-800">

            <!-- Navbar -->
        <nav class="w-full bg-white shadow fixed top-0 z-50">
            <div class="container mx-auto px-6 py-4 flex justify-between items-center">
                <a href="{{ url('/') }}">
                    <img src="https://tdr-racing.com/assets/logo-b.svg" alt="TDR Logo" class="h-8">
                </a>

                <ul class="hidden md:flex space-x-8 font-medium">
                    <li><a href="#about" class="hover:text-red-600">About HPZ Crew</a></li>
                    <li><a href="#missions" class="hover:text-red-600">Missions & Rewards</a></li>
                    <li><a href="#gallery" class="hover:text-red-600">Winner's Gallery</a></li>
                </ul>

                <div class="flex space-x-3">
                    <a href="{{ url('/login') }}" class="border px-4 py-2 rounded-md hover:bg-gray-100">Login</a>
                    <a href="{{ url('/register') }}" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700">Join Us</a>
                </div>
            </div>
        </nav>

    <!-- Login Form -->
    <section class="min-h-screen flex items-center justify-center bg-[#fefbfb]">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md mt-20">
            <h2 class="text-2xl font-bold text-center mb-6">Login</h2>

            <form action="#" method="POST" class="space-y-5">
                @csrf
                <div>
                    <input type="email" name="email" placeholder="Email"
                        class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-red-500 focus:outline-none">
                </div>
                <div>
                    <input type="password" name="password" placeholder="Password"
                        class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-red-500 focus:outline-none">
                </div>
                <div class="flex items-center space-x-2">
                    <input type="checkbox" id="remember" class="h-4 w-4 text-red-600 border-gray-300 rounded">
                    <label for="remember" class="text-sm">Remember me</label>
                </div>
                <button type="submit"
                    class="w-full bg-red-600 text-white py-3 rounded-md hover:bg-red-700 shadow">
                    Login
                </button>
            </form>

            <div class="flex justify-between text-sm mt-4">
                <a href="{{ url('/register') }}" class="text-gray-600 hover:underline">Don’t have an account?</a>
                <a href="#" class="text-gray-600 hover:underline">Forgot Password</a>
            </div>
        </div>
    </section>

</body>
</html>
