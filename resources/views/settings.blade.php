<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings | Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="https://tdr-racing.com/assets/logo-b.svg">
</head>
<body class="bg-gray-100 font-sans">

<div class="flex h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-lg flex flex-col">
        <div class="p-6 border-b">
            <h1 class="text-2xl font-bold text-red-600">TDR</h1>
            <p class="text-sm text-gray-500">High Performance</p>
        </div>
        <nav class="flex-1 p-4 space-y-3">
            <a href="{{ url('/dashboard') }}" class="flex items-center text-gray-600 hover:text-red-600">📊 Dashboard</a>
            <a href="{{ url('/leaderboard') }}" class="flex items-center text-gray-600 hover:text-red-600">🏆 Leaderboard</a>
            <a href="{{ url('/reporting') }}" class="flex items-center text-gray-600 hover:text-red-600">📝 Reporting Template</a>
            <a href="{{ url('/settings') }}" class="flex items-center text-red-600 font-semibold">⚙️ Setting</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 flex flex-col">

        <!-- Topbar -->
        <header class="flex justify-between items-center bg-white shadow px-6 py-4">
            <input type="text" placeholder="Search..." class="w-1/3 px-4 py-2 border rounded-lg">
            <div class="flex items-center space-x-4">
                <span class="font-semibold">{{ Auth::user()->name ?? 'Guest' }}</span>
                <img src="https://img.icons8.com/?size=100&id=86363&format=png&color=000000" alt="User" class="w-10 h-10 rounded-full">
            </div>
        </header>

        <!-- Settings Content -->
        <div class="p-6 overflow-y-auto">
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
    </main>
</div>

</body>
</html>
