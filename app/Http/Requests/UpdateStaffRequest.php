<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStaffRequest extends FormRequest
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
        $staffId = $this->route('id');
        return [
            'staff_name' => 'required',
            'email' => 'required|email|unique:staff,email,' . $staffId . ',staff_id',
            'staff_phone' => 'required|numeric|min:10',
            'staff_address' => 'required',
            'password' => 'required|min:8|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'staff_name.required' => 'Vui lòng nhập tên.',
            'email.required' => 'Vui lòng nhập email.',
            'email.email' => 'Email không hợp lệ.',
            'email.unique' => 'Email đã tồn tại.',
            'staff_phone.required' => 'Vui lòng nhập số điện thoại.',
            'staff_phone.numeric' => 'Không phải định dạng số điện thoại',
            'staff_phone.min' => 'Số điện thoại phải từ 10 số trở lên',
            'staff_address.required' => 'Vui lòng nhập địa chỉ.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự.',
            'password.confirmed' => 'Xác nhận mật khẩu không khớp với mật khẩu.',
        ];
    }
}
