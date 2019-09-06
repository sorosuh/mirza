<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginRequest extends FormRequest
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
            'name' =>'required | exists:users,name',
            'password'=>'required ',
        ];

    }

    public function messages()
    {
        return [
            'name.required' =>'لطفا نام را وارد کنید',
            'name.string' =>'فرمت نام  نامتعبر',
            'password.required'=>' لطفا کد ملی را وارد کنید',
            'password.string'=>'فرمت کد ملی نامتعبر '
        ];
    }
}
