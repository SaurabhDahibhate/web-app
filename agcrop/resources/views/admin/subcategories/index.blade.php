@extends('layouts.master')

@section('title') @lang('translation.hp_products') @endsection

@section('css')

<!-- flatpickr css -->
<link href="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css">

<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Product Master @endslot
@slot('title') SubCategory List @endslot
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
                <!-- <form> -->
                <form action="{{ route('subcategories.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="form-label" for="default-input">SubCategory Name </label>
                        <input class="form-control" name="name" type="text" id="default-input" placeholder="Enter SubCategory Name">
                    </div>

                    <button type="submit" class="btn btn-info"> Add SubCategory</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table align-middle datatable dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                        <thead>
                            <tr class="bg-transparent">

                                <th style="width: 80px;"> ID</th>
                                <th>Sub Category</th>
                                <th style="width: 90px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($subcategory as $sub_categories)



                            <tr>


                                <!-- <td><a href="javascript: void(0);" class="text-dark fw-medium">#15</a> </td> -->
                                <td>{{$loop->iteration}}</td>

                                <td>
                                    {{ $sub_categories->name }}

                                </td>

                                <td>




                                    <form action="{{ route('subcategories.destroy',$sub_categories->id) }}" method="POST">

                                        <a class="btn btn-warning btn-sm " href="{{ route('subcategories.edit',$sub_categories->id) }}"><i class="fas fa-edit"></i></a>

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