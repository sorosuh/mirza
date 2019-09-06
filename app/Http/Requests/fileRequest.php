<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class fileRequest extends FormRequest
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
            'file'=>'required | max:10000',
        ];
    }

    public function messages()
    {
        return[
            'file.required'=>'لطفا فایل را اپلود کنید',
            'file.max'=>'حداکثر حجم kb 10000',
            //'file.mimes'=>'فرمت نامعتبر',
        ];
    }
}
