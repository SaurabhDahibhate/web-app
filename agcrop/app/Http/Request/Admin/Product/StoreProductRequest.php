<?php

namespace App\Http\Request\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{

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
            'name' => 'required',
            'unit_id' => 'required',
            'category_id' => 'required',
            'manufacture_id' => 'required',
            'purchase_rate' => 'required',
            'purchase_discount' => 'required',
            'actual_rate' => 'required',
            'description' => 'required',
        ];
    }

}
