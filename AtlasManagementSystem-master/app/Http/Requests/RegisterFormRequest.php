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

    protected function getValidatorInstance()
    {
    $data = $this->all();

    $data['birth_day'] = $this->input('old_year') . '-' . $this->input('old_month') . '-' . $this->input('old_day');  //ここでデータまとめてる

    $this->getInputSource()->replace($data);

    return parent::getValidatorInstance();
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
            'birth_day' => 'required|after_or_equal:2000-01-01',
            'role' => 'required',
            'password' => 'required|min:8|max:30|confirmed'

        ];
    }

    public function messages(){
        return [
            'over_name.max' => '姓は10文字以内で入力してください。',
            'under_name.max' => '名は10文字以内で入力してください。',
            'over_name_kana.max' => 'セイは30文字以内で入力してください。',
            'over_name_kana.regex' => 'セイは全角カタカナで入力してください。',
            'under_name_kana.max' => 'メイは30文字以内で入力してください。',
            'under_name_kana.regex' => 'メイは全角カタカナで入力してください。',
            'mail_address.email' => 'メールアドレスはメール形式で入力してください。',
            'mail_address.max' => 'メールアドレスは100文字以内で入力してください。',
            'birth_day.after_or_equal' => '生年月日は2000年1月1日以降で入力してください。',
            'password.confirmed' => 'パスワードが一致しません。',
            'password.min' => 'パスワードは8文字以上で入力してください。',
            'password.max' => 'パスワードは30文字以内で入力してください。',
        ];
    }
}
