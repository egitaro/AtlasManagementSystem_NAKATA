<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
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
            'over_name' => 'required|string|max:10',
            'under_name' => 'required|string|max:10',
            'over_name_kana' => 'required|string|max:30|regex:/\A[ァ-ヿ]+\z/u',//全角カタカナ
            'under_name_kana' => 'required|string|max:30|regex:/\A[ァ-ヿ]+\z/u',
            'mail_address' => 'required|email|max:100',
            'sex' => 'required',
            // 'birth_day' => 'required|after_or_equal:2000-01-01',
            // 'role' => 'required',
            // 'password' => 'required|min:8|max:30|confirmed'

        ];
    }

    // public function messages(){
    //     return [
    //         'post_title.min' => 'タイトルは4文字以上入力してください。',
    //         'post_title.max' => 'タイトルは50文字以内で入力してください。',
    //         'post_body.min' => '内容は10文字以上入力してください。',
    //         'post_body.max' => '最大文字数は500文字です。',
    //     ];
    // }
}
