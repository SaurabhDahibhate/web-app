@extends('layouts.master')

@section('title')
@lang('translation.BOQ_List')
@endsection

@section('css')

<!-- flatpickr css -->
<link href="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css">

<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1')
Dashboard
@endslot
@slot('title')
BOQ Request
@endslot
@endcomponent


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm">
                        <!-- <div class="mb-4">
                                <button type="button" class="btn btn-light waves-effect waves-light"><i
                                        class="bx bx-plus me-1"></i> Add BOQ</button>
                            </div> -->
                    </div>
                    <div class="col-sm-auto">
                        <div class="d-flex align-items-center gap-1 mb-4">
                            <!-- <div class="mb-4">
                                    <button type="button" class="btn btn-light waves-effect waves-light">
                                        <a href="admin.add-customer" data-key="t-invoice-list">
                                        <i class="bx bx-plus me-1"></i> Add BOQ</a>
                                    </button>
                                </div> -->
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="table-responsive">
                    <table class="table align-middle datatable dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                        <thead>
                            <th>User</th>
                            <th>Customer</th>
                            <th>Address</th>
                            <th>Project Name</th>
                            <th>Panel No</th>
                            <th>Status</th>
                            <th style="width: 90px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($boqRequests as $boqRequest)

                            <tr>


                                <td><a class="text-dark fw-medium">{{ $boqRequest->user->name  }}</a></td>
                                <td>{{ $boqRequest->customer_name }} ({{ $boqRequest->contact_person }})</td>
                                <td>{{ $boqRequest->customer_address }}</td>
                                <td>{{ $boqRequest->project_name }}</td>
                                <td>{{ $boqRequest->panel_no }}</td>
                                <td>
                                    @if($boqRequest->is_approved)
                                    <div class="badge badge-soft-success font-size-12">Approve</div>
                                    @else
                                    <div class="badge badge-soft-warning font-size-12">Pending</div>
                                    @endif
                                </td>

                                <td>

                                    @if($boqRequest->is_approved)

                                    <a class="btn btn-sm btn-info" href="{{ route('user.boqs.show', [$boqRequest->id]) }}"><i class="fas fa-eye"></i></a>

                                    @endif


                            </tr>

                            @endforeach

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