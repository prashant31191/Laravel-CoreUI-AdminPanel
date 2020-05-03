<?php

namespace App\Http\Requests;

use App\Subcategory;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSubcategoryRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('subcategory_edit');
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
