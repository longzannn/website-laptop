<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'prd_name' => 'required',
            'old_price' => 'required',
            'current_price' => 'required',
            'prd_images' => 'required',
            'version_name' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'prd_name.required' => 'Tên sản phẩm không được để trống',
            'old_price.required' => 'Giá cũ không được để trống',
            'current_price.required' => 'Giá hiện tại không được để trống',
            'prd_images.required' => 'Ảnh sản phẩm không được để trống',
            'version_name.required' => 'Tên phiên bản không được để trống',
        ];
    }
}
