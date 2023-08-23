<div>

    {{--    wire:loading.attr="disabled" wire:loading="calculate" --}}
    <form>

        @csrf

        <div class="row">

            <h5>General</h5>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="default-input">Customer Name</label>
                    <input class="form-control" type="text" name="customer_name" id="default-input"
                           placeholder="Enter Customer Name" wire:model.lazy="customerName" required>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="default-input">Customer Address</label>
                    <input class="form-control" type="text" name="customer_address" id="default-input"
                           placeholder="Enter Customer Address" wire:model.lazy="customerAddress" required>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="default-input">Contact Person</label>
                    <input class="form-control" type="text" name="contact_person" id="default-input"
                           placeholder="Enter Contact Person" wire:model.lazy="customerPerson" required>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="default-input">Date</label>
                    <input class="form-control" type="date" name="date" id="default-input"
                           placeholder="Enter Date" wire:model.lazy="date" required>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="default-input">Delivery Date</label>
                    <input class="form-control" type="date" name="delivery_date" id="default-input"
                           placeholder="Enter Delivery Date" wire:model.lazy="deliveryDate">
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="default-input">Panel Sl No</label>
                    <input class="form-control" type="text" name="panel_sl_no" id="default-input"
                           placeholder="Enter Panel Sl No" wire:model.lazy="panelSlNo" required>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="default-input">Project Name</label>
                    <input class="form-control" type="text" name="project_name" id="default-input"
                           placeholder="Enter Project Name" wire:model.lazy="projectName" required>
                </div>
            </div>

            <div class="col-lg-3 mb-4">
                <div>
                    <label class="form-label" for="default-input">Credit Days</label>
                    <input class="form-control" type="number" name="credit_days" id="default-input"
                           placeholder="Enter Credit Days" wire:model.lazy="creditDays">
                </div>
            </div>

            <hr/>

        </div>

        <div class="row">

            <h5>Configuration</h5>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">Panel Location</label>
                    <select name="panel_location" class="form-control form-select"
                            style="width:250px" wire:model.lazy="panelLocation" required>
                        <option value="">Select Panel Location</option>
                        <option value="INDOOR-IP54">INDOOR-IP54</option>
                        <option value="OUT DOOR-IP55">OUT DOOR-IP55</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">Panel Color</label>
                    <select name="panel_color" class="form-control form-select"
                            style="width:250px" wire:model.lazy="panelColor">
                        <option value="">Select Panel Color</option>
                        <option value="FIRE RED">FIRE RED</option>
                        <option value="RAL 7032">RAL 7032</option>
                        <option value="RAL 7035">RAL 7035</option>
                        <option value="OTHER">OTHER</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">Bus Bar</label>
                    <select name="busbar" class="form-control form-select"
                            style="width:250px" wire:model.lazy="busbar">
                        <option value="">Select Bus Bar</option>
                        <option value="ALLUMINIUM">ALLUMINIUM</option>
                        <option value="COPPER">COPPER</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">Cable Entry</label>
                    <select name="cable_entry" class="form-control form-select"
                            style="width:250px" wire:model.lazy="cableEntry">
                        <option value="">Select Cable Entry</option>
                        <option value="BOTTOM">BOTTOM</option>
                        <option value="BOTH WAY">BOTH WAY</option>
                        <option value="TOP">TOP</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">Feeder Ammeter</label>
                    <select name="feeder_ammeter" class="form-control form-select"
                            style="width:250px" wire:model.lazy="isFeederAmmeter">
                        <option value="">Select Feeder Ammeter</option>
                        <option value="1">YES</option>
                        <option value="0">NO</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">Cable Maker</label>
                    <select name="cable_maker" class="form-control form-select"
                            style="width:250px" wire:model.lazy="cableMaker">
                        <option value="">Select Cable Maker</option>
                        @foreach($cableMakers as $cableMaker)
                            <option value="{{$cableMaker->id}}">{{$cableMaker->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">Access</label>
                    <select name="access" class="form-control form-select"
                            style="width:250px" wire:model.lazy="access">
                        <option value="">Select Access</option>
                        <option value="ONLY FRONT">ONLY FRONT</option>
                        <option value="FRONT & BACK">FRONT & BACK</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">Mounting</label>
                    <select name="mounting" class="form-control form-select"
                            style="width:250px" wire:model.lazy="mounting">
                        <option value="">Select Mounting</option>
                        <option value="STAND">STAND</option>
                        <option value="STREACH">STREACH</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-3 mb-4">
                <div>
                    <label class="form-label" for="validationCustom05">Panel Type</label>
                    <select name="panel_type_id" class="form-control form-select"
                            style="width:250px" wire:model="panelTypeId" required>
                        <option value="">Select Panel Type</option>
                        @foreach($panelTypes as $panel_type)
                            <option value="{{ $panel_type->id }}">{{$panel_type->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            @if($panelType)

                @if($panelType->is_fabrication_available)
                    <div class="col-lg-3">
                        <div>
                            <label class="form-label" for="validationCustom05">Fabrication</label>
                            <select name="fabrication" class="form-control form-select"
                                    style="width:250px" wire:model.lazy="fabrication">
                                <option value="">Select Fabrication</option>
                                <option value="DOMESTIC">DOMESTIC</option>
                                <option value="INDUSTRIAL">INDUSTRIAL</option>
                            </select>
                        </div>
                    </div>
                @endif

                <div class="col-lg-3 mb-4">
                    <div>
                        <label class="form-label" for="validationCustom05">Type</label>
                        <select name="type" class="form-control form-select"
                                style="width:250px" wire:model.lazy="type" required>
                            <option value="">Select Type</option>
                            @if($panelType->is_type_one_available)
                                <option value="1">Type One</option>
                            @endif
                            @if($panelType->is_type_two_available)
                                <option value="2">Type Two</option>
                            @endif
                        </select>
                    </div>
                </div>

            @endif

            <hr/>

        </div>

        <div class="row">

            <h5>Pump Catlog Selection</h5>

            <div class="row">

                <div class="col-lg-2 align-self-center">
                    <h6>Jockey</h6>
                </div>

                <div class="col-lg-3">
                    <div>
                        <label class="form-label" for="validationCustom05">HP</label>
                        <select name="fabrication" class="form-control form-select"
                                style="width:250px" wire:model.lazy="jockeyHp">
                            <option value="0">Select HP</option>
                            @foreach($hps as $hp)
                                <option value="{{$hp->id}}">{{$hp->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="mb-4">
                        <label class="form-label" for="default-input">No of Pump</label>
                        <input class="form-control" type="number" name="no_of_pump" id="default-input"
                               placeholder="Enter No of Pump" wire:model.lazy="jockeyNoOfPumps">
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-2 align-self-center">
                    <h6>Hydrant</h6>
                </div>

                <div class="col-lg-3">
                    <div>
                        <select name="fabrication" class="form-control form-select"
                                style="width:250px" wire:model.lazy="hydrantHp">
                            <option value="0">Select HP</option>
                            @foreach($hps as $hp)
                                <option value="{{$hp->id}}">{{$hp->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="mb-4">
                        <input class="form-control" type="number" name="no_of_pump" id="default-input"
                               placeholder="Enter No of Pump" wire:model.lazy="hydrantNoOfPumps">
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-2 align-self-center">
                    <h6>StandBy</h6>
                </div>

                <div class="col-lg-3">
                    <div>
                        <select name="fabrication" class="form-control form-select"
                                style="width:250px" wire:model.lazy="standByHp">
                            <option value="0">Select HP</option>
                            @foreach($hps as $hp)
                                <option value="{{$hp->id}}">{{$hp->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="mb-4">
                        <input class="form-control" type="number" name="no_of_pump" id="default-input"
                               placeholder="Enter No of Pump" wire:model.lazy="standByNoOfPumps">
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-2 align-self-center">
                    <h6>Sprinkler</h6>
                </div>

                <div class="col-lg-3">
                    <div>
                        <select name="fabrication" class="form-control form-select"
                                style="width:250px" wire:model.lazy="sprinklerHp">
                            <option value="0">Select HP</option>
                            @foreach($hps as $hp)
                                <option value="{{$hp->id}}">{{$hp->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="mb-4">
                        <input class="form-control" type="number" name="no_of_pump" id="default-input"
                               placeholder="Enter No of Pump" wire:model.lazy="sprinklerNoOfPumps">
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-2 align-self-center">
                    <h6>Engine</h6>
                </div>

                <div class="col-lg-3">
                    <div>
                        <select name="fabrication" class="form-control form-select"
                                style="width:250px" wire:model.lazy="engineHp">
                            <option value="0">Select HP</option>
                            @foreach($hps as $hp)
                                <option value="{{$hp->id}}">{{$hp->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="mb-4">
                        <input class="form-control" type="number" name="no_of_pump" id="default-input"
                               placeholder="Enter No of Pump" wire:model.lazy="engineNoOfPumps">
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-2 align-self-center">
                    <h6>Booster</h6>
                </div>

                <div class="col-lg-3">
                    <div>
                        <select name="fabrication" class="form-control form-select"
                                style="width:250px" wire:model.lazy="boosterHp">
                            <option value="0">Select HP</option>
                            @foreach($hps as $hp)
                                <option value="{{$hp->id}}">{{$hp->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="mb-4">
                        <input class="form-control" type="number" name="no_of_pump" id="default-input"
                               placeholder="Enter No of Pump" wire:model.lazy="boosterNoOfPumps">
                    </div>
                </div>

            </div>

            <hr/>

        </div>

        <div class="row">

            <h5>Pump Incomer Selection</h5>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">Indication</label>
                    <select name="indication" class="form-control form-select"
                            style="width:250px" wire:model.lazy="indication">
                        <option value="">Select Indication</option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">Volt Meter</label>
                    <select name="volt_meter" class="form-control form-select"
                            style="width:250px" wire:model.lazy="voltMeter">
                        <option value="">Select Volt Meter</option>
                        <option value="ANALOG 96x96">ANALOG 96x96</option>
                        <option value="ANALOG 72x72">ANALOG 72x72</option>
                        <option value="DIGITAL">DIGITAL</option>
                        <option value="NA">NA</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">Ammeter</label>
                    <select name="ammeter" class="form-control form-select"
                            style="width:250px" wire:model.lazy="ammeter">
                        <option value="">Select Ammeter</option>
                        <option value="ANALOG 96x96">ANALOG 96x96</option>
                        <option value="ANALOG 72x72">ANALOG 72x72</option>
                        <option value="DIGITAL">DIGITAL</option>
                        <option value="NA">NA</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">SPP</label>
                    <select name="spp" class="form-control form-select"
                            style="width:250px" wire:model.lazy="isSpp">
                        <option value="">Select SPP</option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">Hooter</label>
                    <select name="spp" class="form-control form-select"
                            style="width:250px" wire:model.lazy="isHooter">
                        <option value="">Select Hooter</option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
            </div>

            @if($this->isFeederAmmeter)
                <div class="col-lg-3">
                    <div>
                        <label class="form-label" for="validationCustom05">Feeder Ammeter</label>
                        <select name="feeder_ammeter" class="form-control form-select"
                                style="width:250px" wire:model="feederAmmeter">
                            <option value="">Select Feeder Ammeter</option>
                            <option value="ANALOG 96x96">ANALOG 96x96</option>
                            <option value="ANALOG 72x72">ANALOG 72x72</option>
                            <option value="DIGITAL">DIGITAL</option>
                            <option value="NA">NA</option>
                        </select>
                    </div>
                </div>
            @endif

            <div class="col-lg-3 mb-4">
                <div>
                    <label class="form-label" for="validationCustom05">Switch Makers</label>
                    <select name="switch_maker" class="form-control form-select"
                            style="width:250px" wire:model.lazy="switchMaker" required>
                        <option value="">Select Switch Makers</option>
                        @foreach($switchMakers as $switch_maker)
                            <option value="{{$switch_maker->id}}">{{$switch_maker->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <hr/>

        </div>

        <div class="row">

            <h5>Special Instructions</h5>

            <div class="col-lg-3 mb-4">
                <div>
                    <label class="form-label" for="default-input">Remark</label>
                    <input class="form-control" type="text" name="remark" id="default-input"
                           placeholder="Enter Remark" wire:model.lazy="remark">
                </div>
            </div>

            <hr/>

        </div>

        <div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>

        <div>
            @if (session()->has('error'))
                <div class="alert alert-warning">
                    {{ session('error') }}
                </div>
            @endif
        </div>

        @if($isPriceCalculated)
            <button type="submit" wire:click.prevent="submitRequest" class="mt-4 btn btn-primary">
                Submit BOQ Request ({{ $totalPrice }} INR)
            </button>
        @else
            <button type="submit" wire:click.prevent="calculate" class="mt-4 btn btn-primary">Calculate</button>
        @endif

    </form>

</div>
