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
            'name'=>'required',
            'email'=>'required|regex:/[a-z0-9]+@[a-z]+\.[a-z]{2,3}/',
        ];
    }


    public function messages() {
        return [
            'name.required'=>':attribute bắt buộc phải nhập',
            'email.required'=>':attribute bắt buộc phải nhập',
            'email.regex'=>':attribute nhập đúng định dạng',
        ];
    }

    public function attributes(){
        return [
            'name'=>"Họ tên ",
            'email'=>"Email ",
        ];
    }

}
