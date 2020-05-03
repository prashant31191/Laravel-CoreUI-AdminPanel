<?php

namespace App\Http\Requests;

use App\Subcategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class MassDestroySubcategoryRequest extends FormRequest
{
    public function authorize()
    {
        return abort_if(Gate::denies('subcategory_delete'), 403, '403 Forbidden') ?? true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:subcategorys,id',
        ];
    }
}
