<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewLectorRegister extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){
        return [
            'sensor_id'=>'required',
            'latitud'=>'required|numeric',
            'longitud'=>'required|numeric',
        ];
    }
}
