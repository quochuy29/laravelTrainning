<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
            'name' => 'required|regex:/[^0-9]$/',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($this->id)
            ],
            'age'=>'required|numeric',
            'gender' => 'required|numeric',
            'programming_language'=>'required|alpha'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Hãy nhập vào tên người dùng',
            'name.regex' => 'Tên người dùng chỉ chứa chữ cái và khoảng cách',
            'gender.required' => 'Hãy chọn giới tính người dùng',
            'gender.numeric' => 'Kiểu dữ liệu của giới tính được lưu là số',
            'age.required' => 'Hãy nhập tuổi của người dùng',
            'age.numeric' => 'Tuổi của người dùng là số',
            'email.required' => 'Chưa nhập email',
            'email.unique' => 'Email đã tồn tại',
            'email.email' => 'Email chưa đúng định dạng',
            'programming_language.required' => 'Hãy chọn ngôn ngữ lập trình',
            'programming_language.alpha' => 'Ngôn ngữ lập trình phải là chữ'
        ];
    }
}
