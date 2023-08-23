@extends('layouts.master')

@section('title') @lang('translation.BOQ_List') @endsection

@section('css')

<!-- flatpickr css -->
<link href="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css">

<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Dashboard @endslot
@slot('title') Customer List @endslot
@endcomponent


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm">

                    </div>
                    <div class="col-sm-auto">
                        <div class="d-flex align-items-center gap-1 mb-4">
                            <div class="mb-4">
                                <button type="button" class="btn btn-light waves-effect waves-light">
                                    <a href="admin.add-user" data-key="t-invoice-list">
                                        <i class="bx bx-plus me-1"></i> Add Customer</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="table-responsive">
                    <table class="table align-middle datatable dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                        <thead>
                            <tr class="bg-transparent">
                                <th>Customer Name</th>
                                <th>Phone No</th>
                                <th>Username</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Zip</th>
                                <th style="width: 90px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customers as $customer)
                            <tr>
                                <td> {{ $customer->customer_name }}</td>
                                <td> {{ $customer->mobile }}</td>
                                <td> {{ $customer->name }}</td>
                                <td> {{ $customer->city}}</td>
                                <td> {{ $customer->state }}</td>
                                <td> {{ $customer->zip }}</td>
                                <td>
                                    <form action="{{ route('subcategories.destroy',$customer->id) }}" method="POST">

                                        <a class="btn btn-info btn-sm " href="{{ route('customer_boq',$customer->id) }}"><i class="fas fa-file"></i></a>
                                        <a class="btn btn-warning btn-sm " href="{{ route('subcategories.edit',$customer->id) }}"><i class="fas fa-edit"></i></a>


                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>

                                    </form>

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