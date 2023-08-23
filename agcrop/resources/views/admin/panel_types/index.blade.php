@extends('layouts.master')

@section('title') @lang('Panel Type') @endsection

@section('css')

    <!-- flatpickr css -->
    <link href="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Section 2 @endslot
        @slot('title') Panel Type List @endslot
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
                                        <a href="{{ route('paneltypes.create') }}" data-key="t-invoice-list">
                                            <i class="bx bx-plus me-1"></i> Add Panel Type</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="table-responsive">
                        <table class="table align-middle datatable dt-responsive table-check nowrap"
                               style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                            <thead>
                            <tr class="bg-transparent">
                               
                                <th style="width: 120px;">ID</th>
                                <th>Name</th>
                                <th>Fabrication</th>
                                <th>Type One</th>
                                <th>Type Two</th>
                                <th style="width: 90px;">Action</th>
                            </tr>
                            </thead>
                            @foreach($paneltypes as $paneltype)
                                <tbody>

                               

                                    <td>{{$loop->iteration}}</td>
                                    <td>{{ $paneltype->name }}</td>
                                    <td>
                                        @if($paneltype->is_fabrication_available)
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </td>
                                    <td>
                                        @if($paneltype->is_type_one_available)
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </td>
                                    <td>
                                        @if($paneltype->is_type_two_available)
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </td>
                                    <td>
                                        <div class="dropdown">

                                            <form action="{{ route('paneltypes.destroy',$paneltype->id) }}"
                                                  method="POST">

                                                <a class="btn btn-info btn-sm"
                                                   href="{{ route('paneltypes.edit',$paneltype->id) }}"><i class="fas fa-edit"></i></a>

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>

                                            </form>
                                            <!-- </ul> -->
                                        </div>
                                    </td>

                                </tr>


                                </tbody>
                            @endforeach
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
