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
            'staff_email' => 'required|email|unique:staff,staff_email,' . $staffId . ',staff_id',
            'staff_phone' => 'required|numeric|min:10',
            'staff_address' => 'required',
            'staff_password' => 'required|min:8|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'staff_name.required' => 'Vui lòng nhập tên.',
            'staff_email.required' => 'Vui lòng nhập email.',
            'staff_email.email' => 'Email không hợp lệ.',
            'staff_email.unique' => 'Email đã tồn tại.',
            'staff_phone.required' => 'Vui lòng nhập số điện thoại.',
            'staff_phone.numeric' => 'Không phải định dạng số điện thoại',
            'staff_phone.min' => 'Số điện thoại phải từ 10 số trở lên',
            'staff_address.required' => 'Vui lòng nhập địa chỉ.',
            'staff_password.required' => 'Vui lòng nhập mật khẩu.',
            'staff_password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự.',
            'staff_password.confirmed' => 'Xác nhận mật khẩu không khớp với mật khẩu.',
        ];
    }
}
