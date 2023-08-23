@extends('layouts.master')

@section('title') @lang(' Panel Type') @endsection

@section('css')

    <!-- flatpickr css -->
    <link href="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Section 2 @endslot
        @slot('title') Panel Type Details @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-6">
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
                    <form action="{{ route('paneltypes.store') }}" method="POST">

                        @csrf

                        <div class="mb-4">
                            <label class="form-label" for="default-input">Panel Type Name</label>
                            <input class="form-control" type="text" name="name" id="default-input"
                                   placeholder="Enter Panel Type Name" required>
                        </div>

                        <div class="mb-2">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="is_fabrication_available"
                                       id="hasFab" value="1">
                                <label class="custom-control-label" for="hasFab">Has Fabrication</label>
                            </div>
                        </div>

                        <div class="mb-2">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="is_type_one_available"
                                       id="hasOne" value="1">
                                <label class="custom-control-label" for="hasOne">Type One Enabled</label>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="is_type_two_available"
                                       id="hasTwo" value="1">
                                <label class="custom-control-label" for="hasTwo">Type Two Enabled</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Panel Type</button>

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
