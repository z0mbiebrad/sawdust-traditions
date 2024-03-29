@props(['trigger'])
<div x-data="{ show: false }" @click.away="show = false">
    {{-- Trigger --}}
    <div @click="show = ! show">
        {{ $trigger }}
    </div>
    {{-- Links --}}
    <div x-show="show" class="absolute z-50 w-full py-2 mt-2 overflow-auto bg-black bg-opacity-80 rounded-xl max-h-26" style="display: none">
        {{ $slot }}
    </div>

</div>