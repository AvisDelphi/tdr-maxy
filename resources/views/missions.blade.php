<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Missions | Dashboard</title>
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
                <a href="{{ url('/dashboard') }}"
                class="flex items-center space-x-2 font-semibold
                        {{ request()->is('dashboard') ? 'text-red-600' : 'text-gray-600 hover:text-red-600' }}">
                    <img src="https://img.icons8.com/?size=100&id=aVHe2jHuORcA&format=png&color={{ request()->is('dashboard') ? 'DC2626' : '000000' }}"
                        alt="Dashboard Icon" class="w-5 h-5">
                    <span>Dashboard</span>
                </a>
                <a href="{{ url('/affiliation') }}"
                class="flex items-center space-x-2 font-semibold
                        {{ request()->is('affiliation') ? 'text-red-600' : 'text-gray-600 hover:text-red-600' }}">
                    <img src="https://img.icons8.com/?size=100&id=7867&format=png&color={{ request()->is('affiliation') ? 'DC2626' : '000000' }}"
                        alt="Affiliation Icon" class="w-5 h-5">
                    <span>Affiliation</span>
                </a>
                <a href="{{ url('/leaderboard') }}"
                class="flex items-center space-x-2 font-semibold
                        {{ request()->is('leaderboard') ? 'text-red-600' : 'text-gray-600 hover:text-red-600' }}">
                    <img src="https://img.icons8.com/?size=100&id=6YtrB5VnlPqY&format=png&color={{ request()->is('leaderboard') ? 'DC2626' : '000000' }}"
                        alt="Leaderboard Icon" class="w-5 h-5">
                    <span>Leaderboard</span>
                </a>
                <a href="{{ url('/missions') }}"
                class="flex items-center space-x-2 font-semibold
                        {{ request()->is('missions') ? 'text-red-600' : 'text-gray-600 hover:text-red-600' }}">
                    <img src="https://img.icons8.com/?size=100&id=3344&format=png&color={{ request()->is('missions') ? 'DC2626' : '000000' }}"
                        alt="Missions Icon" class="w-5 h-5">
                    <span>Missions</span>
                </a>
                <a href="{{ url('/chatbotdashboard') }}"
                class="flex items-center space-x-2 font-semibold
                        {{ request()->is('chatbotdashboard') ? 'text-red-600' : 'text-gray-600 hover:text-red-600' }}">
                    <img src="https://img.icons8.com/?size=100&id=100414&format=png&color={{ request()->is('chatbotdashboard') ? 'DC2626' : '000000' }}"
                        alt="Chatbot Dashboard Icon" class="w-5 h-5">
                    <span>Chatbot</span>
                </a>
                <!-- Reporting (Admin Only)-->
                <a href="{{ url('/reporting') }}"
                class="flex items-center space-x-2 font-semibold
                        {{ request()->is('reporting') ? 'text-red-600' : 'text-gray-600 hover:text-red-600' }}">
                    <img src="https://img.icons8.com/?size=100&id=92558&format=png&color={{ request()->is('reporting') ? 'DC2626' : '000000' }}"
                        alt="Reporting Icon" class="w-5 h-5">
                    <span>Reporting Template</span>
                </a>
                <a href="{{ url('/settings') }}"
                class="flex items-center space-x-2 font-semibold
                        {{ request()->is('settings') ? 'text-red-600' : 'text-gray-600 hover:text-red-600' }}">
                    <img src="https://img.icons8.com/?size=100&id=14099&format=png&color={{ request()->is('settings') ? 'DC2626' : '000000' }}"
                        alt="Settings Icon" class="w-5 h-5">
                    <span>Settings</span>
                </a>
            </nav>
        <!-- Footer Sidebar -->
        <div class="p-4 border-t space-y-3">
            <a href="{{ url('/help') }}"
               class="flex items-center space-x-2 font-semibold
                    {{ request()->is('help') ? 'text-red-600' : 'text-gray-600 hover:text-red-600' }}">
                <img src="https://img.icons8.com/?size=100&id=83244&format=png&color={{ request()->is('help') ? 'DC2626' : '000000' }}"
                     alt="Help Icon" class="w-5 h-5">
                <span>Help</span>
            </a>
            <a href="{{ url('/logout') }}"
               class="flex items-center space-x-2 font-semibold
                    {{ request()->is('logout') ? 'text-red-600' : 'text-gray-600 hover:text-red-600' }}">
                <img src="https://img.icons8.com/?size=100&id=22112&format=png&color={{ request()->is('logout') ? 'DC2626' : '000000' }}"
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
            <div class="flex items-center space-x-4">
                <span class="font-semibold">{{ Auth::user()->name ?? 'Guest' }}</span>
                <img src="https://img.icons8.com/?size=100&id=86363&format=png&color=000000" alt="User" class="w-10 h-10 rounded-full">
            </div>
        </header>

        <!-- Missions Content -->
        <div class="p-6 overflow-y-auto">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-bold">Missions</h2>
                <div class="flex space-x-4">
                    <!-- Add Mission Button -->
                    <button class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">+ New Mission</button>

                    <!-- Filter Dropdown -->
                    <select class="border rounded px-3 py-2">
                        <option>Newest</option>
                        <option>Oldest</option>
                    </select>
                </div>
            </div>

            <!-- Missions List -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Card Mission -->
                <div class="bg-white shadow rounded-lg overflow-hidden">
                    <img src="https://radarbanyumas.disway.id//upload/7c9a8a70275e023c11b421c082b215e4.jpg" alt="Mission" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold">Post a Reel with #RidewithPrideTDR</h3>
                        <div class="flex justify-between items-center mt-3">
                            <span class="text-xs bg-red-100 text-red-600 px-2 py-1 rounded">31/09/2025</span>
                            <span class="text-xs text-gray-600">🔥 10 pts</span>
                        </div>
                        <button onclick="openModal()" class="mt-4 w-full bg-red-600 text-white py-2 rounded hover:bg-red-700">See Details</button>
                    </div>
                </div>

                <div class="bg-white shadow rounded-lg overflow-hidden">
                    <img src="https://imgx.gridoto.com/crop/0x0:0x0/700x465/photo/2021/08/17/zx-25r-abs-red2jpg-20210817084043.jpg" alt="Mission" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold">Reach 1,000 views on TikTok</h3>
                        <div class="flex justify-between items-center mt-3">
                            <span class="text-xs bg-red-100 text-red-600 px-2 py-1 rounded">04/10/2025</span>
                            <span class="text-xs text-gray-600">🔥 20 pts</span>
                        </div>
                        <button onclick="openModal()" class="mt-4 w-full bg-red-600 text-white py-2 rounded hover:bg-red-700">See Details</button>
                    </div>
                </div>

            </div>
        </div>
    </main>
</div>

<!-- Modal Detail -->
<div id="missionModal" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center">
    <div class="bg-white w-11/12 md:w-2/3 lg:w-1/2 rounded-lg p-6 relative">
        <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-600 hover:text-red-600">✖</button>
        <h3 class="text-xl font-bold mb-4">Mission Detail</h3>
        <ul class="space-y-2 text-sm">
            <li><strong>Title:</strong> Post a Reel with #RidewithPrideTDR</li>
            <li><strong>Platform:</strong> Instagram</li>
            <li><strong>Description:</strong> Create an Instagram Reel showing a before–after of your motorcycle using TDR parts.</li>
            <li><strong>Hashtags:</strong> #PasangTDR #WeMoveasOne #RidetoThrive #RidewithPrideTDR</li>
            <li><strong>Tags:</strong> @tdr_racing</li>
            <li><strong>Points Reward:</strong> 10</li>
            <li><strong>Deadline:</strong> 31 Sep 2025</li>
        </ul>

        <div class="mt-4">
            <label class="block mb-1 font-medium">Submission</label>
            <input type="url" placeholder="Insert Link" class="w-full border rounded p-2 mb-2">
            <label class="flex items-center space-x-2 text-sm">
                <input type="checkbox" class="h-4 w-4">
                <span>I confirm this content follows the mission guidelines</span>
            </label>
            <button class="mt-4 bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Submit</button>
        </div>
    </div>
</div>

<script>
    function openModal() {
        document.getElementById('missionModal').classList.remove('hidden');
        document.getElementById('missionModal').classList.add('flex');
    }
    function closeModal() {
        document.getElementById('missionModal').classList.add('hidden');
    }
</script>

</body>
</html>
