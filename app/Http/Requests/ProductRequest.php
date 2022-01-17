<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'pro_category_id'=>'required',
            'pro_name'=>'required',
            'pro_price'=>'required|integer',
            'pro_sale'=>'required|integer',
            'pro_image'=>'image',
            'pro_quantity'=>'required|integer',
        ];
    }

    public function messages() {
        return [
            'pro_category_id.required'=>':attribute bắt buộc phải nhập',
            'pro_name.required'=>':attribute bắt buộc phải nhập',
            'pro_price.required'=>':attribute bắt buộc phải nhập',
            'pro_price.integer'=>':attribute phải là số ',
            'pro_sale.integer'=>':attribute phải là số ',
            'pro_image.image'=>':attribute phải là file ảnh ',
            'pro_quantity.required'=>':attribute bắt buộc phải nhập',
            'pro_quantity.integer'=>':attribute phải là số ',
        ];
    }

    public function attributes(){
        return [
            'pro_category_id'=>"Danh mục ",
            'pro_name'=>'Tên sản phẩm',
            'pro_image'=>'Ảnh',
            'pro_quantity'=>'Số lượng',
            'pro_price'=>'Giá',
            // 'pro_description'=>'Mô tả ',

        ];
    }
}
