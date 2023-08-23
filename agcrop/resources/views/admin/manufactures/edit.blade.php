@extends('layouts.master')

@section('title') @lang('translation.hp_products') @endsection

@section('css')

    <!-- flatpickr css -->
    <link href="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Product Master @endslot
        @slot('title') Units  edit  @endslot
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

                    <form action="{{ route('manufactures.update', $manufacture->id) }}" method="POST">

                        @method('PATCH')
                        @csrf

                        <div class="mb-4">
                            <label class="form-label" for="default-input">Manufacture Name</label>
                            <input class="form-control" type="text" value="{{ $manufacture->name }}"
                                   name="name" id="default-input"
                                   placeholder="Enter Manufacture Name" required>
                        </div>

                        <div class="col-lg-12">
                            <div class="mb-2">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom05">Category</label>
                                    <select name="category_id" class="form-control form-select" style="width:250px">
                                        <option value="">Select Category</option>
                                        @foreach ($category as $key => $value)
                                            <option value="{{ $value->id }}"
                                                {{ $manufacture->category_id == $value->id ? 'selected' : '' }}>{{ $value->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a Category.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Edit manufacture</button>

                    </form>


                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">

                <div class="table-responsive">

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
