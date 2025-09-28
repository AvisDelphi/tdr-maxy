<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporting Template | HPZ Crew</title>
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

        <div class="bg-white p-6 rounded-lg shadow w-full md:w-1/2">
          <div class="flex justify-between items-center mb-4">
            <h3 class="font-bold text-gray-700">Generate Report</h3>
            <select class="border rounded px-3 py-1 text-sm">
              <option>Monthly</option>
              <option>Weekly</option>
              <option>Daily</option>
            </select>
          </div>

          <ul class="space-y-3 mb-6">
            <li class="flex items-center text-gray-700">
              📑 <span class="ml-2">Export as Excel</span>
            </li>
            <li class="flex items-center text-gray-700">
              📄 <span class="ml-2">Export as CSV</span>
            </li>
            <li class="flex items-center text-gray-700">
              📕 <span class="ml-2">Export as PDF</span>
            </li>
          </ul>

          <button class="w-full border border-red-600 text-red-600 hover:bg-red-600 hover:text-white font-semibold px-4 py-2 rounded transition-all">
            Export
          </button>
        </div>

      </div>
    </main>
  </div>

</body>
</html>
