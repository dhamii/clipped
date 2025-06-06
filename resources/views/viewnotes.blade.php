<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Clip</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .fade-in-up {
      animation: fadeInUp 1s ease-out;
    }
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body class="bg-gradient-to-r from-indigo-100 to-purple-100 flex items-center justify-center min-h-screen">
  <div class="bg-white p-8 rounded-2xl shadow-lg max-w-xl w-full fade-in-up">
    <h1 class="text-3xl font-semibold mb-4 text-center text-indigo-600">Here is your clip</h1>
    <div class="text-gray-800 text-lg whitespace-pre-wrap p-4 bg-gray-100 rounded-lg">{{ $clips }}</div>
  </div>
</body>
</html>
