<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class myFormRequest extends FormRequest
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
            'firstName' => 'bail | required | between:5,20 | alpha',
            'lastName' => 'bail | required | between:5,20 | alpha',
            'gender' => 'bail | required',
            'birthday' => 'bail',
            'email' => 'bail | required | email',
            'company' => 'bail | required | between:5,20',
            'message' => 'bail | required | max:500'
        ];
    }
}
