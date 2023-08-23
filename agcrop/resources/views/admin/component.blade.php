@extends('layouts.master')

@section('title') @lang('translation.Quotation_List') @endsection

@section('css')

    <!-- flatpickr css -->
    <link href="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Dashboard @endslot
        @slot('title') Component @endslot
    @endcomponent


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm">
                            <div class="mb-4">

                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <button type="button" class="btn btn-light waves-effect waves-light">
                                <a href="admin.add-component" data-key="t-invoice-list">
                                    <i class="bx bx-plus me-1"></i> Add Component
                                </a>
                            </button>
                        </div>
                    </div>
                    <br>
                    <!-- end row -->

                    <div class="table-responsive">
                        <table class="table align-middle datatable dt-responsive table-check nowrap"
                               style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                            <thead>
                            <tr class="bg-transparent">
                                <th style="width: 30px;">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" name="check" class="form-check-input" id="checkAll">
                                        <label class="form-check-label" for="checkAll"></label>
                                    </div>
                                </th>
                                <th style="width: 120px;">Component ID</th>
                                <th>Component Name</th>
                                <th> Description</th>
                                <th>Price</th>
                                <th style="width: 90px;">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input">
                                        <label class="form-check-label"></label>
                                    </div>
                                </td>

                                <td><a href="javascript: void(0);" class="text-dark fw-medium">#MN0215</a></td>
                                <td>
                                    Jockey
                                </td>
                                <td>hgdfgusbfjehsgudf meuhyewif g ueyejuewyi hewjrheuu bnesnbj geu</td>

                                <td>
                                    31000
                                </td>

                                <td>
                                    <div class="dropdown">
                                        <button
                                            class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                            <li><a class="dropdown-item" href="#">Print</a></li>
                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input">
                                        <label class="form-check-label"></label>
                                    </div>
                                </td>

                                <td><a href="javascript: void(0);" class="text-dark fw-medium">#MN0215</a></td>
                                <td>
                                    Hydrant
                                </td>
                                <td>dfhdss ndgt ujj euhjeh</td>

                                <td>
                                    13562
                                </td>

                                <td>
                                    <div class="dropdown">
                                        <button
                                            class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                            <li><a class="dropdown-item" href="#">Print</a></li>
                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- end table responsive -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection

@section('script')

    <!-- flatpickr js -->
    <script src="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/invoices-list.init.js') }}"></script>

@endsection
