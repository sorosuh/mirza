<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createQuestionRequest extends FormRequest
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
            'dificulty' =>'required | string',
            'title'=>'required | string',
            'major'=>'required | string',
            'code'=>'required | integer',
            'link'=>'required | string',
            'price'=>'required | string'
        ];
    }

    public function messages()
    {
        return[
            'dificulty.required' =>'میزان سختی سوال رت وارد کنید',
            'title.required'=>'عنوان را وارد کنید',
            'major.required'=>'رشنه را وارد کنید',
            'code.required'=>'کد سوال را وارد کنید',
            'code.integer'=>'کد باید بصورت عدد باشد',
            'link.required'=>'لینک را وارد کنید',
            'price.required'=>'قیمت را وارد کنید',
        ];
    }
}
