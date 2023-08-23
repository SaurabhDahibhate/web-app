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
        @slot('title') Manufacturing List @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-6">
            <div class="card">

                <div class="card-body">
                    <form action="{{ route('manufactures.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label class="form-label" for="default-input">Manufacturing Name </label>
                            <input class="form-control" type="text" name="name" id="default-input"
                                   placeholder="Enter Manufacturing Name">
                        </div>

                        <div class="col-lg-12">
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

                        <button type="submit" class="btn btn-info"> Add Manufacture</button>

                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table align-middle datatable dt-responsive table-check nowrap"
                               style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                            <thead>
                            <tr class="bg-transparent">
                               
                                <th style="width: 80px;"> ID</th>
                                <th>Manufacturing Name</th>
                                <th style="width: 90px;">Action</th>
                            </tr>
                            </thead> <tbody>
                            @foreach($manufacture as $manufactures)

                               

                                <tr>
                                   

                                    <td>{{$loop->iteration}}</td>

                                    <td>
                                        {{ $manufactures->name }}
                                    </td>

                                    <td>
                                        
                                                <form action="{{ route('manufactures.destroy',$manufactures->id) }}"
                                                      method="POST">

                                                    <a class="btn btn-warning btn-sm"
                                                       href="{{ route('manufactures.edit',$manufactures->id) }}"><i class="fas fa-edit"></i></a>

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
