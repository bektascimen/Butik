<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdresKayitRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return !auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'adres_baslik' => 'required|min:2|max:60',
            'satir1' => 'required|max:60',
            'satir2' => 'required|max:60',
            'telefon' => 'required'
        ];
    }
}
