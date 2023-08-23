@extends('layouts.master')

@section('title') @lang('translation.Product_Master') @endsection

@section('css')
    <link href="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Dashboard @endslot
        @slot('title') Master Data  @endslot
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


                    <div class="table-responsive">

                        <table class="table align-middle datatable dt-responsive table-check nowrap"
                               style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">

                            <thead>
                            <tr class="bg-transparent">
                                <th>Item Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($currents as $current)
                                @foreach($manufactures as $manufacture)
                                    @foreach($panelTypes as $panelType)
                                        <tr>
                                            <td>
                                                Current : <b>{{ $current->name }}</b> & Manufacturer :
                                                <b>{{ $manufacture->name }}</b> & ( Panel Type :
                                                <b>{{ $panelType->name }}</b>)
                                            </td>
                                            <td>
                                                
                                                    <a href="{{ route('master_datas.currents.create', ['currentId' => $current->id, 'manuId' => $manufacture->id, 'panelTypeId' => $panelType->id]) }}"
                                                       data-key="t-invoice-list" class="btn btn-sm btn-warning">
                                                        <div class="fas fa-edit"></div></a>
                                               
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
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
