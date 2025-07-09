@props(['tab', 'currentTab', 'label'])

<button @click="{{ $currentTab }} = '{{ $tab }}'" 
        :class="{'bg-[#bb95ae] text-white shadow-sm': {{ $currentTab }} === '{{ $tab }}', 'bg-gray-100 text-gray-700 hover:bg-gray-200': {{ $currentTab }} !== '{{ $tab }}'}" 
        class="py-2 px-4 rounded-full text-sm font-semibold transition-colors duration-300">
    {{ $label }}
</button>