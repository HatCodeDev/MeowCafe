
<section class="relative bg-white pt-12">
    <div class="absolute top-0 left-0 w-full overflow-hidden leading-[0] -mt-px">
        <svg class="relative block w-full h-[80px] md:h-[120px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="fill-white"></path>
        </svg>
    </div>

    <div class="max-w-screen-xl mx-auto px-4 py-8 sm:py-16 lg:py-24">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-[#4a2c2a]" style="font-family: 'Nunito', sans-serif;">
                Entérate de lo 
                <span class="text-[#fca8c2]" style="font-family: 'Pacifico', cursive;">último</span>
            </h2>
            <p class="text-lg text-gray-500 mt-2">Novedades, eventos y promociones especiales para ti.</p>
        </div>

        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <div class="relative h-56 overflow-hidden rounded-2xl shadow-xl md:h-[400px] lg:h-[450px]">
                
                <div class="duration-700 ease-in-out" data-carousel-item>
                    <picture>
                        <source media="(min-width: 768px)" srcset="{{ asset('images/escritorio1.png') }}">
                        <img src="{{ asset('images/movil1.png') }}"  alt="Promoción especial de Meow Café & Bistro">
                    </picture>
                </div>

                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <picture>
                        <source media="(min-width: 768px)" srcset="{{ asset('images/escritorio2.png') }}">
                        <img src="{{ asset('images/movil2.png') }}" alt="Nuevo gatito en adopción">
                    </picture>
                </div>

                
                
            </div>

            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full bg-white/50" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-white/50" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-white/50" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>

            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/40 backdrop-blur-sm group-hover:bg-white/60 focus:ring-4 focus:ring-white">
                    <svg class="w-4 h-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/40 backdrop-blur-sm group-hover:bg-white/60 focus:ring-4 focus:ring-white">
                    <svg class="w-4 h-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

    </div>
</section>
