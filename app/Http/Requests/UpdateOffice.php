<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOffice extends FormRequest
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
            'name' => 'required|max:20',
            'address' => 'required',
            'tel' => 'required',
            'email' => 'required',
        ];
    }
    public function attributes()
    {
    return [
            'name' => '会社名',
            'address' => '住所',
            'tel' => '電話番号',
            'email' => 'メールアドレス',
    ];
    }
}
