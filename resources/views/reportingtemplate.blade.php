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
        <a href="{{ route('dashboard') }}" class="flex items-center text-gray-600 hover:text-red-600">📊 Dashboard</a>
        <a href="{{ route('leaderboard') }}" class="flex items-center text-gray-600 hover:text-red-600">🏆 Leaderboard</a>
        <a href="{{ route('reporting') }}" class="flex items-center text-red-600 font-semibold">📝 Reporting Template</a>
        <a href="{{ url('/settings') }}" class="flex items-center text-gray-600 hover:text-red-600">⚙️ Setting</a>
      </nav>
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
