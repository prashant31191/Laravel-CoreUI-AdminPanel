<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubcategoryRequest;
use App\Http\Requests\UpdateSubcategoryRequest;
use App\Subcategory;

class SubcategorysApiController extends Controller
{
    public function index()
    {
        $subcategorys = Subcategory::all();

        return $subcategorys;
    }

    public function store(StoreSubcategoryRequest $request)
    {
        return Subcategory::create($request->all());
    }

    public function update(UpdateSubcategoryRequest $request, Subcategory $subcategory)
    {
        return $subcategory->update($request->all());
    }

    public function show(Subcategory $subcategory)
    {
        return $subcategory;
    }

    public function destroy(Subcategory $subcategory)
    {
        return $subcategory->delete();
    }
}
