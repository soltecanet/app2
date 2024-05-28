<?php

namespace App\Http\Livewire\Proveedores;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Supplier;
use Carbon\Carbon;

class ProveedorsTable extends DataTableComponent
{
    protected $model = Supplier::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }
// ->deselected()
    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nombre", "name")
                ->sortable()
                ->searchable(),
            Column::make("Direccion", "direction")
                ->sortable(),
            Column::make("Región", "region.name")
                ->sortable(),
            Column::make("Comuna", "commune.name")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->format(
                    fn($value, $row, Column $column) =>  Carbon::createFromTimestamp(strtotime($row->updated_at))->format('d/m/Y')
                )
               ->sortable(),
            Column::make('Acciones','id')
                ->view('includes.actions-supplider'),
            Column::make('Otros','id')
                ->view('includes.select-colum'),
        ];
    }


    public function editar($id) {
        redirect()->route('supplier.edit', $id);
    }

    public function remove($id) {
        $reg = Supplier::find($id);
        $reg->delete();
        session()->flash('message','El Registro fue eliminado exitosamente.');
        redirect()->route('supplier.index');
    }

     public function update($id) {
        redirect()->route('supplier.index');
    }



}
