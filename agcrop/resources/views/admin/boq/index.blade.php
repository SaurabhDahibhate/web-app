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

                    </div>
                    <div class="col-sm-auto">
                        <div class="d-flex align-items-center gap-1 mb-4">

                        </div>
                    </div>
                </div>


                <div class="table-responsive">
                    <table class="table align-middle datatable dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                        <thead>
                            <tr class="bg-transparent">
                               <!--  <th style="width: 30px;">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" name="check" class="form-check-input" id="checkAll">
                                        <label class="form-check-label" for="checkAll"></label>
                                    </div>
                                </th> -->
                                <th>User</th>
                                <th>Customer</th>
                                <th>Address</th>
                                <th>Project Name</th>
                                <th>Panel No</th>
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
                                    <a href="{{ route('boqs.show', [$boqRequest->id]) }}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
 
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