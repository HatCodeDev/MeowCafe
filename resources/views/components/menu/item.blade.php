@props(['name', 'price', 'isStar' => false])

<div class="grid grid-cols-[1fr_auto] gap-x-4 border-b border-gray-200 py-4">
    
    <div class="flex flex-col">
        <h3 class="text-lg sm:text-xl font-bold text-[#4a2c2a]">
            @if($isStar)<span class="mr-1">⭐</span>@endif{{ $name }}
        </h3>
        
        @if ($slot->isNotEmpty())
            <div class="text-gray-600 text-sm sm:text-base mt-1">
                {{ $slot }}
            </div>
        @endif
    </div>

    <div class="text-right">
        <p class="text-lg sm:text-xl font-bold text-[#4a2c2a] whitespace-nowrap">$ {{ $price }}</p>
    </div>

</div>
