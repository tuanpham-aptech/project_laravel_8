<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartInfoRequest extends FormRequest
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
            'tr_address'=>'required',
            // 'tr_email'=>'required|regex:/[a-z0-9]+@[a-z]+\.[a-z]{2,3}/',
            'tr_phone'=>'required|numeric',
        ];
    }

    public function messages() {
        return [
            'tr_address.required'=>':attribute bắt buộc phải nhập',
            // 'tr_email.required'=>':attribute bắt buộc phải nhập',
            // 'tr_email.regex'=>':attribute nhập đúng định dạng',
            'tr_phone.required'=>':attribute bắt buộc phải nhập',
            'tr_phone.numeric'=>':attribute nhập là số',
        ];
    }

    public function attributes(){
        return [
            'tr_address'=>"Địa chỉ",
            // 'tr_email'=>"Email",
            'tr_phone'=>'Số điện thoại',
        ];
    }
}
