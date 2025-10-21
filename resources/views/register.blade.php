<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | HPZ Crew</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 font-sans">

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
                    <li><a href="{{ url('/chatbot') }}" class="hover:text-red-600">Chatbot</a></li>
                </ul>

                <div class="flex space-x-3">
                    <a href="{{ url('/dashboard') }}" class="border px-4 py-2 rounded-md hover:bg-gray-100">Login</a>
                    <a href="{{ url('/register') }}" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700">Join Us</a>
                </div>
            </div>
        </nav>

    <!-- Registration Form -->
    <section class="max-w-2xl mx-auto mt-12 p-8 bg-white shadow rounded-lg">
        <h1 class="text-2xl font-bold mb-8">Registration Form</h1>

        <form action="#" method="POST" class="space-y-6">
            @csrf

            <!-- Full Name -->
            <input type="text" name="name" placeholder="Full Name"
                class="w-full p-3 rounded bg-gray-100 border border-gray-200 focus:ring-2 focus:ring-red-500">

            <!-- Email -->
            <input type="email" name="email" placeholder="Email"
                class="w-full p-3 rounded bg-gray-100 border border-gray-200 focus:ring-2 focus:ring-red-500">

            <!-- Password -->
            <input type="password" name="password" placeholder="Password"
                class="w-full p-3 rounded bg-gray-100 border border-gray-200 focus:ring-2 focus:ring-red-500">

            <!-- Confirm Password -->
            <input type="password" name="password_confirmation" placeholder="Confirm Password"
                class="w-full p-3 rounded bg-gray-100 border border-gray-200 focus:ring-2 focus:ring-red-500">

            <!-- Social Media -->
            <div>
                <label class="font-semibold block mb-2">Social Media</label>
                <input type="text" name="instagram" placeholder="Instagram Username"
                    class="w-full p-3 rounded bg-gray-100 border border-gray-200 mb-4 focus:ring-2 focus:ring-red-500">
                <input type="text" name="tiktok" placeholder="TikTok Username"
                    class="w-full p-3 rounded bg-gray-100 border border-gray-200 focus:ring-2 focus:ring-red-500">
            </div>

            <!-- Experience & Motivation -->
            <div>
                <label class="font-semibold block mb-2">Experience & Motivation</label>
                <textarea name="motivation" placeholder="Why do you want to join HPZ Crew?" rows="3"
                    class="w-full p-3 rounded bg-gray-100 border border-gray-200 mb-4 focus:ring-2 focus:ring-red-500"></textarea>
                <textarea name="posting_freq" placeholder="How often do you post on social media? (Daily / Weekly / Monthly)" rows="2"
                    class="w-full p-3 rounded bg-gray-100 border border-gray-200 focus:ring-2 focus:ring-red-500"></textarea>
            </div>

            <!-- Agreement -->
            <div>
                <label class="font-semibold block mb-2">Agreement</label>
                <div class="space-y-2 text-sm text-gray-700">
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="h-4 w-4 border-gray-300 rounded">
                        <span>I agree to the Terms & Conditions</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="h-4 w-4 border-gray-300 rounded">
                        <span>I agree to allow my content to be featured on TDR official social media</span>
                    </label>
                </div>
            </div>

            <!-- Submit -->
            <button type="submit"
                class="w-full bg-red-600 text-white py-3 rounded-md hover:bg-red-700 transition font-semibold">
                Submit
            </button>
        </form>
    </section>

</body>
</html>
