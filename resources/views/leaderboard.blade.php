<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard | HPZ Crew</title>
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
          <span class="font-semibold">Guest</span>
          <img src="https://img.icons8.com/?size=100&id=86363&format=png&color=000000" alt="User" class="w-10 h-10 rounded-full">
        </div>
      </header>

      <!-- Content -->
      <div class="p-6 overflow-y-auto">

        <!-- Rank & Points -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
          <div class="bg-white p-6 rounded-lg shadow text-center">
            <p class="text-gray-500 text-lg">🏆 Rank</p>
            <h2 class="text-4xl font-bold text-gray-800">#10</h2>
          </div>
          <div class="bg-white p-6 rounded-lg shadow text-center">
            <p class="text-gray-500 text-lg">💎 Point</p>
            <h2 class="text-4xl font-bold text-red-600">5</h2>
          </div>
        </div>

        <!-- Top Users -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
          <div class="bg-white p-6 rounded-lg shadow text-center">
            <p class="font-semibold">Anton Lee <span class="text-yellow-500">#1</span></p>
            <p>Total Post: <span class="font-bold">70</span></p>
            <p>Reach: <span class="font-bold">9k</span></p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow text-center">
            <p class="font-semibold">Riko Torla <span class="text-yellow-500">#2</span></p>
            <p>Total Post: <span class="font-bold">53</span></p>
            <p>Reach: <span class="font-bold">2k</span></p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow text-center">
            <p class="font-semibold">Daryl Storm <span class="text-yellow-500">#3</span></p>
            <p>Total Post: <span class="font-bold">50</span></p>
            <p>Reach: <span class="font-bold">1k</span></p>
          </div>
        </div>

        <!-- Table -->
        <div class="bg-white p-6 rounded-lg shadow">
          <div class="flex justify-between mb-4">
            <h3 class="font-bold">Rank</h3>
            <select class="border rounded px-2 py-1 text-sm">
              <option>Monthly</option>
              <option>Weekly</option>
              <option>Daily</option>
            </select>
          </div>
          <div class="overflow-x-auto">
            <table class="w-full border">
              <thead class="bg-gray-100">
                <tr>
                  <th class="px-4 py-2 text-left">Rank</th>
                  <th class="px-4 py-2 text-left">Name</th>
                  <th class="px-4 py-2 text-left">Instagram</th>
                  <th class="px-4 py-2 text-left">TikTok</th>
                  <th class="px-4 py-2 text-left">Points</th>
                </tr>
              </thead>
              <tbody>
                <tr class="border-t">
                  <td class="px-4 py-2">01</td>
                  <td class="px-4 py-2">Anton Lee</td>
                  <td class="px-4 py-2">@antintony</td>
                  <td class="px-4 py-2">@antonride</td>
                  <td class="px-4 py-2 font-semibold text-red-600">320</td>
                </tr>
                <tr class="border-t">
                  <td class="px-4 py-2">02</td>
                  <td class="px-4 py-2">Riko Torla</td>
                  <td class="px-4 py-2">@rikotorla</td>
                  <td class="px-4 py-2">@thorriko</td>
                  <td class="px-4 py-2 font-semibold text-red-600">295</td>
                </tr>
                <tr class="border-t">
                  <td class="px-4 py-2">03</td>
                  <td class="px-4 py-2">Daryl Storm</td>
                  <td class="px-4 py-2">@darlstorm</td>
                  <td class="px-4 py-2">@stormez</td>
                  <td class="px-4 py-2 font-semibold text-red-600">287</td>
                </tr>
                <tr class="border-t">
                  <td class="px-4 py-2">04</td>
                  <td class="px-4 py-2">Zane Vold</td>
                  <td class="px-4 py-2">@zanevelo</td>
                  <td class="px-4 py-2">@cityzane</td>
                  <td class="px-4 py-2 font-semibold text-red-600">265</td>
                </tr>
                <tr class="border-t">
                  <td class="px-4 py-2">05</td>
                  <td class="px-4 py-2">Keira Sharla</td>
                  <td class="px-4 py-2">@keirashaa</td>
                  <td class="px-4 py-2">@shadowkei</td>
                  <td class="px-4 py-2 font-semibold text-red-600">250</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </main>
  </div>

</body>
</html>
