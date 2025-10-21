<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Affiliation | Dashboard</title>
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
                        {{ request()->is('missions') ? 'text-red-600' : 'text-gray-600 hover:text-red-600' }}">
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
        <span class="font-semibold">Rex Zhale <span class="bg-gray-200 text-xs px-2 py-1 rounded">Rookie</span></span>
        <img src="https://img.icons8.com/?size=100&id=86363&format=png&color=000000" class="w-10 h-10 rounded-full">
      </div>
    </header>

    <!-- Affiliation Section -->
    <div class="p-6 overflow-y-auto">
      <div class="bg-white p-6 rounded-lg shadow mb-6">
        <h2 class="text-lg font-bold mb-4">YOUR AFFILIATE CODE & LINK</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          <div>
            <label class="block text-sm mb-1 font-medium">Select a Product to Promote</label>
            <select class="w-full border rounded px-3 py-2">
              <option>Choose product...</option>
              <option>TDR Raincoat</option>
              <option>Softshell Jacket</option>
              <option>TDR Touring Jacket</option>
            </select>
          </div>

          <div class="flex items-end">
            <button class="bg-red-200 text-red-700 px-4 py-2 rounded w-full hover:bg-red-300">Generate Link</button>
          </div>

          <div>
            <label class="block text-sm mb-1 font-medium">Affiliate Code</label>
            <div class="flex">
              <input type="text" class="border rounded-l px-3 py-2 w-full bg-gray-50" value="TDRBA01" readonly>
              <button class="bg-red-600 text-white px-3 rounded-r hover:bg-red-700">Copy</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Stats -->
      <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <div class="bg-white p-4 rounded shadow text-center">
          <h3 class="font-semibold">🏁 Total Clicks</h3>
          <p class="text-2xl font-bold mt-2">10 <span class="text-green-500 text-sm align-top">+10</span></p>
        </div>
        <div class="bg-white p-4 rounded shadow text-center">
          <h3 class="font-semibold">💰 Sales</h3>
          <p class="text-2xl font-bold mt-2">3 <span class="text-green-500 text-sm align-top">+3</span></p>
        </div>
        <div class="bg-white p-4 rounded shadow text-center">
          <h3 class="font-semibold">📈 Commission</h3>
          <p class="text-2xl font-bold mt-2">Rp88.000 <span class="text-green-500 text-sm align-top">+5%</span></p>
        </div>
        <div class="bg-white p-4 rounded shadow text-center">
          <h3 class="font-semibold">⏳ Pending Commission</h3>
          <p class="text-2xl font-bold mt-2">Rp58.000 <span class="text-green-500 text-sm align-top">+5%</span></p>
        </div>
      </div>

      <!-- Conversions -->
      <div class="bg-white p-6 rounded-lg shadow">
        <div class="flex justify-between items-center mb-4">
          <h2 class="font-bold">MY CONVERSIONS</h2>
          <select class="border rounded px-3 py-1 text-sm">
            <option>Monthly</option>
            <option>Weekly</option>
          </select>
        </div>

        <table class="w-full text-sm">
          <thead>
            <tr class="text-left border-b">
              <th class="py-2">No</th>
              <th>Date</th>
              <th>Product</th>
              <th>Qty</th>
              <th>Order Value</th>
              <th>Commission</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody class="text-gray-700">
            <tr class="border-b">
              <td class="py-2">01</td>
              <td>05 Jan 2025</td>
              <td>TDR Raincoat</td>
              <td>1</td>
              <td>Rp.600.000</td>
              <td>Rp 30.000</td>
              <td><span class="text-green-600 bg-green-100 px-2 py-1 rounded text-xs">Approved</span></td>
            </tr>
            <tr class="border-b">
              <td class="py-2">02</td>
              <td>12 Jan 2025</td>
              <td>Softshell Jacket</td>
              <td>2</td>
              <td>Rp.580.000</td>
              <td>Rp 58.000</td>
              <td><span class="text-yellow-600 bg-yellow-100 px-2 py-1 rounded text-xs">Pending</span></td>
            </tr>
            <tr>
              <td class="py-2">03</td>
              <td>17 Jan 2025</td>
              <td>TDR Touring Jacket</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td><span class="text-yellow-600 bg-yellow-100 px-2 py-1 rounded text-xs">Pending</span></td>
            </tr>
          </tbody>
        </table>

        <div class="flex justify-center mt-4">
          <button class="px-3 py-1 border rounded text-gray-600 mx-1">&lt;</button>
          <button class="px-3 py-1 border rounded bg-red-600 text-white mx-1">1</button>
          <button class="px-3 py-1 border rounded text-gray-600 mx-1">&gt;</button>
        </div>
      </div>
    </div>
  </main>
</div>
</body>
</html>
