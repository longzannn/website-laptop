<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
        $categoryId = $this->route('id'); // Lấy giá trị tham số subcategory từ route

        return [
            'cat_name' => 'required|unique:category,cat_name,' . $categoryId . ',cat_id',
        ];
    }

    public function messages()
    {
        return [
            'cat_name.required' => 'Vui lòng nhập tên.',
            'cat_name.unique' => 'Tên đã tồn tại.',
        ];
    }
}
