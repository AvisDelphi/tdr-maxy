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
                <a href="{{ url('/dashboard') }}"
                   class="flex items-center space-x-2 font-semibold text-red-600">
                    <img src="https://img.icons8.com/?size=100&id=aVHe2jHuORcA&format=png&color=DC2626"
                        alt="Dashboard Icon" class="w-5 h-5">
                    <span>Dashboard</span>
                </a>
                <a href="{{ url('/leaderboard') }}" class="flex items-center space-x-2 font-semibold text-gray-600 hover:text-red-600">
                    <img src="https://img.icons8.com/?size=100&id=6YtrB5VnlPqY&format=png&color=000000"
                        alt="Leaderboard Icon" class="w-5 h-5">
                    <span>Leaderboard</span>
                </a>
                <a href="{{ url('/missions') }}" class="flex items-center space-x-2 font-semibold text-gray-600 hover:text-red-600">
                    <img src="https://img.icons8.com/?size=100&id=3344&format=png&color=000000"
                        alt="Missions Icon" class="w-5 h-5">
                    <span>Missions</span>
                </a>
                <a href="{{ url('/reporting') }}" class="flex items-center space-x-2 font-semibold text-gray-600 hover:text-red-600">
                    <img src="https://img.icons8.com/?size=100&id=92558&format=png&color=000000"
                        alt="Reporting Icon" class="w-5 h-5">
                    <span>Reporting Template</span>
                </a>
                <a href="{{ url('/reportingtemplate') }}" class="flex items-center space-x-2 font-semibold text-gray-600 hover:text-red-600">
                    <img src="https://img.icons8.com/?size=100&id=14099&format=png&color=000000"
                        alt="Settings Icon" class="w-5 h-5">
                    <span>Settings</span>
                </a>
            </nav>

            <!-- Footer Sidebar -->
            <div class="p-4 border-t space-y-3">
                <a href="#" class="flex items-center space-x-2 font-semibold text-gray-600 hover:text-red-600">
                    <img src="https://img.icons8.com/?size=100&id=83244&format=png&color=000000"
                        alt="Help Icon" class="w-5 h-5">
                    <span>Help</span>
                </a>
                <a href="#" class="flex items-center space-x-2 font-semibold text-gray-600 hover:text-red-600">
                    <img src="https://img.icons8.com/?size=100&id=22112&format=png&color=000000"
                        alt="Log Out Icon" class="w-5 h-5">
                    <span>Log Out</span>
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 flex flex-col">

            <!-- Topbar -->
            <header class="flex justify-between items-center bg-white shadow px-6 py-4">
                <input type="text" placeholder="Search..." class="w-1/3 px-4 py-2 border rounded-lg">
                <div class="flex items-center space-x-4">x
                    <span class="font-semibold">Guest</span>
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
                                    <td class="px-4 py-2">Jay Volt</td>
                                    <td class="px-4 py-2">@jayvolt</td>
                                    <td class="px-4 py-2">@voltjay</td>
                                    <td class="px-4 py-2">01 Jan 2025</td>
                                    <td class="px-4 py-2">
                                        <span class="px-2 py-1 text-xs bg-yellow-100 text-yellow-700 rounded">Pending</span>
                                    </td>
                                    <td class="px-4 py-2">
                                        <button onclick="openModal()" class="text-sm px-3 py-1 bg-green-600 text-white rounded hover:bg-green-700">Approve</button>
                                        <button onclick="alert('Decline action')" class="text-sm px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">Decline</button>
                                    </td>
                                </tr>
                                <tr class="border-t">
                                    <td class="px-4 py-2">02</td>
                                    <td class="px-4 py-2">Rex Zhale</td>
                                    <td class="px-4 py-2">@rexzhale</td>
                                    <td class="px-4 py-2">@zhalele</td>
                                    <td class="px-4 py-2">12 Jan 2025</td>
                                    <td class="px-4 py-2">
                                        <span class="px-2 py-1 text-xs bg-green-100 text-green-700 rounded">Active</span>
                                    </td>
                                    <td class="px-4 py-2">—</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </main>
    </div>

    <!-- Modal -->
    <div id="approveModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-lg p-6 w-96">
            <h2 class="text-lg font-bold mb-4">Confirm Approval</h2>
            <p class="mb-6">Are you sure you want to approve this member and set status to <b>Active</b>?</p>
            <div class="flex justify-end space-x-4">
                <button onclick="closeModal()"
                        class="px-4 py-2 border rounded hover:bg-gray-100">No</button>
                <button onclick="confirmApprove()"
                        class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">Confirm</button>
            </div>
        </div>
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

        function openModal() {
            document.getElementById('approveModal').classList.remove('hidden');
        }
        function closeModal() {
            document.getElementById('approveModal').classList.add('hidden');
        }
        function confirmApprove() {
            alert('User approved (dummy action, tolong dilanjut bro makasih).');
            closeModal();
        }
    </script>
</body>
</html>
