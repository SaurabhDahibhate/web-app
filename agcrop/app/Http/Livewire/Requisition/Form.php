<?php

namespace App\Http\Livewire\Requisition;

use App\Models\BoqRequest;
use App\Models\Current;
use App\Models\CurrentMasterData;
use App\Models\MasterData;
use App\Services\CalculationService;
use Carbon\Carbon;
use Livewire\Component;

class Form extends Component
{

    public $customerName;
    public $customerAddress;
    public $customerPerson;
    public $date;
    public $deliveryDate;
    public $panelSlNo;
    public $projectName;
    public $creditDays;
    public $panelLocation;
    public $panelColor;
    public $busbar;
    public $cableEntry;
    public $isFeederAmmeter;
    public $cableMaker;
    public $access;
    public $mounting;
    public $panelType;
    public $panelTypeId;
    public $fabrication;
    public $type;

    public $jockeyHp;
    public $jockeyNoOfPumps;
    public $hydrantHp;
    public $hydrantNoOfPumps;
    public $standByHp;
    public $standByNoOfPumps;
    public $sprinklerHp;
    public $sprinklerNoOfPumps;
    public $engineHp;
    public $engineNoOfPumps;
    public $boosterHp;
    public $boosterNoOfPumps;

    public $indication;
    public $voltMeter;
    public $ammeter;
    public $isSpp;
    public $isHooter;
    public $feederAmmeter;
    public $switchMaker;

    public $remark;

    public $salesRepresentative;
    public $manuHead;

    // data
    public $panelTypes;
    public $hps;
    public $switchMakers;
    public $cableMakers;

    //
    public $isPriceCalculated = false;
    public $boqRequest;
    public $totalPrice;

    //
    public function render()
    {
        return view('livewire.requisition.form');
    }

    //
    public function updatedPanelTypeId()
    {
        foreach ($this->panelTypes as $panelType) {
            if ($panelType->id == $this->panelTypeId) {
                $this->panelType = $panelType;
                break;
            } else {
                $this->panelType = null;
            }
        }
    }

    // calculate
    public function calculate()
    {

        // panel type required
        if (!$this->panelType) {
            session()->flash('error', 'Panel type field required');
            return;
        }

        // type required
        if (!$this->type) {
            session()->flash('error', 'Type field required');
            return;
        }

        // manufacturer required
        if (!$this->switchMaker) {
            session()->flash('error', 'Switch maker field required');
            return;
        }

        // calculation service
        $calculationService = new CalculationService();

        // jockey pump
        if ($this->jockeyHp) {

            if (!$this->jockeyNoOfPumps) {
                session()->flash('error', 'Jockey no of pumps field required');
                return;
            }

            $jockeyPumpMasterData = MasterData::query()
                ->where('hp_id', $this->jockeyHp)
                ->where('manufacture_id', $this->switchMaker)
                ->where('panel_type_id', $this->panelTypeId)
                ->first();

            if ($jockeyPumpMasterData) {
                $jockeyPumpResult = $calculationService->calculate($jockeyPumpMasterData, $this->type, $this->jockeyNoOfPumps);
            } else {
                session()->flash('error', 'AGERR1: No data found for this combination');
                return;
            }
        } else {
            $jockeyPumpResult = $calculationService->emptyResult();
        }

        // hydrant pump
        if ($this->hydrantHp) {

            if (!$this->hydrantNoOfPumps) {
                session()->flash('error', 'Hydrant no of pumps field required');
                return;
            }

            $hydrantPumpMasterData = MasterData::query()
                ->where('hp_id', $this->hydrantHp)
                ->where('manufacture_id', $this->switchMaker)
                ->where('panel_type_id', $this->panelTypeId)
                ->first();

            if ($hydrantPumpMasterData) {
                $hydrantPumpResult = $calculationService->calculate($hydrantPumpMasterData, $this->type, $this->hydrantNoOfPumps);
            } else {
                session()->flash('error', 'AGERR2: No data found for this combination');
                return;
            }
        } else {
            $hydrantPumpResult = $calculationService->emptyResult();
        }

        // standBy pump
        if ($this->standByHp) {

            if (!$this->standByNoOfPumps) {
                session()->flash('error', 'Stand by no of pumps field required');
                return;
            }

            $standByPumpMasterData = MasterData::query()
                ->where('hp_id', $this->standByHp)
                ->where('manufacture_id', $this->switchMaker)
                ->where('panel_type_id', $this->panelTypeId)
                ->first();

            if ($standByPumpMasterData) {
                $standByPumpResult = $calculationService->calculate($standByPumpMasterData, $this->type, $this->standByNoOfPumps);
            } else {
                session()->flash('error', 'AGERR3: No data found for this combination');
                return;
            }
        } else {
            $standByPumpResult = $calculationService->emptyResult();
        }

        // sprinkler pump
        if ($this->sprinklerHp) {

            if (!$this->sprinklerNoOfPumps) {
                session()->flash('error', 'Sprinkler no of pumps field required');
                return;
            }

            $sprinklerPumpMasterData = MasterData::query()
                ->where('hp_id', $this->sprinklerHp)
                ->where('manufacture_id', $this->switchMaker)
                ->where('panel_type_id', $this->panelTypeId)
                ->first();

            if ($sprinklerPumpMasterData) {
                $sprinklerPumpResult = $calculationService->calculate($sprinklerPumpMasterData, $this->type, $this->sprinklerNoOfPumps);
            } else {
                session()->flash('error', 'AGERR4: No data found for this combination');
                return;
            }
        } else {
            $sprinklerPumpResult = $calculationService->emptyResult();
        }

        // engine pump
        if ($this->engineHp) {

            if (!$this->engineNoOfPumps) {
                session()->flash('error', 'Engine no of pumps field required');
                return;
            }

            $enginePumpMasterData = MasterData::query()
                ->where('hp_id', $this->engineHp)
                ->where('manufacture_id', $this->switchMaker)
                ->where('panel_type_id', $this->panelTypeId)
                ->first();

            if ($enginePumpMasterData) {
                $enginePumpResult = $calculationService->calculate($enginePumpMasterData, $this->type, $this->engineNoOfPumps);
            } else {
                session()->flash('error', 'AGERR5: No data found for this combination');
                return;
            }
        } else {
            $enginePumpResult = $calculationService->emptyResult();
        }

        // booster pump
        if ($this->boosterHp) {

            if (!$this->boosterNoOfPumps) {
                session()->flash('error', 'Booster no of pumps field required');
                return;
            }

            $boosterPumpMasterData = MasterData::query()
                ->where('hp_id', $this->boosterHp)
                ->where('manufacture_id', $this->switchMaker)
                ->where('panel_type_id', $this->panelTypeId)
                ->first();

            if ($boosterPumpMasterData) {
                $boosterPumpResult = $calculationService->calculate($boosterPumpMasterData, $this->type, $this->boosterNoOfPumps);
            } else {
                session()->flash('error', 'AGERR6: No data found for this combination');
                return;
            }
        } else {
            $boosterPumpResult = $calculationService->emptyResult();
        }

        // incomer calculation
        // calculate max density
        $maxDensity = max(array(
            $this->jockeyHp * $this->jockeyNoOfPumps,
            $this->hydrantHp * $this->hydrantNoOfPumps,
            $this->standByHp * $this->standByNoOfPumps,
            $this->sprinklerHp * $this->sprinklerNoOfPumps,
            $this->engineHp * $this->engineNoOfPumps,
            $this->boosterHp * $this->boosterNoOfPumps,
        ));

        // calculate max current
        $currents = Current::query()->pluck('name')->toArray();

        // select incomer current
        $incomerCurrent = $this->getClosest($maxDensity * 1.3, $currents);
        $incomerCurrentId = Current::query()->where('name', $incomerCurrent)->first()->id;

        // incomer pump
        $incomerPumpMasterData = CurrentMasterData::query()
            ->where('current_id', $incomerCurrentId)
            ->where('manufacture_id', $this->switchMaker)
            ->where('panel_type_id', $this->panelTypeId)
            ->first();

        if ($incomerPumpMasterData) {
            $incomerPumpResult = $calculationService->calculate($incomerPumpMasterData, $this->type, 1);
        } else {
            session()->flash('error', 'AGERR7: No data found for this combination');
            return;
        }

        // combine
        $boqRequest = array();
        $boqRequest['jockeyPumpResult'] = $jockeyPumpResult;
        $boqRequest['hydrantPumpResult'] = $hydrantPumpResult;
        $boqRequest['standByPumpResult'] = $standByPumpResult;
        $boqRequest['sprinklerPumpResult'] = $sprinklerPumpResult;
        $boqRequest['enginePumpResult'] = $enginePumpResult;
        $boqRequest['boosterPumpResult'] = $boosterPumpResult;
        $boqRequest['incomerPumpResult'] = $incomerPumpResult;
        $boqRequest['incomerMaxDensity'] = $maxDensity;
        $boqRequest['incomerCurrent'] = $incomerCurrent;
        $boqRequest['incomerCurrentId'] = $incomerCurrentId;
        $boqRequest['total'] = $jockeyPumpResult['total'] + $hydrantPumpResult['total'] + $standByPumpResult['total'] + $sprinklerPumpResult['total'] + $enginePumpResult['total'] + $boosterPumpResult['total'] + $incomerPumpResult['total'];

        $this->totalPrice = $boqRequest['total'];
        $this->boqRequest = $boqRequest;

        // total
        $this->isPriceCalculated = true;
        session()->flash('message', 'Approximate price: ' . $boqRequest['total'] . ' INR');

    }

    //
    public function submitRequest()
    {

        $user = auth()->user();

        // validate fields
        $newBoqRequest = new BoqRequest();
        $newBoqRequest->user_id = $user->id;
        $newBoqRequest->customer_name = $this->customerName;
        $newBoqRequest->customer_address = $this->customerAddress;
        $newBoqRequest->contact_person = $this->customerPerson;
        $newBoqRequest->date = Carbon::parse($this->date);
        $newBoqRequest->delivery_date = Carbon::parse($this->deliveryDate);
        $newBoqRequest->panel_sl_no = $this->panelSlNo;
        $newBoqRequest->project_name = $this->projectName;
        $newBoqRequest->credit_days = $this->creditDays;
        $newBoqRequest->panel_location = $this->panelLocation;
        $newBoqRequest->panel_color = $this->panelColor;
        $newBoqRequest->busbar = $this->busbar;
        $newBoqRequest->cable_entry = $this->cableEntry;
        $newBoqRequest->cable_maker = $this->cableMaker;
        $newBoqRequest->access = $this->access;
        $newBoqRequest->mounting = $this->mounting;
        $newBoqRequest->panel_type_id = $this->panelTypeId;
        $newBoqRequest->fabrication = $this->fabrication;
        $newBoqRequest->type = $this->type;

        $newBoqRequest->jockey_hp = $this->jockeyHp;
        $newBoqRequest->jockey_no_of_pumps = $this->jockeyNoOfPumps;

        $newBoqRequest->hydrant_hp = $this->hydrantHp;
        $newBoqRequest->hydrant_no_of_pumps = $this->hydrantNoOfPumps;

        $newBoqRequest->stand_by_hp = $this->standByHp;
        $newBoqRequest->stand_by_no_of_pumps = $this->standByNoOfPumps;

        $newBoqRequest->sprinkler_hp = $this->sprinklerHp;
        $newBoqRequest->sprinkler_no_of_pumps = $this->sprinklerNoOfPumps;

        $newBoqRequest->engine_hp = $this->engineHp;
        $newBoqRequest->engine_no_of_pumps = $this->engineNoOfPumps;

        $newBoqRequest->booster_hp = $this->boosterHp;
        $newBoqRequest->booster_no_of_pumps = $this->boosterNoOfPumps;

        $newBoqRequest->indication = $this->indication;
        $newBoqRequest->volt_meter = $this->voltMeter;
        $newBoqRequest->ammeter = $this->ammeter;
        $newBoqRequest->is_spp = $this->isSpp;
        $newBoqRequest->is_hooter = $this->isHooter;
        $newBoqRequest->is_feeder_ammeter = $this->isFeederAmmeter;
        $newBoqRequest->feeder_ammeter = $this->feederAmmeter;
        $newBoqRequest->switch_maker_id = $this->switchMaker;
        $newBoqRequest->remark = $this->remark;

        $newBoqRequest->calculated_data = json_encode($this->boqRequest);

        $newBoqRequest->save();

        session()->flash('message', 'BOQ Request submitted successfully');
        return $this->redirectRoute('requisition.quotation.show', [$newBoqRequest->id]);

    }

    // get closest
    function getClosest($search, $arr)
    {
        $closest = null;
        foreach ($arr as $item) {
            if ($closest === null || abs($search - $closest) > abs($item - $search)) {
                $closest = $item;
            }
        }
        return $closest;
    }

}
