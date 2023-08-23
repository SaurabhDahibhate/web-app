<div>

    <div action="#" method="POST">

        @csrf

        <div class="row mt-4">

            <h5>Feeder Incomer</h5>

            {{-- feeder incomer --}}
            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Feeder Incomer Type One
                    </label>
                    <select name="category_id"
                            wire:model.lazy="master_data.feeder_incomer_one_product_id"
                            class="form-control form-select"
                    >
                        <option value="">Select Product</option>
                        @foreach ($products as $key => $product)
                            <option value="{{ $product->id }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Quantity
                    </label>
                    <input class="form-control" type="number"
                           wire:model.lazy="master_data.feeder_incomer_one_quantity"
                           name="quantity" id="default-input"
                           placeholder="Enter Feeder Type One Incomer Quantity">
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Feeder Incomer Type Two
                    </label>
                    <select name="category_id"
                            wire:model.lazy="master_data.feeder_incomer_two_product_id"
                            class="form-control form-select"
                    >
                        <option value="">Select Product</option>
                        @foreach ($products as $key => $product)
                            <option value="{{ $product->id }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Quantity
                    </label>
                    <input class="form-control" type="number"
                           wire:model.lazy="master_data.feeder_incomer_two_quantity"
                           name="quantity" id="default-input"
                           placeholder="Enter Feeder Incomer Type Two Quantity">
                </div>
            </div>

        </div>
        <div class="row mt-4">

            <h5>Sreaser & Fuse</h5>

            {{-- spreeaser & fuse --}}
            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Spreader & Fuse Type One
                    </label>
                    <select name="category_id"
                            wire:model.lazy="master_data.spreader_fuse_one_product_id"
                            class="form-control form-select"
                    >
                        <option value="">Select Product</option>
                        @foreach ($products as $key => $product)
                            <option value="{{ $product->id }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Quantity
                    </label>
                    <input class="form-control" type="number"
                           wire:model.lazy="master_data.spreader_fuse_one_quantity"
                           name="quantity" id="default-input"
                           placeholder="Enter Spreader & Fuse Quantity">
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Spreader & Fuse Type One
                    </label>
                    <select name="category_id"
                            wire:model.lazy="master_data.spreader_fuse_two_product_id"
                            class="form-control form-select"
                    >
                        <option value="">Select Product</option>
                        @foreach ($products as $key => $product)
                            <option value="{{ $product->id }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Quantity
                    </label>
                    <input class="form-control" type="number"
                           wire:model.lazy="master_data.spreader_fuse_two_quantity"
                           name="quantity" id="default-input"
                           placeholder="Enter Spreader & Fuse Quantity">
                </div>
            </div>

        </div>
        <div class="row mt-4">

            <h5>Entended Rotary Handle</h5>

            {{-- entended rotary handle --}}
            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Rotary Handle Type One
                    </label>
                    <select name="category_id"
                            wire:model.lazy="master_data.rotary_handle_one_product_id"
                            class="form-control form-select"
                    >
                        <option value="">Select Product</option>
                        @foreach ($products as $key => $product)
                            <option value="{{ $product->id }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Quantity
                    </label>
                    <input class="form-control" type="number"
                           wire:model.lazy="master_data.rotary_handle_one_quantity"
                           name="quantity" id="default-input"
                           placeholder="Enter Rotary Handle Quantity">
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Rotary Handle Type Two
                    </label>
                    <select name="category_id"
                            wire:model.lazy="master_data.rotary_handle_two_product_id"
                            class="form-control form-select"
                    >
                        <option value="">Select Product</option>
                        @foreach ($products as $key => $product)
                            <option value="{{ $product->id }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Quantity
                    </label>
                    <input class="form-control" type="number"
                           wire:model.lazy="master_data.rotary_handle_two_quantity"
                           name="quantity" id="default-input"
                           placeholder="Enter Rotary Handle Quantity">
                </div>
            </div>

        </div>
        <div class="row mt-4">

            <h5>Contractors</h5>

            {{-- contractor all 4 --}}
            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Main Contractor Type One
                    </label>
                    <select name="category_id"
                            wire:model.lazy="master_data.contractor_main_one_product_id"
                            class="form-control form-select"
                    >
                        <option value="">Select Product</option>
                        @foreach ($products as $key => $product)
                            <option value="{{ $product->id }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Quantity
                    </label>
                    <input class="form-control" type="number"
                           wire:model.lazy="master_data.contractor_main_one_quantity"
                           name="quantity" id="default-input"
                           placeholder="Enter Main Contractor Quantity">
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Main Contractor Type Two
                    </label>
                    <select name="category_id"
                            wire:model.lazy="master_data.contractor_main_two_product_id"
                            class="form-control form-select"
                    >
                        <option value="">Select Product</option>
                        @foreach ($products as $key => $product)
                            <option value="{{ $product->id }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Quantity
                    </label>
                    <input class="form-control" type="number"
                           wire:model.lazy="master_data.contractor_main_two_quantity"
                           name="quantity" id="default-input"
                           placeholder="Enter Main Contractor Quantity">
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Delta Contractor Type One
                    </label>
                    <select name="category_id"
                            wire:model.lazy="master_data.contractor_delta_one_product_id"
                            class="form-control form-select"
                    >
                        <option value="">Select Product</option>
                        @foreach ($products as $key => $product)
                            <option value="{{ $product->id }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Quantity
                    </label>
                    <input class="form-control" type="number"
                           wire:model.lazy="master_data.contractor_delta_one_quantity"
                           name="quantity" id="default-input"
                           placeholder="Enter Main Contractor Quantity">
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Delta Contractor Type Two
                    </label>
                    <select name="category_id"
                            wire:model.lazy="master_data.contractor_delta_two_product_id"
                            class="form-control form-select"
                    >
                        <option value="">Select Product</option>
                        @foreach ($products as $key => $product)
                            <option value="{{ $product->id }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Quantity
                    </label>
                    <input class="form-control" type="number"
                           wire:model.lazy="master_data.contractor_delta_two_quantity"
                           name="quantity" id="default-input"
                           placeholder="Enter Main Contractor Quantity">
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Star Contractor Type One
                    </label>
                    <select name="category_id"
                            wire:model.lazy="master_data.contractor_star_one_product_id"
                            class="form-control form-select"
                    >
                        <option value="">Select Product</option>
                        @foreach ($products as $key => $product)
                            <option value="{{ $product->id }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Quantity
                    </label>
                    <input class="form-control" type="number"
                           wire:model.lazy="master_data.contractor_star_one_quantity"
                           name="quantity" id="default-input"
                           placeholder="Enter Star Contractor Quantity">
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Star Contractor Type Two
                    </label>
                    <select name="category_id"
                            wire:model.lazy="master_data.contractor_star_two_product_id"
                            class="form-control form-select"
                    >
                        <option value="">Select Product</option>
                        @foreach ($products as $key => $product)
                            <option value="{{ $product->id }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Quantity
                    </label>
                    <input class="form-control" type="number"
                           wire:model.lazy="master_data.contractor_star_two_quantity"
                           name="quantity" id="default-input"
                           placeholder="Enter Star Contractor Quantity">
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        OLR Contractor Type One
                    </label>
                    <select name="category_id"
                            wire:model.lazy="master_data.contractor_olr_one_product_id"
                            class="form-control form-select"
                    >
                        <option value="">Select Product</option>
                        @foreach ($products as $key => $product)
                            <option value="{{ $product->id }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Quantity
                    </label>
                    <input class="form-control" type="number"
                           wire:model.lazy="master_data.contractor_olr_one_quantity"
                           name="quantity" id="default-input"
                           placeholder="Enter OLR Contractor Quantity">
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        OLR Contractor Type Two
                    </label>
                    <select name="category_id"
                            wire:model.lazy="master_data.contractor_olr_two_product_id"
                            class="form-control form-select"
                    >
                        <option value="">Select Product</option>
                        @foreach ($products as $key => $product)
                            <option value="{{ $product->id }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Quantity
                    </label>
                    <input class="form-control" type="number"
                           wire:model.lazy="master_data.contractor_olr_two_quantity"
                           name="quantity" id="default-input"
                           placeholder="Enter OLR Contractor Quantity">
                </div>
            </div>

        </div>
        <div class="row mt-4">

            <h5>Timer</h5>

            {{-- timer --}}
            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Timer
                    </label>
                    <select name="category_id"
                            wire:model.lazy="master_data.timer_product_id"
                            class="form-control form-select"
                    >
                        <option value="">Select Product</option>
                        @foreach ($products as $key => $product)
                            <option value="{{ $product->id }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Quantity
                    </label>
                    <input class="form-control" type="number"
                           wire:model.lazy="master_data.timer_quantity"
                           name="quantity" id="default-input"
                           placeholder="Enter Timer Quantity">
                </div>
            </div>

        </div>
        <div class="row mt-4">

            <h5>Control MCB</h5>

            {{-- control mcb --}}
            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Control MCB
                    </label>
                    <select name="category_id"
                            wire:model.lazy="master_data.control_mcb_product_id"
                            class="form-control form-select"
                    >
                        <option value="">Select Product</option>
                        @foreach ($products as $key => $product)
                            <option value="{{ $product->id }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Quantity
                    </label>
                    <input class="form-control" type="number"
                           wire:model.lazy="master_data.control_mcb_quantity"
                           name="quantity" id="default-input"
                           placeholder="Enter Control MCB Quantity">
                </div>
            </div>

        </div>
        <div class="row mt-4">
            <h5>Add On Block</h5>
            {{-- add on block all 4 --}}

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        2NO + 2NC
                    </label>
                    <select name="category_id"
                            wire:model.lazy="master_data.two_no_two_nc_product_id"
                            class="form-control form-select">
                        <option value="">Select Product</option>
                        @foreach ($products as $key => $product)
                            <option value="{{ $product->id }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Quantity
                    </label>
                    <input class="form-control" type="number"
                           wire:model.lazy="master_data.two_no__two_nc_quantity"
                           name="quantity" id="default-input"
                           placeholder="Enter 2NO + 2NC Quantity">
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        1NO + 1NC
                    </label>
                    <select name="category_id"
                            wire:model.lazy="master_data.one_no_one_nc_product_id"
                            class="form-control form-select">
                        <option value="">Select Product</option>
                        @foreach ($products as $key => $product)
                            <option value="{{ $product->id }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Quantity
                    </label>
                    <input class="form-control" type="number"
                           wire:model.lazy="master_data.one_no_one_nc_quantity"
                           name="quantity" id="default-input"
                           placeholder="Enter 1NO + 1NC Quantity">
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        1NC
                    </label>
                    <select name="category_id"
                            wire:model.lazy="master_data.one_nc_product_id"
                            class="form-control form-select">
                        <option value="">Select Product</option>
                        @foreach ($products as $key => $product)
                            <option value="{{ $product->id }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Quantity
                    </label>
                    <input class="form-control" type="number"
                           wire:model.lazy="master_data.one_nc_quantity"
                           name="quantity" id="default-input"
                           placeholder="Enter 1NC Quantity">
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        First Left
                    </label>
                    <select name="category_id"
                            wire:model.lazy="master_data.first_left_product_id"
                            class="form-control form-select">
                        <option value="">Select Product</option>
                        @foreach ($products as $key => $product)
                            <option value="{{ $product->id }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Quantity
                    </label>
                    <input class="form-control" type="number"
                           wire:model.lazy="master_data.first_left_quantity"
                           name="quantity" id="default-input"
                           placeholder="Enter First Left Quantity">
                </div>
            </div>

        </div>
        <div class="row mt-4">

            <h5>Indicator / Push Button / Switch</h5>

            {{-- indicator push button selector switch --}}
            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Indicator
                    </label>
                    <select name="category_id"
                            wire:model.lazy="master_data.indicator_product_id"
                            class="form-control form-select">
                        <option value="">Select Product</option>
                        @foreach ($products as $key => $product)
                            <option value="{{ $product->id }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Quantity
                    </label>
                    <input class="form-control" type="number"
                           wire:model.lazy="master_data.indicator_quantity"
                           name="quantity" id="default-input"
                           placeholder="Enter Indicator Quantity">
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Selector Switch
                    </label>
                    <select name="category_id"
                            wire:model.lazy="master_data.selector_switch_product_id"
                            class="form-control form-select">
                        <option value="">Select Product</option>
                        @foreach ($products as $key => $product)
                            <option value="{{ $product->id }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Quantity
                    </label>
                    <input class="form-control" type="number"
                           wire:model.lazy="master_data.selector_switch_quantity"
                           name="quantity" id="default-input"
                           placeholder="Enter Selector Switch Quantity">
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Push Button One
                    </label>
                    <select name="category_id"
                            wire:model.lazy="master_data.push_button_one_product_id"
                            class="form-control form-select">
                        <option value="">Select Product</option>
                        @foreach ($products as $key => $product)
                            <option value="{{ $product->id }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Quantity
                    </label>
                    <input class="form-control" type="number"
                           wire:model.lazy="master_data.push_button_one_quantity"
                           name="quantity" id="default-input"
                           placeholder="Enter Push Button One Quantity">
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Push Button Two
                    </label>
                    <select name="category_id"
                            wire:model.lazy="master_data.push_button_two_product_id"
                            class="form-control form-select">
                        <option value="">Select Product</option>
                        @foreach ($products as $key => $product)
                            <option value="{{ $product->id }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Quantity
                    </label>
                    <input class="form-control" type="number"
                           wire:model.lazy="master_data.push_button_two_quantity"
                           name="quantity" id="default-input"
                           placeholder="Enter Push Button Two Quantity">
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Push Button Three
                    </label>
                    <select name="category_id"
                            wire:model.lazy="master_data.push_button_three_product_id"
                            class="form-control form-select">
                        <option value="">Select Product</option>
                        @foreach ($products as $key => $product)
                            <option value="{{ $product->id }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Quantity
                    </label>
                    <input class="form-control" type="number"
                           wire:model.lazy="master_data.push_button_three_quantity"
                           name="quantity" id="default-input"
                           placeholder="Enter Push Button Three Quantity">
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Push Button Four
                    </label>
                    <select name="category_id"
                            wire:model.lazy="master_data.push_button_four_product_id"
                            class="form-control form-select">
                        <option value="">Select Product</option>
                        @foreach ($products as $key => $product)
                            <option value="{{ $product->id }}">
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Quantity
                    </label>
                    <input class="form-control" type="number"
                           wire:model.lazy="master_data.push_button_four_quantity"
                           name="quantity" id="default-input"
                           placeholder="Enter Push Button Four Quantity">
                </div>
            </div>

        </div>
        <div class="row mt-4">
            <h5>Feeder Ammeter</h5>
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

        <button type="submit" wire:click.prevent="store" class="mt-4 btn btn-primary">Save</button>

    </div>

</div>
