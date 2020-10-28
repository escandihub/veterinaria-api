<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HorarioRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        // if($this->getMethod() === 'POST')
        return [
            'dia' => ['required'],
            'hora_inicio' => ['required'],
            'hora_fin' => ['required'],
        ];
        //else if($this->getMethod() === 'POST')
    }
}
