<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Tienda Online</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    
    <header class="bg-white shadow">
        <div class="container mx-auto px-6 py-4">
            <h1 class="text-2xl font-bold text-gray-800">🛍️ Mi Tienda Online</h1>
        </div>
    </header>

    <main class="container mx-auto px-6 py-8">
        @yield('content')
    </main>

    <footer class="bg-white shadow mt-12 py-4 text-center text-gray-500">
        &copy; 2026 Mi Tienda Online. Todos los derechos reservados.
    </footer>

</body>
</html>