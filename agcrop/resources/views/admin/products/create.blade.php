@extends('layouts.master')

@section('title') @lang('translation.Company_Name') @endsection

@section('css')

    <!-- flatpickr css -->
    <link href="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Product Master @endslot
        @slot('title')  Add Product Master @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <form action="{{ route('products.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-4">
                                    <label class="form-label" for="default-input">Item Name</label>
                                    <input class="form-control" name="name" type="text" id="default-input"
                                           placeholder="Enter Item Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom05">Units</label>


                                        <select name="unit_id" class="form-control form-select" style="width:250px">
                                            <option value="">Select Units</option>
                                            @foreach ($unit as $key => $value)
                                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                            @endforeach
                                        </select>


                                        <div class="invalid-feedback">
                                            Please provide a units.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom05">Manufacturing Name</label>

                                        <select name="manufacture_id" class="form-control form-select"
                                                style="width:250px">
                                            <option value="">Selects Manufacture name</option>
                                            @foreach ($manufacture as $key => $value)
                                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                            @endforeach
                                        </select>

                                        <div class="invalid-feedback">
                                            Please provide a Manf. Name.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom05"> Category</label>
                                        <select name="category_id" class="form-control form-select" style="width:250px">
                                            <option value="">Select Category</option>
                                            @foreach ($category as $key => $value)
                                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">
                                            Please provide a Category.
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom05"> Sub Category</label>
                                        <select name="subcategory_id" class="form-control form-select"
                                                style="width:250px">
                                            <option value="">Select Category</option>
                                            @foreach ($subcategory as $key => $value)
                                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">
                                            Please provide a subcategory.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label class="form-label" for="default-input">Purchase Rate </label>
                                    <input class="form-control" name="purchase_rate"
                                           placeholder="Enter Rate">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label class="form-label" for="default-input">Purchase Discount </label>
                                    <input class="form-control" name="purchase_discount" id="default-input"
                                           placeholder="Enter Discount in %">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-4">
                                    <label class="form-label" for="default-input">Actual Rate </label>
                                    <input class="form-control" name="actual_rate" id="default-input" value=""
                                           placeholder=" Actual Rate">

                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-4">
                                    <label class="form-label" for="default-input"> Description </label>
                                    <textarea class="form-control" name="description" type="text" id="default-input"
                                              placeholder="Enter Description"></textarea>
                                </div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-info"> Add Product</button>

                    </form>
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
