<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>

    {{-- Panggil asset bundler Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">

    <header class="bg-blue-600 text-white p-4">
        <h1 class="text-xl font-bold">My Laravel App</h1>
        <nav>
            <a href="{{ route('home') }}" class="px-2">Home</a>
            <a href="{{ route('about') }}" class="px-2">About</a>
            <a href="{{ route('contact') }}" class="px-2">Contact</a>
            <a href="/contacts" class="px-2">Contact List</a>
        </nav>
    </header>

    <main class="p-6">
        {{-- Tempat isi konten --}}
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white p-4 text-center">
        <p>&copy; {{ date('Y') }} My Laravel App</p>
    </footer>

</body>
</html>
