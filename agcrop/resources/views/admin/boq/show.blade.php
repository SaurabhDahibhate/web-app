@extends('layouts.master')

@section('title')
    @lang('translation.BOQ_List')
@endsection

@section('css')

    <!-- flatpickr css -->
    <link href="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>

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

                    <div class="invoice-title">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1" style="text-align:center;">
                                <div class="mb-4">
                                    <img src="assets/images/ag-logo-new.jpeg" alt=""
                                         style="width: 165px;height: 112px;">
                                    <p style="font-weight: bold;font-size: 14px;margin: 0px;">H.No.161/2,Pune Nashik
                                        Highway Opposite Shell Petrol Pump,
                                        Village-Kuruli, Tal-Khed, Dist-Pune, Pin -410501,
                                    </p>
                                    <p style="font-weight: bold;font-size: 14px;margin: 0px;">Tel: 020- 65115101, Email-
                                        agcorp.pune@gmail.com</p>
                                    <p style="font-weight: bold;font-size: 14px;margin: 0px;">Web:
                                        www.agcorporation.in</p>
                                    <div style="background:blue;color:white;">
                                        <ul>
                                            <li style="display: inline;margin-right: 15px;">
                                                <i class="fab fa-bandcamp" aria-hidden="true" style="color:white;"></i>
                                                Pump Suppliers
                                            </li>
                                            <li style="display: inline;margin-right: 15px;">
                                                <i class="fab fa-bandcamp" aria-hidden="true" style="color:white;"></i>
                                                Control Panel Manufacturer
                                            </li>
                                            <li style="display: inline;margin-right: 15px;">
                                                <i class="fab fa-bandcamp" aria-hidden="true" style="color:white;"></i>
                                                Electrical Contractor (Govt.)
                                            </li>
                                            <li style="display: inline;margin-right: 15px;">
                                                <i class="fab fa-bandcamp" aria-hidden="true" style="color:white;"></i>
                                                Energy Saving Projects
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <!-- <div class="flex-shrink-0">
                                <div class="mb-4">
                                    <h4 class="float-end font-size-16">Quotation # 12345</h4>
                                </div>
                            </div> -->
                        </div>
                        <h2 style="text-align:center;">BOQ For Electrical Control Panel</h2>
                        <div class="mb-4">
                            <h4 class="float-end font-size-16">BOQ # {{ $boqRequest->id }}</h4>
                        </div>
                        <h5 class="font-size-14 mb-2">Richard Saul</h5>
                        <p class="mb-1">1874 County Line Road City, FL 33566</p>
                        <p class="mb-1">Maharashtra</p>
                        <!-- <p class="mb-1"><i class="mdi mdi-email align-middle me-1"></i> abc@123.com</p> -->
                        <p class="mb-1"><i class="mdi mdi-phone align-middle me-1"></i> 012-345-6789</p>
                        <p class="mb-1">Project Name</p>
                        <p>Panel Cat No. </p>
                    </div>

                    <hr class="my-4">

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

                    <div>
                        <table class="table align-middle nowrap"
                               style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                            <thead>
                            <tr class="bg-transparent">
                                <th>SR NO</th>
                                <th>CAT NO</th>
                                <th>DESCRIPTION</th>
                                <th>MAKE</th>
                                <th>UNIT</th>
                                <th>CATEGORY</th>
                                <th>QTY</th>
                                <th>AMT</th>
                                <th>TOTAL</th>
                            </tr>
                            </thead>
                            <tbody>

                            @component('components.boq_pump_rows', ['title' => 'INCOMER', 'pump' => 'incomerPumpResult', 'data' => $boqRequest->calculated_data, 'hideZeroRow' => $hideZeroRow])
                            @endcomponent

                            @component('components.boq_pump_rows', ['title' => 'JOCKEY PUMP STARTER', 'pump' => 'jockeyPumpResult', 'data' => $boqRequest->calculated_data, 'hideZeroRow' => $hideZeroRow])
                            @endcomponent

                            @component('components.boq_pump_rows', ['title' => 'HYDRANT PUMP STARTER', 'pump' => 'hydrantPumpResult', 'data' => $boqRequest->calculated_data, 'hideZeroRow' => $hideZeroRow])
                            @endcomponent

                            @component('components.boq_pump_rows', ['title' => 'STANDBY PUMP STARTER', 'pump' => 'standByPumpResult', 'data' => $boqRequest->calculated_data, 'hideZeroRow' => $hideZeroRow])
                            @endcomponent

                            @component('components.boq_pump_rows', ['title' => 'SPRINKLER PUMP STARTER', 'pump' => 'sprinklerPumpResult', 'data' => $boqRequest->calculated_data, 'hideZeroRow' => $hideZeroRow])
                            @endcomponent

                            @component('components.boq_pump_rows', ['title' => 'ENGINE PUMP STARTER', 'pump' => 'enginePumpResult', 'data' => $boqRequest->calculated_data, 'hideZeroRow' => $hideZeroRow])
                            @endcomponent

                            @component('components.boq_pump_rows', ['title' => 'BOOSTER PUMP STARTER', 'pump' => 'boosterPumpResult', 'data' => $boqRequest->calculated_data, 'hideZeroRow' => $hideZeroRow])
                            @endcomponent

                            </tbody>
                        </table>
                    </div>

                    @if(Auth::user()->role == "admin")
                        <div class="mt-4">
                            <div class="float-end">

                                <form
                                    action="{{ route('boqs.sendEmail', [$boqRequest->id]) }}"
                                    method="post">
                                    @csrf

                                    <button type="submit"
                                            class="btn btn-primary w-md waves-effect waves-light mt-4">
                                        Send Email
                                    </button>
                                </form>

                                @if(!$boqRequest->is_approved)
                                    <form
                                        action="{{ route('boqs.approve', [$boqRequest->id]) }}"
                                        method="post">

                                        @csrf

                                        <button type="submit"
                                                class="btn btn-primary w-md waves-effect waves-light mt-4">Approve
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    @endif
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
