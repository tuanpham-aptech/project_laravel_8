<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewRequest extends FormRequest
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
            'ns_name'=>'required',
            'ns_description'=>'required',
            'ns_content'=>'required',
            'ns_image'=>'image',
        ];
    }

    public function messages() {
        return [
            'ns_name.required'=>':attribute bắt buộc phải nhập',
            'ns_description.required'=>':attribute bắt buộc phải nhập',
            'ns_content.required'=>':attribute bắt buộc phải nhập',
            'ns_image.image'=>':attribute phải là file ảnh ',
        ];
    }

    public function attributes(){
        return [
            'ns_name'=>"Têm bài viết ",
            'ns_description'=>'Mô tả',
            'ns_image'=>'Ảnh',
            'ns_content'=>'Nội dung',
        ];
    }
}
