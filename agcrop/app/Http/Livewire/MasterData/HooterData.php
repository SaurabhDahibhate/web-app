<?php

namespace App\Http\Livewire\MasterData;

use App\Models\HooterMasterData;
use App\Models\Product;
use Livewire\Component;

class HooterData extends Component
{

    public $hooter_master_data = array(
        'hooter_product_id' => '',
        'hooter_quantity' => '',
        'hooter_control_mcb_product_id' => '',
        'hooter_control_mcb_quantity' => '',
        'hooter_control_cable_product_id' => '',
        'hooter_control_cable_quantity' => '',
        'hooter_control_lug_one_product_id' => '',
        'hooter_control_lug_one_quantity' => '',
        'hooter_control_lug_two_product_id' => '',
        'hooter_control_lug_two_quantity' => '',
    );
    public $products;

    public function mount()
    {

        $hooter_master_data = HooterMasterData::query()->first();

        if ($hooter_master_data) {
            $this->hooter_master_data['hooter_product_id'] = $hooter_master_data->hooter_product_id;
            $this->hooter_master_data['hooter_quantity'] = $hooter_master_data->hooter_quantity;
            $this->hooter_master_data['hooter_control_mcb_product_id'] = $hooter_master_data->hooter_control_mcb_product_id;
            $this->hooter_master_data['hooter_control_mcb_quantity'] = $hooter_master_data->hooter_control_mcb_quantity;
            $this->hooter_master_data['hooter_control_cable_product_id'] = $hooter_master_data->hooter_control_cable_product_id;
            $this->hooter_master_data['hooter_control_cable_quantity'] = $hooter_master_data->hooter_control_cable_quantity;
            $this->hooter_master_data['hooter_control_lug_one_product_id'] = $hooter_master_data->hooter_control_lug_one_product_id;
            $this->hooter_master_data['hooter_control_lug_one_quantity'] = $hooter_master_data->hooter_control_lug_one_quantity;
            $this->hooter_master_data['hooter_control_lug_two_product_id'] = $hooter_master_data->hooter_control_lug_two_product_id;
            $this->hooter_master_data['hooter_control_lug_two_quantity'] = $hooter_master_data->hooter_control_lug_two_quantity;
        }

        $this->products = Product::query()->get();

    }

    public function render()
    {
        return view('livewire.master-data.hooter-data');
    }

    //
    public function store()
    {

        $updatedHooterMasterData = HooterMasterData::query()->first();

        if (!$updatedHooterMasterData) {
            $updatedHooterMasterData = new HooterMasterData();
        }

        $updatedHooterMasterData->hooter_product_id = $this->hooter_master_data['hooter_product_id'];
        $updatedHooterMasterData->hooter_quantity = $this->hooter_master_data['hooter_quantity'];
        $updatedHooterMasterData->hooter_control_mcb_product_id = $this->hooter_master_data['hooter_control_mcb_product_id'];
        $updatedHooterMasterData->hooter_control_mcb_quantity = $this->hooter_master_data['hooter_control_mcb_quantity'];
        $updatedHooterMasterData->hooter_control_cable_product_id = $this->hooter_master_data['hooter_control_cable_product_id'];
        $updatedHooterMasterData->hooter_control_cable_quantity = $this->hooter_master_data['hooter_control_cable_quantity'];
        $updatedHooterMasterData->hooter_control_lug_one_product_id = $this->hooter_master_data['hooter_control_lug_one_product_id'];
        $updatedHooterMasterData->hooter_control_lug_one_quantity = $this->hooter_master_data['hooter_control_lug_one_quantity'];
        $updatedHooterMasterData->hooter_control_lug_two_product_id = $this->hooter_master_data['hooter_control_lug_two_product_id'];
        $updatedHooterMasterData->hooter_control_lug_two_quantity = $this->hooter_master_data['hooter_control_lug_two_quantity'];
        $updatedHooterMasterData->save();

        session()->flash('message', 'Hooter master data has been updated successfully.');
    }
}
