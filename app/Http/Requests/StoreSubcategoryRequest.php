<?php

namespace App\Http\Requests;

use App\Subcategory;
use Illuminate\Foundation\Http\FormRequest;

class StoreSubcategoryRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('subcategory_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
            ],
        ];
    }
}
