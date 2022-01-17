<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title'=>'required|min:2|regex:/^[a-z]+$/',
            'description'=>'required',
            'category_id'=>'required',
            'tag_id'=>'required',
        ];
    }
    public function messages(){
        return [
            'title.required'=>':attribute bắt buộc phải nhập ',
            'description.required'=>':attribute bắt buộc phải nhập ',
            'category_id.required'=>':attribute bắt buộc phải nhập ',
            'tag_id.required'=>':attribute bắt buộc phải nhập ',
            'title.min'=> ':attribute độ dài lớn hơn :min ký tự  ',
        ];
    }
    public function attributes(){
        return [
            'title'=>"Tiêu đề ",
            'description'=>'Mô tả ',
            'tag_id'=>'Thẻ Tag',
            'category_id'=>'Danh mục'
        ];
    }
}
