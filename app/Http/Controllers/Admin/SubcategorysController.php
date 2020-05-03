<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySubcategoryRequest;
use App\Http\Requests\StoreSubcategoryRequest;
use App\Http\Requests\UpdateSubcategoryRequest;
use App\Subcategory;

class SubcategorysController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('subcategory_access'), 403);

        $subcategorys = Subcategory::all();

        return view('admin.subcategorys.index', compact('subcategorys'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('subcategory_create'), 403);

        return view('admin.subcategorys.create');
    }

    public function store(StoreSubcategoryRequest $request)
    {
        abort_unless(\Gate::allows('subcategory_create'), 403);

        $subcategory = Subcategory::create($request->all());

        return redirect()->route('admin.subcategorys.index');
    }

    public function edit(Subcategory $subcategory)
    {
        abort_unless(\Gate::allows('subcategory_edit'), 403);

        return view('admin.subcategorys.edit', compact('subcategory'));
    }

    public function update(UpdateSubcategoryRequest $request, Subcategory $subcategory)
    {
        abort_unless(\Gate::allows('subcategory_edit'), 403);

        $subcategory->update($request->all());

        return redirect()->route('admin.subcategorys.index');
    }

    public function show(Subcategory $subcategory)
    {
        abort_unless(\Gate::allows('subcategory_show'), 403);

        return view('admin.subcategorys.show', compact('subcategory'));
    }

    public function destroy(Subcategory $subcategory)
    {
        abort_unless(\Gate::allows('subcategory_delete'), 403);

        $subcategory->delete();

        return back();
    }

    public function massDestroy(MassDestroySubcategoryRequest $request)
    {
        Subcategory::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
