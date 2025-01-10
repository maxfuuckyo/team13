<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBusinessRequest extends FormRequest
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
            'unified_number'=> 'required|numeric|min:1000000000|max:100000000000',
            'business_name'=> 'required|string|min:4',
            'business_address'=> 'required|string',
            'paid_in_capital'=> 'required|numeric',
            'establishment_date'=> 'required|numeric',
            'imported_business_address'=> 'required|string',
            'industry_code_imported'=> 'required|numeric|min:000000001|max:10000000000',
            'imported_date'=>'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'unified_number.required'=> '統一編號是必填項。',
            'unified_number.numeric'=> '編號至少需要 10 個數字。',

            'business_name.required' => '商業名稱是必填項。',
            'business_name.min' => '名稱至少需要 4 個字元。',
            
            'business_address.required' => '商業地址是必填項。',
            'business_address.min' => '地址必須是準確地址。',

            'paid_in_capital.required' => '實收資本額是必填項。',
            'paid_in_capital.numeric' => '資本額必須是數字。',

            'establishment_date.required' => '設立日期是必填項。',
            'establishment_date.numeric' => '日期必須是數字。',
            'establishment_date.min' => '月不能小於 1。',
            'establishment_date.max' => '月不能大於 12。',
            'establishment_date.min' => '日期不能小於 1。',
            'establishment_date.max' => '日期不能大於 31。',

            'imported_business_address.required' => '營業地址是必填項。',
            'imported_business_address.min' => '營業地址必須是準確地址。',

            'industry_code_imported.required' => '行業代碼是必填項。',
            'industry_code_imported.numeric' => '代碼必須是數字。',

            'imported_date.required' => '匯入日期是必填項。',
            'imported_date.numeric' => '日期必須是數字。',
            'establishment_date.min' => '月不能小於 1。',
            'establishment_date.max' => '月不能大於 12。',
            'establishment_date.min' => '日期不能小於 1。',
            'establishment_date.max' => '日期不能大於 31。',
        ];
    }
}
