<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfoRequest extends FormRequest
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
            'id_nv' => 'required',
            'name_nv' => 'required',
            'gmail_nv' => 'required',
            'password' => 'required',
            'phone_nv' => 'required',
            'team_nv' => 'required',
        ];
    }
    public function messages ()
    {
        return [
            'id_nv.required' => 'Nhập ID',
            'name_nv.required' => 'Tên nhân viên',
            'gmail_nv.required' => 'Nhập mail nhân viên',
            'password.required' => 'Thiết lập pass cho nhân viên',
            'phone_nv.required' => 'Số điện thoại nhân viên',
            'team_nv.required' => 'Chọn team',
        ];
    }
}
