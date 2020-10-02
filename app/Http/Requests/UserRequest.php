<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            "name" => ['required', 'min:4'],
            "secondname" => ['required', 'min:5'],
            "firstname" => ['required'],
            "email" => ['required', 'email'],
            "phones" => ['required', 'integer'],
            'password' => ['required'],
            "national_identification" => ['required', 'integer']
        ];
    }
}
