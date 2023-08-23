<div>

    <div action="#" method="POST">

        @csrf

        <div class="row mt-4">

            <h5>Hooter</h5>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Hooter
                    </label>
                    <select name="category_id" wire:model.lazy="hooter_master_data.hooter_product_id" class="form-control form-select">
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
                    <input class="form-control" type="number" wire:model.lazy="hooter_master_data.hooter_quantity" name="quantity" id="default-input" placeholder="Enter Hooter Quantity">
                </div>
            </div>

            <h5>Control MCB</h5>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Hooter Control MCB
                    </label>
                    <select name="category_id" wire:model.lazy="hooter_master_data.hooter_control_mcb_product_id" class="form-control form-select">
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
                    <input class="form-control" type="number" wire:model.lazy="hooter_master_data.hooter_control_mcb_quantity" name="quantity" id="default-input" placeholder="Enter Control MCB Quantity">
                </div>
            </div>

            <h5>Control Cable</h5>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Hooter Control Cable
                    </label>
                    <select name="category_id" wire:model.lazy="hooter_master_data.hooter_control_cable_product_id" class="form-control form-select">
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
                    <input class="form-control" type="number" wire:model.lazy="hooter_master_data.hooter_control_cable_quantity" name="quantity" id="default-input" placeholder="Enter Control Cable Quantity">
                </div>
            </div>

            <h5>Control Lug</h5>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Hooter Control Lug One
                    </label>
                    <select name="category_id" wire:model.lazy="hooter_master_data.hooter_control_lug_one_product_id" class="form-control form-select">
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
                    <input class="form-control" type="number" wire:model.lazy="hooter_master_data.hooter_control_lug_one_quantity" name="quantity" id="default-input" placeholder="Enter Control Lug One Quantity">
                </div>
            </div>

            <div class="col-lg-3">
                <div>
                    <label class="form-label" for="validationCustom05">
                        Hooter Control Lug Two
                    </label>
                    <select name="category_id" wire:model.lazy="hooter_master_data.hooter_control_lug_two_product_id" class="form-control form-select">
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
                    <input class="form-control" type="number" wire:model.lazy="hooter_master_data.hooter_control_lug_two_quantity" name="quantity" id="default-input" placeholder="Enter Control Lug Two Quantity">
                </div>
            </div>

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