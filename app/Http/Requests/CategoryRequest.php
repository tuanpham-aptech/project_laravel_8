<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'c_name'=>'required|min:2|regex:/[a-zA-Z]/',
        ];
    }

    public function messages() {
        return [
            'c_name.required'=>':attribute bắt buộc phải nhập',
            'c_name.min'=>':attribute độ dài lớn hơn :min ký tự ',
        ];
    }

    public function attributes(){
        return [
            'c_name'=>"Danh mục ",
        ];
    }
}
