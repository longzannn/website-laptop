<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
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
        $customerId = $this->route('id'); // Lấy giá trị tham số customer từ route
        $rules = [
            'cus_name' => 'required',
            'cus_phone' => 'required',
            'cus_address' => 'required',
            'cus_password' => 'required|min:8|confirmed',
        ];
        // Kiểm tra xem email đã thay đổi hay không
        if ($this->cus_email !== $this->get('cus_email')) {
            // Email đã thay đổi, thêm quy tắc validation unique
            $rules['cus_email'] = 'required|email|unique:customer,cus_email,' . $customerId;
        } else {
            // Email không thay đổi, loại bỏ quy tắc validation unique
            $rules['cus_email'] = 'required|email';
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'cus_name.required' => 'Vui lòng nhập tên.',
            'cus_email.required' => 'Vui lòng nhập email.',
            'cus_email.email' => 'Email không hợp lệ.',
            'cus_email.unique' => 'Email đã tồn tại.',
            'cus_phone.required' => 'Vui lòng nhập số điện thoại.',
            'cus_address.required' => 'Vui lòng nhập địa chỉ.',
            'cus_password.required' => 'Vui lòng nhập mật khẩu.',
            'cus_password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự.',
            'cus_password.confirmed' => 'Xác nhận mật khẩu không khớp với mật khẩu.',
        ];
    }
}
