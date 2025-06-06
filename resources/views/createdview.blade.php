<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Clip Created</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @keyframes fadeSlide {
      0% { opacity: 0; transform: translateY(40px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    @keyframes pulseGlow {
      0%, 100% { text-shadow: 0 0 10px #9333ea, 0 0 20px #6366f1; }
      50% { text-shadow: 0 0 25px #a855f7, 0 0 40px #4f46e5; }
    }

    .fade-in { animation: fadeSlide 1s ease-out forwards; }
    .glow { animation: pulseGlow 2s infinite ease-in-out; }
    .bounce-on-hover:hover { transform: scale(1.05); }
  </style>
</head>
<body class="bg-gradient-to-br from-purple-100 via-indigo-100 to-pink-100 min-h-screen flex items-center justify-center px-4">

  <div class="bg-white rounded-3xl shadow-2xl p-10 max-w-xl w-full text-center fade-in">
    <h1 class="text-4xl font-extrabold text-purple-600 mb-4 glow">✨ Clip Created!</h1>
    <p class="text-gray-700 text-lg mb-8">This project was beautifully crafted by <span class="font-semibold text-indigo-500">Dami</span>.</p>

    <button onclick="animateMessage()" class="bg-purple-600 text-white px-6 py-2 rounded-full shadow-md hover:bg-purple-700 transition duration-300 bounce-on-hover">
      Celebrate 🎉
    </button>

    <div id="message" class="mt-6 text-lg text-pink-600 font-semibold opacity-0 transition-opacity duration-700"></div>

    <!-- 🏠 Homepage Link -->
    <a href="/" class="mt-8 inline-block text-white bg-indigo-500 px-5 py-2 rounded-full font-medium shadow-md hover:bg-indigo-600 transition duration-300 bounce-on-hover">
      Go to Homepage 🏠
    </a>
  </div>

  <script>
    function animateMessage() {
      const msg = document.getElementById('message');
      msg.textContent = "You're awesome! 🎊";
      msg.classList.remove('opacity-0');
      msg.classList.add('opacity-100');
    }
  </script>
</body>
</html>