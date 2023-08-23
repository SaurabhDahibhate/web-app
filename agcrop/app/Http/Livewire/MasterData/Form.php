<?php

namespace App\Http\Livewire\MasterData;

use App\Models\CurrentMasterData;
use App\Models\MasterData;
use Livewire\Component;

class Form extends Component
{

    public $myType;
    public $hp;
    public $current;
    public $manufacture;
    public $panelType;
    public $products;
    public $master_data;

    public function mount()
    {

        // master data
        $tempMasterData = $this->getMasterData();

        // default master data values
        $this->master_data = [
            'feeder_incomer_one_product_id' => $tempMasterData ? $tempMasterData->feeder_incomer_one_product_id : '',
            'feeder_incomer_one_quantity' => $tempMasterData ? $tempMasterData->feeder_incomer_one_quantity : '',
            'feeder_incomer_two_product_id' => $tempMasterData ? $tempMasterData->feeder_incomer_two_product_id : '',
            'feeder_incomer_two_quantity' => $tempMasterData ? $tempMasterData->feeder_incomer_two_quantity : '',
            'spreader_fuse_product_one_id' => $tempMasterData ? $tempMasterData->spreader_fuse_product_one_id : '',
            'spreader_fuse_one_quantity' => $tempMasterData ? $tempMasterData->spreader_fuse_one_quantity : '',
            'spreader_fuse_two_product_id' => $tempMasterData ? $tempMasterData->spreader_fuse_two_product_id : '',
            'spreader_fuse_two_quantity' => $tempMasterData ? $tempMasterData->spreader_fuse_two_quantity : '',
            'rotary_handle_one_product_id' => $tempMasterData ? $tempMasterData->rotary_handle_one_product_id : '',
            'rotary_handle_one_quantity' => $tempMasterData ? $tempMasterData->rotary_handle_one_quantity : '',
            'rotary_handle_two_product_id' => $tempMasterData ? $tempMasterData->rotary_handle_two_product_id : '',
            'rotary_handle_two_quantity' => $tempMasterData ? $tempMasterData->rotary_handle_two_quantity : '',
            'timer_product_id' => $tempMasterData ? $tempMasterData->timer_product_id : '',
            'timer_quantity' => $tempMasterData ? $tempMasterData->timer_quantity : '',
            'control_mcb_product_id' => $tempMasterData ? $tempMasterData->control_mcb_product_id : '',
            'control_mcb_quantity' => $tempMasterData ? $tempMasterData->control_mcb_quantity : '',
            'contractor_main_one_product_id' => $tempMasterData ? $tempMasterData->contractor_main_one_product_id : '',
            'contractor_main_one_quantity' => $tempMasterData ? $tempMasterData->contractor_main_one_quantity : '',
            'contractor_delta_one_product_id' => $tempMasterData ? $tempMasterData->contractor_delta_one_product_id : '',
            'contractor_delta_one_quantity' => $tempMasterData ? $tempMasterData->contractor_delta_one_quantity : '',
            'contractor_star_one_product_id' => $tempMasterData ? $tempMasterData->contractor_star_one_product_id : '',
            'contractor_star_one_quantity' => $tempMasterData ? $tempMasterData->contractor_star_one_quantity : '',
            'contractor_olr_one_product_id' => $tempMasterData ? $tempMasterData->contractor_olr_one_product_id : '',
            'contractor_olr_one_quantity' => $tempMasterData ? $tempMasterData->contractor_olr_one_quantity : '',
            'contractor_main_two_product_id' => $tempMasterData ? $tempMasterData->contractor_main_two_product_id : '',
            'contractor_main_two_quantity' => $tempMasterData ? $tempMasterData->contractor_main_two_quantity : '',
            'contractor_delta_two_product_id' => $tempMasterData ? $tempMasterData->contractor_delta_two_product_id : '',
            'contractor_delta_two_quantity' => $tempMasterData ? $tempMasterData->contractor_delta_two_quantity : '',
            'contractor_star_two_product_id' => $tempMasterData ? $tempMasterData->contractor_star_two_product_id : '',
            'contractor_star_two_quantity' => $tempMasterData ? $tempMasterData->contractor_star_two_quantity : '',
            'contractor_olr_two_product_id' => $tempMasterData ? $tempMasterData->contractor_olr_two_product_id : '',
            'contractor_olr_two_quantity' => $tempMasterData ? $tempMasterData->contractor_olr_two_quantity : '',
            'two_no_two_nc_product_id' => $tempMasterData ? $tempMasterData->two_no_two_nc_product_id : '',
            'two_no__two_nc_quantity' => $tempMasterData ? $tempMasterData->two_no__two_nc_quantity : '',
            'one_no_one_nc_product_id' => $tempMasterData ? $tempMasterData->one_no_one_nc_product_id : '',
            'one_no_one_nc_quantity' => $tempMasterData ? $tempMasterData->one_no_one_nc_quantity : '',
            'one_nc_product_id' => $tempMasterData ? $tempMasterData->one_nc_product_id : '',
            'one_nc_quantity' => $tempMasterData ? $tempMasterData->one_nc_quantity : '',
            'first_left_product_id' => $tempMasterData ? $tempMasterData->first_left_product_id : '',
            'first_left_quantity' => $tempMasterData ? $tempMasterData->first_left_quantity : '',
            'indicator_product_id' => $tempMasterData ? $tempMasterData->indicator_product_id : '',
            'indicator_quantity' => $tempMasterData ? $tempMasterData->indicator_quantity : '',
            'selector_switch_product_id' => $tempMasterData ? $tempMasterData->selector_switch_product_id : '',
            'selector_switch_quantity' => $tempMasterData ? $tempMasterData->selector_switch_quantity : '',
            'push_button_one_product_id' => $tempMasterData ? $tempMasterData->push_button_one_product_id : '',
            'push_button_one_quantity' => $tempMasterData ? $tempMasterData->push_button_one_quantity : '',
            'push_button_two_product_id' => $tempMasterData ? $tempMasterData->push_button_two_product_id : '',
            'push_button_two_quantity' => $tempMasterData ? $tempMasterData->push_button_two_quantity : '',
            'push_button_three_product_id' => $tempMasterData ? $tempMasterData->push_button_three_product_id : '',
            'push_button_three_quantity' => $tempMasterData ? $tempMasterData->push_button_three_quantity : '',
            'push_button_four_product_id' => $tempMasterData ? $tempMasterData->push_button_four_product_id : '',
            'push_button_four_quantity' => $tempMasterData ? $tempMasterData->push_button_four_quantity : '',
        ];
    }

    public function render()
    {
        return view('livewire.master-data.form');
    }

    // store
    public function store()
    {


        // master data
        $singleMasterData = $this->getMasterData();

        // set master data values
        $singleMasterData->feeder_incomer_one_product_id = $this->master_data['feeder_incomer_one_product_id'];
        $singleMasterData->feeder_incomer_one_quantity = $this->master_data['feeder_incomer_one_quantity'];
        $singleMasterData->feeder_incomer_two_product_id = $this->master_data['feeder_incomer_two_product_id'];
        $singleMasterData->feeder_incomer_two_quantity = $this->master_data['feeder_incomer_two_quantity'];
        $singleMasterData->spreader_fuse_product_one_id = $this->master_data['spreader_fuse_product_one_id'];
        $singleMasterData->spreader_fuse_one_quantity = $this->master_data['spreader_fuse_one_quantity'];
        $singleMasterData->spreader_fuse_two_product_id = $this->master_data['spreader_fuse_two_product_id'];
        $singleMasterData->spreader_fuse_two_quantity = $this->master_data['spreader_fuse_two_quantity'];
        $singleMasterData->rotary_handle_one_product_id = $this->master_data['rotary_handle_one_product_id'];
        $singleMasterData->rotary_handle_one_quantity = $this->master_data['rotary_handle_one_quantity'];
        $singleMasterData->rotary_handle_two_product_id = $this->master_data['rotary_handle_two_product_id'];
        $singleMasterData->rotary_handle_two_quantity = $this->master_data['rotary_handle_two_quantity'];
        $singleMasterData->timer_product_id = $this->master_data['timer_product_id'];
        $singleMasterData->timer_quantity = $this->master_data['timer_quantity'];
        $singleMasterData->control_mcb_product_id = $this->master_data['control_mcb_product_id'];
        $singleMasterData->control_mcb_quantity = $this->master_data['control_mcb_quantity'];
        $singleMasterData->contractor_main_one_product_id = $this->master_data['contractor_main_one_product_id'];
        $singleMasterData->contractor_main_one_quantity = $this->master_data['contractor_main_one_quantity'];
        $singleMasterData->contractor_delta_one_product_id = $this->master_data['contractor_delta_one_product_id'];
        $singleMasterData->contractor_delta_one_quantity = $this->master_data['contractor_delta_one_quantity'];
        $singleMasterData->contractor_star_one_product_id = $this->master_data['contractor_star_one_product_id'];
        $singleMasterData->contractor_star_one_quantity = $this->master_data['contractor_star_one_quantity'];
        $singleMasterData->contractor_olr_one_product_id = $this->master_data['contractor_olr_one_product_id'];
        $singleMasterData->contractor_olr_one_quantity = $this->master_data['contractor_olr_one_quantity'];
        $singleMasterData->contractor_main_two_product_id = $this->master_data['contractor_main_two_product_id'];
        $singleMasterData->contractor_main_two_quantity = $this->master_data['contractor_main_two_quantity'];
        $singleMasterData->contractor_delta_two_product_id = $this->master_data['contractor_delta_two_product_id'];
        $singleMasterData->contractor_delta_two_quantity = $this->master_data['contractor_delta_two_quantity'];
        $singleMasterData->contractor_star_two_product_id = $this->master_data['contractor_star_two_product_id'];
        $singleMasterData->contractor_star_two_quantity = $this->master_data['contractor_star_two_quantity'];
        $singleMasterData->contractor_olr_two_product_id = $this->master_data['contractor_olr_two_product_id'];
        $singleMasterData->contractor_olr_two_quantity = $this->master_data['contractor_olr_two_quantity'];
        $singleMasterData->two_no_two_nc_product_id = $this->master_data['two_no_two_nc_product_id'];
        $singleMasterData->two_no__two_nc_quantity = $this->master_data['two_no__two_nc_quantity'];
        $singleMasterData->one_no_one_nc_product_id = $this->master_data['one_no_one_nc_product_id'];
        $singleMasterData->one_no_one_nc_quantity = $this->master_data['one_no_one_nc_quantity'];
        $singleMasterData->one_nc_product_id = $this->master_data['one_nc_product_id'];
        $singleMasterData->one_nc_quantity = $this->master_data['one_nc_quantity'];
        $singleMasterData->first_left_product_id = $this->master_data['first_left_product_id'];
        $singleMasterData->first_left_quantity = $this->master_data['first_left_quantity'];
        $singleMasterData->indicator_product_id = $this->master_data['indicator_product_id'];
        $singleMasterData->indicator_quantity = $this->master_data['indicator_quantity'];
        $singleMasterData->selector_switch_product_id = $this->master_data['selector_switch_product_id'];
        $singleMasterData->selector_switch_quantity = $this->master_data['selector_switch_quantity'];
        $singleMasterData->push_button_one_product_id = $this->master_data['push_button_one_product_id'];
        $singleMasterData->push_button_one_quantity = $this->master_data['push_button_one_quantity'];
        $singleMasterData->push_button_two_product_id = $this->master_data['push_button_two_product_id'];
        $singleMasterData->push_button_two_quantity = $this->master_data['push_button_two_quantity'];
        $singleMasterData->push_button_three_product_id = $this->master_data['push_button_three_product_id'];
        $singleMasterData->push_button_three_quantity = $this->master_data['push_button_three_quantity'];
        $singleMasterData->push_button_four_product_id = $this->master_data['push_button_four_product_id'];
        $singleMasterData->push_button_four_quantity = $this->master_data['push_button_four_quantity'];

        $singleMasterData->save();

        session()->flash('message', 'Master data has been updated successfully.');

    }

    //
    public function getMasterData()
    {
        if ($this->myType == 'hp') {
            $tempMasterData = MasterData::where('hp_id', $this->hp->id)
                ->where('manufacture_id', $this->manufacture->id)
                ->where('panel_type_id', $this->panelType->id)
                ->first();
            // check if master data exists
            if (!$tempMasterData) {
                $tempMasterData = new MasterData();
                $tempMasterData->hp_id = $this->hp->id;
                $tempMasterData->manufacture_id = $this->manufacture->id;
                $tempMasterData->panel_type_id = $this->panelType->id;
            }
        } else {
            $tempMasterData = CurrentMasterData::where('current_id', $this->current->id)
                ->where('manufacture_id', $this->manufacture->id)
                ->where('panel_type_id', $this->panelType->id)
                ->first();
            // check if master data exists
            if (!$tempMasterData) {
                $tempMasterData = new CurrentMasterData();
                $tempMasterData->current_id = $this->current->id;
                $tempMasterData->manufacture_id = $this->manufacture->id;
                $tempMasterData->panel_type_id = $this->panelType->id;
            }
        }

        return $tempMasterData;
    }

}
