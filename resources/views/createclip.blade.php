<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Generate Clip URL</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .slide-in {
      animation: slideIn 1s ease-out;
    }

    @keyframes slideIn {
      from {
        opacity: 0;
        transform: translateX(-50px);
      }

      to {
        opacity: 1;
        transform: translateX(0);
      }
    }
  </style>
</head>

<body class="bg-blue-50 flex items-center justify-center h-screen">
  @auth
    @include('partials.nav')
    <form action="{{ url('/{$clipurl}') }}" method="POST"
    class="bg-white p-8 rounded-xl shadow-md w-full max-w-md slide-in">
    @csrf
    <h2 class="text-2xl font-bold mb-4 text-center text-blue-700">Enter Clip Code</h2>
    <input type="text" name="clipurl" placeholder="Your unique clip code"
      class="w-full mb-4 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" />
    @if (session('errord'))
    <div style="color: red; text-align: center;">
      {{ session('errord') }}
    </div>
    @endif
    <button
      class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">Create</button>

    </form>
    <form action="/logout" method="POST">
    @csrf
    <button type="submit"
      class="mt-4 w-full bg-red-600 text-white py-2 px-4 rounded-lg hover:bg-red-700 transition duration-300">Logout</button>
    </form>
  @else
    @include('partials.nav');
    <form action="{{ url('/{$clipurl}') }}" method="POST"
    class="bg-white p-8 rounded-xl shadow-md w-full max-w-md slide-in">
    @csrf
    <h2 class="text-2xl font-bold mb-4 text-center text-blue-700">Enter Clip Code</h2>
    <input type="text" name="clipurl" placeholder="Your unique clip code"
      class="w-full mb-4 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" />
    <button
      class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">Create</button>
    @if ($errors->has('errord'))
    <div>
      {{ $errors->first('errord') }}
    </div>
    @endif
    </form>
  @endauth
</body>

</html>