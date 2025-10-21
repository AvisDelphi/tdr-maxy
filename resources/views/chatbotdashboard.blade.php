<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Chatbot | Dashboard</title>
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
        <span class="font-semibold">Rex Zhale <span class="bg-gray-200 text-xs px-2 py-1 rounded">Rookie</span></span>
        <img src="https://img.icons8.com/?size=100&id=86363&format=png&color=000000" class="w-10 h-10 rounded-full">
      </div>
    </header>

    <!-- Chatbot Section -->
    <div class="flex flex-col items-center justify-center flex-1 bg-red-50 p-10">
      <h3 class="text-sm text-gray-500 mb-2">Hi Rex! I’m HPZ Assistant.</h3>
      <h1 class="text-4xl font-bold mb-8">
        How can <span class="text-red-600">I help?</span>
      </h1>

      <p class="text-gray-600 mb-6 text-center">
        Need some help? Tap one of the questions riders often ask!
      </p>

      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">
        <button class="border rounded-lg p-4 hover:shadow bg-white w-64">
          <p class="font-medium text-sm">What is this week's mission?</p>
          <img src="https://img.icons8.com/?size=100&id=FjCDM3bdkBGu&format=png&color=000000" class="w-5 mt-2">
        </button>
        <button class="border rounded-lg p-4 hover:shadow bg-white w-64">
          <p class="font-medium text-sm">What's my total points?</p>
          <img src="https://img.icons8.com/?size=100&id=22125&format=png&color=000000" class="w-5 mt-2">
        </button>
        <button class="border rounded-lg p-4 hover:shadow bg-white w-64">
          <p class="font-medium text-sm">How do I submit content?</p>
          <img src="https://img.icons8.com/?size=100&id=124094&format=png&color=000000" class="w-5 mt-2">
        </button>
      </div>

      <!-- Input Chat -->
      <div class="w-full max-w-2xl flex items-center border rounded-lg bg-white px-3 py-2">
        <input type="text" placeholder="Ask about your points or missions..." class="flex-1 px-3 py-2 focus:outline-none">
        <button class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
          <img src="https://img.icons8.com/?size=100&id=78&format=png&color=FFFFFF" class="w-5">
        </button>
      </div>
    </div>
  </main>
</div>

</body>
</html>
