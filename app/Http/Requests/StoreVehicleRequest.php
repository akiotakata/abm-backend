<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVehicleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'tipo_vehiculo' => ['required'],
            'cantidad_ruedas' => ['required'],
            'marca' => ['required'],
            'modelo' => ['required'],
            'patente' => ['required'],
            'numero_chasis' => ['required'],
            'kilometros' => ['required'],
        ];
    }
}
