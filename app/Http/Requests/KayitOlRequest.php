<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KayitOlRequest extends FormRequest
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
     * @return array+
     */
    public function rules()
    {
        return [
            'ad' => 'required|min:3|max:60',
            'soyad' => 'required|min:3|max:60',
            'email' => 'required|email|unique:kullanici',
            'password' => 'required|confirmed|min:5|max:15'
        ];
    }
}
