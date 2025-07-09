<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Meta Tags para SEO -->
    <title>@yield('title', 'Meow Café Bistro - Café, Gatitos y Adopción en Puebla')</title>
    <meta name="description" content="@yield('description', 'Disfruta del mejor café en compañía de adorables gatitos rescatados. ¡Encuentra a tu próximo mejor amigo y apoya nuestra misión de adopción! Conoce nuestro menú, eventos y gatitos en adopción.')">
    <meta name="keywords" content="cat cafe, cafeteria de gatos, adoptar gato, cafeteria en Puebla, meow cafe bistro, postres, cafe, brunch">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Meow Café Bistro')">
    <meta property="og:description" content="@yield('description', 'Disfruta del mejor café en compañía de adorables gatitos rescatados y apoya nuestra misión.')">
    <meta property="og:image" content="{{ asset('images/social-share.jpg') }}"> <!-- Debes crear esta imagen de 1200x630px en public/images/ -->

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('title', 'Meow Café Bistro')">
    <meta property="twitter:description" content="@yield('description', 'Disfruta del mejor café en compañía de adorables gatitos rescatados y apoya nuestra misión.')">
    <meta property="twitter:image" content="{{ asset('images/social-share.jpg') }}"> <!-- Usar la misma imagen -->

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Fonts - Pacifico para títulos, Nunito para el cuerpo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&family=Pacifico&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Scripts y Estilos con Vite (asumiendo que usas Tailwind CSS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
{{-- Nota: Para los colores como 'bg-cream-100', deberás definirlos en tu archivo tailwind.config.js para que el tema funcione --}}
<body class="bg-gray-50 text-gray-800 antialiased">
    
    {{-- La barra de navegación se incluirá aquí. La crearemos después. --}}
    @include('partials._navbar')

    <main>
        {{-- El contenido principal de cada página se inyectará en esta sección. --}}
        @yield('content')
    </main>

    {{-- El pie de página se incluirá aquí. Lo crearemos después. --}}
    @include('partials._footer')

</body>
</html>