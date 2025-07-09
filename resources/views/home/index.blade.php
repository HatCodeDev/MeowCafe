@extends('layouts.app')

{{-- Opcional: Puedes definir un título y descripción específicos para la página de inicio para mejorar el SEO --}}
@section('title', 'Meow Café Bistro - Tu cafetería con gatos en [Tu Ciudad]')
@section('description', 'Bienvenido a Meow Café Bistro. Disfruta de nuestro delicioso menú, conoce a nuestros gatitos residentes y encuentra a tu compañero ideal para adoptar. ¡Te esperamos!')

@section('content')
    
    {{-- Cada @include carga una sección de la página. --}}
    {{-- El orden aquí define cómo se mostrarán en la web. --}}
    @include('home.sections._hero')
    <!-- 1. Sección de Anuncios y Novedades -->
    @include('home.sections._announcements')

    <!-- 2. Sección del Menú Completo de la Cafetería -->
    @include('home.sections._menu')

    <!-- 3. Sección de Reglas de Convivencia -->
    @include('home.sections._rules')

    <!-- 4. Resumen de Gatitos en Adopción (con enlace a la página completa) -->
    @include('home.sections._adoption_summary')

    <!-- 5. Resumen de la Galería de Fotos (con enlace a la página completa) -->
    @include('home.sections._gallery_summary')

@endsection