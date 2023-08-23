@extends('layouts.master')

@section('title') @lang('translation.Product_Master') @endsection

@section('css')
<link href="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Dashboard @endslot
@slot('title') Product Master @endslot
@endcomponent


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                    Session::forget('success');
                    @endphp
                </div>
                @endif
                <div class="row">
                    <div class="col-sm-12">
                            <div class="mb-4">
                                <form method="POST" enctype="multipart/form-data" action="{{ route('file-import') }}" id="productImport">
                                    @csrf
                                    <label for="file-upload" class="btn btn-light waves-effect waves-light float-end">
                                    <i class="far fa-file-excel"></i> Import Product
                                    </label>
                                    <input type="file" name="file" id="file-upload" class="d-none">
                                </form>

                                <button type="button" class="btn btn-light waves-effect waves-light">
                                    <a href="{{ route('products.create') }}" data-key="t-invoice-list">
                                        <i class="bx bx-plus me-1"></i> Add Product</a>
                                </button>
                            </div>
                        </div>
                </div>

                <div class="table-responsive">

                    <table class="table align-middle datatable dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">

                        <thead>
                            <tr class="bg-transparent">
                                <th>SR NO</th>
                                <th>Item Name</th>
                                <th>Units</th>
                                <th>Category</th>
                                <th>SubCategory</th>
                                <th>Manf Name</th>
                                <th>Purchase Rate</th>
                                <th>Pur Discount</th>
                                <th>Actual Rate</th>
                                <th style="width:200px;">Description</th>
                                <th>Action</th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>

                                <td>{{ $loop->iteration}}</td>
                                <td>
                                    {{ $product->name	}}
                                </td>
                                <td>
                                    @if($product->unit)
                                    {{ $product->unit->name }}
                                    @endif
                                </td>
                                <td>
                                    @if($product->category)
                                    {{ $product->category->name }}
                                    @endif
                                </td>
                                <td>
                                    @if($product->subcategory)
                                    {{ $product->subcategory->name }}
                                    @endif
                                </td>
                                <td>
                                    @if($product->manufacturer)
                                    {{ $product->manufacturer->name }}
                                    @endif
                                </td>
                                <td>
                                    {{ $product->purchase_rate}}
                                </td>
                                <td>
                                    {{ $product->purchase_discount}}%
                                </td>
                                <td>
                                    {{ $product->actual_rate}}
                                </td>
                                <td>
                                    {{ $product->description}}
                                </td>
                                <td>
                                    <div class="dropdown">

                                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                            <a class="btn btn-warning btn-sm" href="{{ route('products.edit',$product->id) }}"><i class="fas fa-edit"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

<!-- flatpickr js -->
<script src="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.js') }}"></script>

<!-- Required datatable js -->
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>

<!-- init js -->
<script src="{{ URL::asset('/assets/js/pages/invoices-list.init.js') }}"></script>

@endsection