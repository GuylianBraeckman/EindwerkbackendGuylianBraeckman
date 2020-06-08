<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
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
            //
            'name'=>'required|string',
            'category_id'=>'required',
            'brand_id'=>'required',
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'Name is required!',
            'category_id.required' => 'Category is required!',
            'brand_id.required' => 'Brand is required!',
        ];
    }
}
