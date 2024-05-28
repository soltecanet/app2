<?php

namespace App\Http\Livewire\Proveedores;

use Livewire\Component;

class ListSupplier extends Component
{


    public function new () {
        redirect()->route('supplier.create');
    }


    public function render()
    {
        return view('livewire.proveedores.list-supplier');
    }
}
