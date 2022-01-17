<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            //
            'c_name'=>'required',
            'c_email'=>'required|regex:/[a-z0-9]+@[a-z]+\.[a-z]{2,3}/',
            'c_title'=>'required',
            'c_description'=>'required',
        ];
    }
    public function messages() {
        return [
            'c_name.required' =>':attribute bắt buộc phải nhập',
            'c_email.required' =>':attribute bắt buộc nhập',
            'c_email.regex'=>':attribute nhập đúng định dạng',
            'c_title.required'=>':attribute bắt buộc phải nhập',
            'c_description.required'=>':attribute bắt buộc phải nhập',
        ];
    }

    public function attributes(){
        return [
            'c_name'=>"Họ tên ",
            'c_email'=>'Email',
            'c_title'=>'Tiêu đề ',
            'c_description'=>'Mô tả '
        ];
    }
}
