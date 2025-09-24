<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings | Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Navbar Dashboard -->
    <nav class="bg-white shadow px-6 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">Dashboard</h1>
        <div class="space-x-4">
            <a href="{{ url('/dashboard') }}" class="hover:text-red-600">Home</a>
            <a href="{{ url('/dashboard/setting') }}" class="font-semibold text-red-600">Settings</a>
            <a href="{{ url('/logout') }}" class="hover:text-red-600">Logout</a>
        </div>
    </nav>

    <!-- Container -->
    <div class="container mx-auto px-6 py-12">
        <h2 class="text-2xl font-bold mb-6">Edit Profile Settings</h2>

        <div class="bg-white shadow rounded-lg p-6">
            <form action="#" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label class="block font-medium mb-1">Full Name</label>
                    <input type="text" name="name" value="John Doe"
                           class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-red-500 focus:outline-none">
                </div>

                <div>
                    <label class="block font-medium mb-1">Email</label>
                    <input type="email" name="email" value="johndoe@email.com"
                           class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-red-500 focus:outline-none">
                </div>

                <div>
                    <label class="block font-medium mb-1">Password</label>
                    <input type="password" name="password" placeholder="New password"
                           class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-red-500 focus:outline-none">
                    <p class="text-xs text-gray-500 mt-1">Leave blank if you don’t want to change.</p>
                </div>

                <div>
                    <label class="block font-medium mb-1">Profile Picture</label>
                    <input type="file" name="avatar"
                           class="w-full border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-red-500 focus:outline-none">
                </div>

                <button type="submit"
                        class="w-full bg-red-600 text-white py-3 rounded-md hover:bg-red-700">
                    Save Changes
                </button>
            </form>
        </div>
    </div>

</body>
</html>
