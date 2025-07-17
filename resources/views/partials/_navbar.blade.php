<nav class="absolute w-full z-50 top-0 start-0 p-4">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto relative">
        
        <a href="{{ url('/') }}" class="z-10">
            <img src="{{ asset('images/LogoMeow.png') }}" class="h-14 md:h-16 drop-shadow-lg" alt="Logo de Meow Café & Bistro">
        </a>

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
                        <a href="{{ url('/#ubicacion') }}" class="block py-2 px-4 rounded-full transition-colors duration-300 {{ request()->is('galeria') ? 'bg-[#fca8c2] text-white' : 'text-gray-800 hover:bg-white/50' }}">Ubicación</a>
                    </li>
                    <li>
                        <a href="{{ url('/sobre-nosotros') }}" class="block py-2 px-4 rounded-full transition-colors duration-300 {{ request()->is('sobre-nosotros') ? 'bg-[#fca8c2] text-white' : 'text-gray-800 hover:bg-white/50' }}">Sobre nosotros</a>
                    </li>
                    {{-- <li>
                        <a href="{{ url('/galeria') }}" class="block py-2 px-4 rounded-full transition-colors duration-300 {{ request()->is('galeria') ? 'bg-[#fca8c2] text-white' : 'text-gray-800 hover:bg-white/50' }}">Galería</a>
                    </li> --}}
                </ul>
            </div>
        </div>

        <div class="flex items-center space-x-3 z-10">
            {{-- <a href="{{ url('/domicilio') }}" class="hidden md:block py-3 px-5 text-center font-bold text-white bg-[#fca8c2] rounded-full transition-all duration-300 hover:bg-[#f37a9c] hover:scale-105 shadow-md">
                Pide a domicilio 🛵
            </a> --}}
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
                    <a href="{{ url('/#ubicacion') }}" class="block py-3 px-4 text-center text-gray-800 rounded-lg hover:bg-white/50">Ubicación</a>
                </li>
                <li>
                    <a href="{{ url('/sobre-nosotros') }}" class="block py-3 px-4 text-center rounded-lg {{ request()->is('sobre-nosotros') ? 'bg-[#fca8c2] text-white' : 'text-gray-800 hover:bg-white/50' }}">Sobre nosotros</a>
                </li>
            </ul>

            <hr class="my-4 border-white/30">

            <div>
                <a href="{{ url('/adopcion') }}" class="block py-3 px-4 text-center font-bold text-white bg-[#fca8c2] rounded-lg hover:bg-[#bb95ae] transition-colors duration-300 shadow-md">
                    ¡Adopta! ❤️
                </a>
            </div>

        </div>
    </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('a[href^="/#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            if (window.location.pathname === '/') {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(2);
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    });

    const mobileMenu = document.getElementById('navbar-mobile-menu');
    const toggleButton = document.querySelector('[data-collapse-toggle="navbar-mobile-menu"]');

    document.addEventListener('click', function(event) {
        if (!mobileMenu.classList.contains('hidden') && !toggleButton.contains(event.target) && !mobileMenu.contains(event.target)) {
            mobileMenu.classList.add('hidden');
            toggleButton.setAttribute('aria-expanded', 'false');
        }
    });
});
</script>
