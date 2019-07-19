<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
        return [
            'name'      => 'required',
            'email'     => 'required',
            'password'  => 'required'
        ];
    }

    public function message()
    {
        return [
        'name.required'     => 'Please Enter Your Name',
        'email.required'    => 'Please Enter Your Email',
        'password.required' => 'Please Enter Your Password',

        ];
    }
}
