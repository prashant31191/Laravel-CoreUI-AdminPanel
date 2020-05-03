@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('global.subcategory.title') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.subcategory.fields.name') }}
                    </th>
                    <td>
                        {{ $subcategory->name }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.subcategory.fields.description') }}
                    </th>
                    <td>
                        {!! $subcategory->description !!}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.subcategory.fields.price') }}
                    </th>
                    <td>
                        ${{ $subcategory->price }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection