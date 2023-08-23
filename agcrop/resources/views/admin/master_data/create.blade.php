@extends('layouts.master')

@section('title') @lang('Create Master Data') @endsection

@section('css')

    <!-- flatpickr css -->
    <link href="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Master Data @endslot
        @slot('title') Create Master Data @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                        @php
                            Session::forget('success');
                        @endphp
                    </div>
                @endif
                <div class="card-body">

                    <div class="accordion" id="accordionExample">
                        <h4><b>HP :</b> {{ $hp->name }} - <b>Manufacturer :</b> {{ $manufacture->name }} (<b>Panel Type : {{ $panelType->name }}</b>)</h4>
                        <livewire:master-data.form :myType="$type" :hp="$hp"
                                                   :panelType="$panelType"
                                                   :manufacture="$manufacture"
                                                   :products="$products"/>

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
