<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | HPZ Crew</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                <a href="{{ url('/dashboard') }}" class="flex items-center text-red-600 font-semibold">📊 Dashboard</a>
                <a href="{{ url('/leaderboard') }}" class="flex items-center text-gray-600 hover:text-red-600">🏆 Leaderboard</a>
                <a href="{{ url('/reporting') }}" class="flex items-center text-gray-600 hover:text-red-600">📝 Reporting Template</a>
                <a href="{{ url('/settings') }}" class="flex items-center text-gray-600 hover:text-red-600">⚙️ Setting</a>
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

            <!-- Content -->
            <div class="p-6 overflow-y-auto">

                <!-- Stats -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <div class="bg-white p-6 rounded-lg shadow">
                        <p class="text-gray-500">Total Members</p>
                        <h2 class="text-3xl font-bold">110</h2>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow">
                        <p class="text-gray-500">Activity</p>
                        <h2 class="text-xl font-bold">70 Posts · 24k Reach</h2>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow">
                        <p class="text-gray-500">Sales</p>
                        <h2 class="text-3xl font-bold">88</h2>
                    </div>
                </div>

                <!-- Chart -->
                <div class="bg-white p-6 rounded-lg shadow mb-6">
                    <h3 class="font-bold mb-4">Engagement Rate</h3>
                    <canvas id="engagementChart" height="100"></canvas>
                </div>

                <!-- Table -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold mb-4">HPZ Crew</h3>
                    <div class="overflow-x-auto">
                        <table class="w-full border">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-4 py-2 text-left">No</th>
                                    <th class="px-4 py-2 text-left">Name</th>
                                    <th class="px-4 py-2 text-left">Instagram</th>
                                    <th class="px-4 py-2 text-left">TikTok</th>
                                    <th class="px-4 py-2 text-left">Join Date</th>
                                    <th class="px-4 py-2 text-left">Status</th>
                                    <th class="px-4 py-2 text-left">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-t">
                                    <td class="px-4 py-2">01</td>
                                    <td class="px-4 py-2">Anton Lee</td>
                                    <td class="px-4 py-2">@antonlee</td>
                                    <td class="px-4 py-2">@antonrides</td>
                                    <td class="px-4 py-2">05 Jan 2025</td>
                                    <td class="px-4 py-2">
                                        <span class="px-2 py-1 text-xs bg-green-100 text-green-700 rounded">Active</span>
                                    </td>
                                    <td class="px-4 py-2">✏️ 🗑️</td>
                                </tr>
                                <tr class="border-t">
                                    <td class="px-4 py-2">02</td>
                                    <td class="px-4 py-2">Riko Torla</td>
                                    <td class="px-4 py-2">@rikotorla</td>
                                    <td class="px-4 py-2">@thorriko</td>
                                    <td class="px-4 py-2">12 Jan 2025</td>
                                    <td class="px-4 py-2">
                                        <span class="px-2 py-1 text-xs bg-green-100 text-green-700 rounded">Active</span>
                                    </td>
                                    <td class="px-4 py-2">✏️ 🗑️</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </main>

    </div>

    <script>
        const ctx = document.getElementById('engagementChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep'],
                datasets: [
                    {
                        label: 'Instagram',
                        data: [5,10,7,12,15,14,18,20,17],
                        borderColor: 'rgba(255, 99, 132, 1)',
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        fill: true
                    },
                    {
                        label: 'TikTok',
                        data: [3,8,5,9,12,10,14,16,12],
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        fill: true
                    }
                ]
            }
        });
    </script>
</body>
</html>
