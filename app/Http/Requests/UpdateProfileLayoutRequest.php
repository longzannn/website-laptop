<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileLayoutRequest extends FormRequest
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
        $customerId = $this->route('id');
        return [
            'cus_name' => 'required',
            'email' => 'required|email|unique:customer,email,' . $customerId . ',cus_id',
            'cus_phone' => 'required|numeric|min:10',
            'cus_address' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'cus_name.required' => 'Vui lòng nhập tên.',
            'email.required' => 'Vui lòng nhập email.',
            'email.email' => 'Email không hợp lệ.',
            'email.unique' => 'Email đã tồn tại.',
            'cus_phone.required' => 'Vui lòng nhập số điện thoại.',
            'cus_phone.numeric' => 'Không phải định dạng số điện thoại',
            'cus_phone.min' => 'Số điện thoại phải từ 10 số trở lên',
            'cus_address.required' => 'Vui lòng nhập địa chỉ.',
        ];
    }
}
