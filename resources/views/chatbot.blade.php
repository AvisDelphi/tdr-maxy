<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Chatbot | HPZ Crew</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" type="image/png" href="https://tdr-racing.com/assets/logo-b.svg">
</head>

<body class="bg-gray-50 text-gray-800 flex flex-col min-h-screen">

  <!-- Navbar -->
  <nav class="w-full bg-white shadow fixed top-0 z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
      <a href="{{ url('/') }}">
        <img src="https://tdr-racing.com/assets/logo-b.svg" alt="TDR Logo" class="h-8">
      </a>

      <ul class="hidden md:flex space-x-8 font-medium">
        <li><a href="{{ url('/') }}#about" class="hover:text-red-600">About HPZ Crew</a></li>
        <li><a href="{{ url('/') }}#missions" class="hover:text-red-600">Missions & Rewards</a></li>
        <li><a href="{{ url('/') }}#gallery" class="hover:text-red-600">Winner's Gallery</a></li>
        <li><a href="{{ url('/chatbot') }}" class="text-red-600 font-semibold">Chatbot</a></li>
      </ul>

      <div class="flex space-x-3">
        <a href="{{ url('/login') }}" class="border px-4 py-2 rounded-md hover:bg-gray-100">Login</a>
        <a href="{{ url('/register') }}" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700">Join Us</a>
      </div>
    </div>
  </nav>

  <!-- Main Chat Interface -->
  <main class="flex-grow container mx-auto px-6 pt-28 pb-10 flex flex-col space-y-10">

    <!-- Welcome Section -->
    <section id="welcome" class="text-center">
      <p class="text-lg text-gray-500">Hi Rider! I'm <span class="font-semibold text-gray-800">HPZ Assistant</span>.</p>
      <h1 class="text-4xl font-bold mt-2">How can <span class="text-red-600">I help?</span></h1>
      <p class="mt-4 text-gray-500">Need some help? Tap one of the questions riders often ask!</p>

      <div class="mt-8 flex justify-center flex-wrap gap-4">
        <button class="border rounded-lg px-5 py-3 hover:border-red-600 transition" onclick="sendQuickQuestion('What’s inside the Welcome Kit?')">
          <div class="flex items-center space-x-2">
            <span>📦</span><span>What's inside the Welcome Kit?</span>
          </div>
        </button>
        <button class="border rounded-lg px-5 py-3 hover:border-red-600 transition" onclick="sendQuickQuestion('How do I join the crew?')">
          <div class="flex items-center space-x-2">
            <span>🏍️</span><span>How do I join the crew?</span>
          </div>
        </button>
        <button class="border rounded-lg px-5 py-3 hover:border-red-600 transition" onclick="sendQuickQuestion('How does the points system work?')">
          <div class="flex items-center space-x-2">
            <span>💎</span><span>How does the points system work?</span>
          </div>
        </button>
      </div>
    </section>

    <!-- Chat Section -->
    <section id="chatbox" class="hidden flex flex-col bg-white shadow rounded-lg p-6 max-w-3xl mx-auto w-full h-[60vh]">
      <div id="chat-messages" class="flex-1 overflow-y-auto space-y-4 mb-4 p-2">
        <!-- Chat bubbles appear here -->
      </div>

      <!-- Input -->
      <form id="chat-form" class="flex items-center border rounded-md overflow-hidden">
        <input
          id="chat-input"
          type="text"
          placeholder="Ask about the HPZ program..."
          class="flex-1 px-4 py-3 outline-none"
          autocomplete="off"
          required
        />
        <button type="submit" class="bg-red-600 text-white px-4 py-3 hover:bg-red-700">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7" />
          </svg>
        </button>
      </form>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-[#221f21] text-white py-8 text-center text-sm">
    <p>© 2025 HPZ Crew by TDR High Performance. All Rights Reserved.</p>
  </footer>

  <script>
    const chatbox = document.getElementById("chatbox");
    const chatMessages = document.getElementById("chat-messages");
    const chatForm = document.getElementById("chat-form");
    const chatInput = document.getElementById("chat-input");

    function sendQuickQuestion(text) {
      document.getElementById("welcome").classList.add("hidden");
      chatbox.classList.remove("hidden");
      addMessage("You", text, true);
      simulateBotReply("...");
      // nanti BE ganti dengan API call OpenAI
    }

    chatForm.addEventListener("submit", function (e) {
      e.preventDefault();
      const msg = chatInput.value.trim();
      if (!msg) return;
      addMessage("You", msg, true);
      chatInput.value = "";
      simulateBotReply("...");
    });

    function addMessage(sender, text, isUser = false) {
      const div = document.createElement("div");
      div.className = `flex ${isUser ? "justify-end" : "justify-start"}`;
      div.innerHTML = `
        <div class="max-w-xs px-4 py-2 rounded-lg ${
          isUser
            ? "bg-gray-800 text-white rounded-br-none"
            : "bg-gray-200 text-gray-800 rounded-bl-none"
        }">
          ${text}
        </div>
      `;
      chatMessages.appendChild(div);
      chatMessages.scrollTop = chatMessages.scrollHeight;
    }

    function simulateBotReply(reply) {
      setTimeout(() => {
        addMessage("HPZ Assistant", reply);
      }, 800);
    }
  </script>
</body>
</html>
