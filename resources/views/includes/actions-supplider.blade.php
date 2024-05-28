<x-dropdown  width="w-fit">
    <x-slot name="trigger">
            <span class="inline-flex rounded-md">
                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                      </svg>

                </button>
            </span>
    </x-slot>
    <x-slot name="content">

        <div class="block px-4 py-2 text-xs text-gray-400">
            <a href="#" wire:click.prevent="editar({{$row->id}})" >
                {{ __('Editar  Fundamentos de texto en HTML ') }}
               
            </a>
        </div>
        <div class="block px-4 py-2 text-xs text-gray-400">
                <a href="#" wire:click.prevent="remove({{$row->id}})" >
                    {{ __('Eliminar') }}
                </a>
        </div>
    </x-slot>
</x-dropdown>