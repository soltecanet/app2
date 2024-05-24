{{-- Inicio cuerpo del formulario --}}

<div class="mt-20  md:mt-8 ">
    <input
        type="text"
        placeholder="Ingresar Nombre"
        wire:model="supplier.name"
        class="placeholder-gray-300 block mb-2 w-full text-sm text-gray-900 bg-gray-50 rounded-sm border-2 border-blue-900 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
        />
   @error('supplier.name') <span class="error text-red-600 text-sm">{{ $message }}</span> @enderror
</div>

<div class="my-2">
    <input
        type="text"
        placeholder="Ingresar Direccion"
        wire:model="supplier.direction"
        class="placeholder-gray-300 block mb-2 w-full text-sm text-gray-900 bg-gray-50 rounded-sm border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
        />
   @error('supplier.direction') <span class="error text-red-600 text-sm">{{ $message }}</span> @enderror
</div>


<div>
    <label for="region_id" class="block text-sm font-medium text-gray-900 dark:text-white">
        Región
    </label>
    <x-form.input-select
        :options="$regiones"
        placeholder="Seleccionar Región"
        wire:model.defer="supplier.region_id"
        wire:change="getComunas($event.target.value)"
        class="placeholder-gray-300 block mb-1 w-full md:w-80 text-sm text-gray-900 bg-gray-50 rounded-sm border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
        />
    @error('supplier.region_id') <span class="error text-red-600 text-sm">{{ $message }}</span> @enderror
</div>

<div>
    <label for="commune_id" class="block text-sm font-medium text-gray-900 dark:text-white">
        Comuna
    </label>
    <x-form.input-select
        :options="$comunas"
        placeholder="Seleccionar Comuna"
        wire:model.defer="supplier.commune_id"
        class="placeholder-gray-300 block mb-1 w-full md:w-80 text-sm text-gray-900 bg-gray-50 rounded-sm border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
        />
    @error('supplier.commune_id') <span class="error text-red-600 text-sm">{{ $message }}</span> @enderror
</div>
</div>


{{-- Fin cuerpo del formulario --}}