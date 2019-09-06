<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
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
            'name' =>'required | string',
            'family'=>'required | string',
            'email'=>'required | email',
            'phone'=>'required | integer',
            'major'=>'required | string',
            'password'=>'required | string'
        ];

    }

    public function messages()
    {
        return [
            'name.required' =>'لطفا نام را وارد کنید',
            'name.string' =>'فرمت نام  نامتعبر',
            'family.required'=>'لطفا نام خانوادگی را وارد کنید',
            'family.string'=>'فرمت نام خانوادگی نامتعبر',
            'email.required'=>' لطفا ایمیل را وارد کنید',
            'email.email'=>'فرمت ایمیل نامتعبر',
            'phone.required'=>'لطفا شماره تماس را وارد کنید',
            'phone.integer'=>'فرمت شماره تماس نامتعبر',
            'major.required'=>'لطفا رشته را وارد کنید',
            'major.string'=>'فرمت رشته نامتعبر',
            'password.required'=>' لطفا کد ملی را وارد کنید',
            'password.string'=>'فرمت کد ملی نامتعبر '
        ];
    }
}
