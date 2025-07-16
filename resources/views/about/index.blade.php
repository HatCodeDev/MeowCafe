@extends('layouts.app')

@section('title', 'Sobre Nosotros - La Historia de Meow Café Bistro')
@section('description', 'Descubre nuestra historia. Meow Café Bistro es más que un café; es un hogar para gatos rescatados y un espacio para la comunidad. Conoce nuestra misión y al equipo.')

@section('content')

<section class="bg-sky-100 pt-24 pb-16 md:pt-32 md:pb-24">
    <div class="container mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            
            {{-- Columna del Texto (Ahora va primero en el HTML) --}}
            {{-- En pantallas md y mayores, se le asigna el orden 2 (columna de la derecha) --}}
            <div class="md:order-2 wow animate__animated animate__fadeInRight">
                <h1 class="text-4xl md:text-5xl font-bold text-[#4a2c2a] leading-tight">
                    Más que un café, una 
                    <span class="text-[#fca8c2]" style="font-family: 'Pacifico', cursive;">familia</span>
                </h1>

                <p class="mt-4 text-lg text-gray-600">
                    Bienvenido a Meow Café Bistro, un rincón mágico en el corazón de Puebla donde el aroma del café recién hecho se mezcla con el suave ronroneo de nuestros amigos felinos.
                </p>
                <p class="mt-4 text-lg text-gray-600">
                    Nacimos de un sueño: crear un espacio seguro y lleno de amor para gatitos rescatados mientras esperan encontrar un hogar definitivo. Cada taza que disfrutas, cada postre que saboreas, nos ayuda a continuar nuestra misión de rescate, cuidado y adopción.
                </p>
                
                <div class="mt-8">
                    <a href="#" class="inline-block bg-[#fca8c2] text-white font-bold rounded-full px-8 py-3 text-lg hover:bg-[#e093ac] transition-all duration-300 shadow-md transform hover:-translate-y-1">
                        ¡Adopta un amigo!
                    </a>
                </div>
            </div>

            <div class="md:order-1 wow animate__animated animate__fadeInLeft">
                {{-- <img src="{{ asset('images/about-us-photo2.png') }}" alt="Meow Café Bistro" class="rounded-2xl shadow-lg w-full h-auto object-cover transform hover:scale-105 transition-transform duration-500"> --}}
                <img src="{{ asset('images/about-us-photo2.png') }}" alt="Meow Café Bistro" class="w-full h-auto object-cover">
            </div>

        </div>
    </div>
</section>

{{-- <div class="bg-sky-100">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 220"><path fill="#ffffff" fill-opacity="1" d="M0,96L80,112C160,128,320,160,480,160C640,160,800,128,960,117.3C1120,107,1280,117,1360,122.7L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
</div> --}}


<section class="bg-white pt-12 pb-24 md:pt-16 md:pb-32">
    <div class="container mx-auto px-6 lg:px-8">
        
        {{-- Encabezado de la sección --}}
        <div class="text-center">
            <h2 class="font-bold text-5xl sm:text-6xl text-[#4a2c2a] drop-shadow-sm" style="font-family: 'Pacifico', cursive;">
                <span class="text-[#fca8c2]">Nuestro</span> Equipo
            </h2>
            <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                Conoce a las mentes maestras (y patitas expertas) que trabajan día a día para hacer de tu visita una experiencia inolvidable.
            </p>
        </div>

        {{-- Grid para las tarjetas del equipo --}}
        <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
            
            {{-- Tarjeta 1: Ichiro - Gerente --}}
            <div class="group text-center">
                <div class="relative inline-block">
                    <img class="h-40 w-40 rounded-full object-cover mx-auto transform group-hover:scale-110 transition-transform duration-300" src="{{ asset('images/team/ichiro.jpg') }}" alt="Gato Ichiro, Gerente">
                    <div class="absolute top-0 left-0 w-full h-full rounded-full border-4 border-[#fca8c2] ring-4 ring-white transition-all duration-300 group-hover:rotate-6"></div>
                </div>
                <h3 class="mt-6 text-2xl font-bold text-[#4a2c2a]">Ichiro</h3>
                <p class="text-lg text-[#bb95ae]" style="font-family: 'Pacifico', cursive;">Gerente</p>
                <p class="mt-2 text-sm text-gray-500">Encargado de la supervisión de siestas, control de calidad de cojines y de recibir a los clientes con un maullido de bienvenida profesional.</p>
            </div>

            {{-- Tarjeta 2: Mara - Mesera --}}
            <div class="group text-center">
                <div class="relative inline-block">
                    <img class="h-40 w-40 rounded-full object-cover mx-auto transform group-hover:scale-110 transition-transform duration-300" src="{{ asset('images/team/mara.jpg') }}" alt="Gata Mara, Mesera">
                    <div class="absolute top-0 left-0 w-full h-full rounded-full border-4 border-yellow-300 ring-4 ring-white transition-all duration-300 group-hover:-rotate-6"></div>
                </div>
                <h3 class="mt-6 text-2xl font-bold text-[#4a2c2a]">Mara</h3>
                <p class="text-lg text-[#bb95ae]" style="font-family: 'Pacifico', cursive;">Mesera</p>
                <p class="mt-2 text-sm text-gray-500">Experta en esquivar caricias mientras transporta pelotas de estambre. Siempre se asegura de que ninguna mesa se quede sin su dosis de ternura.</p>
            </div>

            {{-- Tarjeta 3: Coco - Chef --}}
            <div class="group text-center">
                <div class="relative inline-block">
                    <img class="h-40 w-40 rounded-full object-cover mx-auto transform group-hover:scale-110 transition-transform duration-300" src="{{ asset('images/team/coco.jpg') }}" alt="Gato Coco, Chef">
                    <div class="absolute top-0 left-0 w-full h-full rounded-full border-4 border-blue-300 ring-4 ring-white transition-all duration-300 group-hover:rotate-6"></div>
                </div>
                <h3 class="mt-6 text-2xl font-bold text-[#4a2c2a]">Coco</h3>
                <p class="text-lg text-[#bb95ae]" style="font-family: 'Pacifico', cursive;">Chef</p>
                <p class="mt-2 text-sm text-gray-500">Inspector jefe de todos los pedidos de salmón y atún. Su paladar refinado garantiza que solo los ingredientes más frescos lleguen a tu plato.</p>
            </div>

            {{-- Tarjeta 4: Gigi - Barista --}}
            <div class="group text-center">
                 <div class="relative inline-block">
                    <img class="h-40 w-40 rounded-full object-cover mx-auto transform group-hover:scale-110 transition-transform duration-300" src="{{ asset('images/team/gigi.jpg') }}" alt="Gata Gigi, Barista">
                    <div class="absolute top-0 left-0 w-full h-full rounded-full border-4 border-purple-300 ring-4 ring-white transition-all duration-300 group-hover:-rotate-6"></div>
                </div>
                <h3 class="mt-6 text-2xl font-bold text-[#4a2c2a]">Gigi</h3>
                <p class="text-lg text-[#bb95ae]" style="font-family: 'Pacifico', cursive;">Barista</p>
                <p class="mt-2 text-sm text-gray-500">Especialista en "amasar" la espuma de la leche para lograr la textura perfecta. A veces prueba un poco para asegurarse de que todo esté en orden.</p>
            </div>
            
        </div>
    </div>
</section>

@endsection