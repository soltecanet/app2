<?php

namespace App\Http\Livewire\Proveedores;

use App\Models\Region;
use App\Models\Commune;
use App\Models\Supplier;

use Livewire\Component;

class CreateSupplider extends Component
{


    public Supplier $supplier;
    public $regiones;
    public $comunas;

    public function mount() {
        $this->supplier = new Supplier;
        $this->regiones = Region::pluck('name', 'id');
        $this->comunas = [];
    }

    public function getComunas($id) {
        $this->comunas = Commune::where('region_id', '=', $id)
                                ->pluck('name', 'id');
    }





     public function render()
    {
        return view('livewire.proveedores.create-supplider', [
            'regiones' => $this->regiones,
            'comunas' => $this->comunas
        ]);
    }
}
