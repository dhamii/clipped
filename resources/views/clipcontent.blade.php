<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Clip</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .fade-in {
      animation: fadeIn 1.2s ease-in-out;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
  <form action="{{ url('/li/' . $clip->clip . '/save') }}" method="POST" class="bg-white p-8 rounded-xl shadow-xl w-full max-w-md fade-in">
    @csrf
    <h2 class="text-2xl font-bold mb-4 text-center text-gray-700">Create a Clip</h2>
    <textarea name="clipcontent" rows="6" class="w-full p-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 resize-none mb-4">Goes in here</textarea>
    <button class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg transition duration-300">Submit</button>
  </form>
</body>
</html>
