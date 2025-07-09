<nav class="absolute w-full z-50 top-0 start-0 p-4">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto relative">
        
        <a href="{{ url('/') }}" class="z-10">
            <img src="{{ asset('images/LogoMeow.png') }}" class="h-14 md:h-16 drop-shadow-lg" alt="Logo de Meow Café & Bistro">
        </a>

        {{-- Contenedor de la Píldora de Navegación (Solo para Escritorio) --}}
        <div class="hidden md:flex absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
             <div class="bg-white/20 backdrop-blur-lg rounded-full shadow-lg border border-white/30 p-2">
                <ul class="flex items-center space-x-2" style="font-family: 'Nunito', sans-serif;">
                    <li>
                        <a href="{{ url('/') }}" class="block py-2 px-4 rounded-full transition-colors duration-300 {{ request()->is('/') ? 'bg-[#fca8c2] text-white' : 'text-gray-800 hover:bg-white/50' }}">Inicio</a>
                    </li>
                    <li>
                        <a href="{{ url('/#menu') }}" class="block py-2 px-4 rounded-full text-gray-800 transition-colors duration-300 hover:bg-white/50">Menú</a>
                    </li>
                    <li>
                        <a href="{{ url('/nuestro-equipo') }}" class="block py-2 px-4 rounded-full transition-colors duration-300 {{ request()->is('nuestro-equipo') ? 'bg-[#fca8c2] text-white' : 'text-gray-800 hover:bg-white/50' }}">Nuestro Equipo</a>
                    </li>
                    <li>
                        <a href="{{ url('/galeria') }}" class="block py-2 px-4 rounded-full transition-colors duration-300 {{ request()->is('galeria') ? 'bg-[#fca8c2] text-white' : 'text-gray-800 hover:bg-white/50' }}">Galería</a>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Botón de Adopción (Escritorio) y Hamburguesa (Móvil) --}}
        <div class="flex items-center space-x-3 z-10">
            <a href="{{ url('/domicilio') }}" class="hidden md:block py-3 px-5 text-center font-bold text-white bg-[#fca8c2] rounded-full transition-all duration-300 hover:bg-[#f37a9c] hover:scale-105 shadow-md">
                Pide a domicilio 🛵
            </a>
            <a href="{{ url('/adopcion') }}" class="hidden md:block py-3 px-5 text-center font-bold text-white bg-[#fca8c2] rounded-full transition-all duration-300 hover:bg-[#bb95ae] hover:scale-105 shadow-md">
                ¡Adopta! ❤️
            </a>
            <button data-collapse-toggle="navbar-mobile-menu" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-[#4a2c2a] bg-white/50 rounded-lg md:hidden hover:bg-white/80 focus:outline-none focus:ring-2 focus:ring-white/50" aria-controls="navbar-mobile-menu" aria-expanded="false">
                <span class="sr-only">Abrir menú principal</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- Menú Desplegable para Móvil --}}
    <div class="hidden w-full md:hidden" id="navbar-mobile-menu">
        <div class="mt-4 bg-white/80 backdrop-blur-lg rounded-2xl shadow-lg border border-white/30 p-4">
            <ul class="flex flex-col space-y-2 font-medium" style="font-family: 'Nunito', sans-serif;">
                <li>
                    <a href="{{ url('/') }}" class="block py-3 px-4 text-center rounded-lg {{ request()->is('/') ? 'bg-[#fca8c2] text-white' : 'text-gray-800 hover:bg-white/50' }}">Inicio</a>
                </li>
                <li>
                    <a href="{{ url('/#menu') }}" class="block py-3 px-4 text-center text-gray-800 rounded-lg hover:bg-white/50">Menú</a>
                </li>
                <li>
                    <a href="{{ url('/nuestro-equipo') }}" class="block py-3 px-4 text-center rounded-lg {{ request()->is('nuestro-equipo') ? 'bg-[#fca8c2] text-white' : 'text-gray-800 hover:bg-white/50' }}">Nuestro Equipo</a>
                </li>
                <li>
                    <a href="{{ url('/galeria') }}" class="block py-3 px-4 text-center rounded-lg {{ request()->is('galeria') ? 'bg-[#fca8c2] text-white' : 'text-gray-800 hover:bg-white/50' }}">Galería</a>
                </li>
                <li>
                    <a href="{{ url('/domicilio') }}" class="block py-3 px-4 text-center font-bold text-white bg-[#fca8c2] rounded-lg hover:bg-[#f37a9c]">
                        Pide a domicilio 🛵
                    </a>
                </li>
                <li>
                    <a href="{{ url('/adopcion') }}" class="block mt-2 py-3 px-4 text-center font-bold text-white bg-[#fca8c2] rounded-lg hover:bg-[#bb95ae]">
                        ¡Adopta! ❤️
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{-- Script para el scroll suave (si lo necesitas) --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('a[href$="/#menu"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            if (window.location.pathname === '/') {
                e.preventDefault();
                const targetElement = document.getElementById('menu');
                if (targetElement) {
                    targetElement.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    });
});
</script>
