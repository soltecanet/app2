<?php

namespace App\Http\Requests;
use App\Models\Supplier;
use Illuminate\Foundation\Http\FormRequest;

class SaveSupplierRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(Supplier $supplier)
    {
        return [
            'supplier.name' => 'required',
            'supplier.direction' => 'required',
            'supplier.region_id' => 'required',
            'supplier.commune_id' => 'required',

            // 'supplier.direction' =>  ($supplier->direction != null) ? ['regex:/^[a-z\s]+$/i'] : [''],
             // 'supplier.user_id' => 'required',


        ];
    }


    public function messages()
        {
            return [
                'supplier.name.required' => 'El Nombre del Proveedor es requerido.',
                'supplier.direction.required' => 'La dirección es requerida',
                'supplier.region_id.required' => 'requiere Region',
                'supplier.commune_id.required' => 'requiere Comuna',
            ];
        }


}
