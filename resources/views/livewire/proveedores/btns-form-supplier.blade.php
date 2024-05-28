@props(['labelboton' => 'Crear'])
{{-- inicio de botones --}}

<div class="py-2 flex justify-end">
    <div class="px-1" >
        <button
        class=" align-middle self-center  bg-blue-600 hover:bg-blue-800 text-white px-3 py-2 rounded-md tracking-tight"
        type="submit">
        {{$labelboton}}
        </button>
    </div>
    <div class="px-1 pt-2" >
       <a href="{{ route('supplier.index') }}"
        class=" align-middle self-center  bg-blue-600 hover:bg-blue-800 text-white px-3 py-2.5 rounded-md tracking-tight">
          Cancelar
       </a>
   </div>
</div>



{{-- fin de botones --}}