<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MakeRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => ''
        ];
    }

    public function authorize()
    {
        return true;
    }
}
