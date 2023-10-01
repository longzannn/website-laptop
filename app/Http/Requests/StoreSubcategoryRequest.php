<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubcategoryRequest extends FormRequest
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
            'sub_name' => 'required|unique:subcategory,sub_name',
        ];
    }

    public function messages()
    {
        return [
            'sub_name.required' => 'Vui lòng nhập tên.',
            'sub_name.unique' => 'Tên đã tồn tại.',
        ];
    }
}
