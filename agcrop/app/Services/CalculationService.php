<?php

namespace App\Services;

class CalculationService
{

    // calculate
    public function calculate($masterData, $type, $noOfPumps): array
    {

        $result = array();
        $result['total'] = 0;

        if ($type == '1') {

            // feeder incomer
            $tempProduct = $masterData->selectProduct('feeder_incomer_one_product_id')
                ->with('manufacturer', 'unit', 'category')
                ->first();
            if ($tempProduct) {
                $result['feeder_incomer_name'] = $tempProduct->name;
                $result['feeder_incomer_description'] = $tempProduct->description;
                $result['feeder_incomer_make'] = $tempProduct->manufacturer->name;
                $result['feeder_incomer_unit'] = $tempProduct->unit->name;
                $result['feeder_incomer_category'] = $tempProduct->category->name;
                $result['feeder_incomer_purchase'] = $tempProduct->purchase_rate;
                $result['feeder_incomer_price'] = $masterData->feeder_incomer_one_quantity * $noOfPumps * $tempProduct->purchase_rate;
            } else {
                $result['feeder_incomer_name'] = "";
                $result['feeder_incomer_description'] = "";
                $result['feeder_incomer_make'] = "";
                $result['feeder_incomer_unit'] = "";
                $result['feeder_incomer_category'] = "";
                $result['feeder_incomer_purchase'] = "";
                $result['feeder_incomer_price'] = 0;
            }
            $result['feeder_incomer_quantity'] = $masterData->feeder_incomer_one_quantity * $noOfPumps;
            $result['total'] += $result['feeder_incomer_price'];
            $tempProduct = null;

            // spreader & fuse
            $tempProduct = $masterData->selectProduct('spreader_fuse_product_one_id')
                ->with('manufacturer', 'unit', 'category')
                ->first();
            if ($tempProduct) {
                $result['spreader_fuse_name'] = $tempProduct->name;
                $result['spreader_fuse_description'] = $tempProduct->description;
                $result['spreader_fuse_make'] = $tempProduct->manufacturer->name;
                $result['spreader_fuse_unit'] = $tempProduct->unit->name;
                $result['spreader_fuse_category'] = $tempProduct->category->name;
                $result['spreader_fuse_purchase'] = $tempProduct->purchase_rate;
                $result['spreader_fuse_price'] = $masterData->spreader_fuse_one_quantity * $noOfPumps * $tempProduct->purchase_rate;
            } else {
                $result['spreader_fuse_name'] = "";
                $result['spreader_fuse_description'] = "";
                $result['spreader_fuse_make'] = "";
                $result['spreader_fuse_unit'] = "";
                $result['spreader_fuse_category'] = "";
                $result['spreader_fuse_purchase'] = "";
                $result['spreader_fuse_price'] = 0;
            }
            $result['spreader_fuse_quantity'] = $masterData->spreader_fuse_one_quantity * $noOfPumps;
            $result['total'] += $result['spreader_fuse_price'];
            $tempProduct = null;

            // entended rotary handle
            $tempProduct = $masterData->selectProduct('rotary_handle_one_product_id')
                ->with('manufacturer', 'unit', 'category')
                ->first();
            if ($tempProduct) {
                $result['rotary_handle_name'] = $tempProduct->name;
                $result['rotary_handle_description'] = $tempProduct->description;
                $result['rotary_handle_make'] = $tempProduct->manufacturer->name;
                $result['rotary_handle_unit'] = $tempProduct->unit->name;
                $result['rotary_handle_category'] = $tempProduct->category->name;
                $result['rotary_handle_purchase'] = $tempProduct->purchase_rate;
                $result['rotary_handle_price'] = $masterData->rotary_handle_one_quantity * $noOfPumps * $tempProduct->purchase_rate;
            } else {
                $result['rotary_handle_name'] = "";
                $result['rotary_handle_description'] = "";
                $result['rotary_handle_make'] = "";
                $result['rotary_handle_unit'] = "";
                $result['rotary_handle_category'] = "";
                $result['rotary_handle_purchase'] = "";
                $result['rotary_handle_price'] = 0;
            }
            $result['rotary_handle_quantity'] = $masterData->rotary_handle_one_quantity * $noOfPumps;
            $result['total'] += $result['rotary_handle_price'];
            $tempProduct = null;

            // contractor all 4
            $tempProduct = $masterData->selectProduct('contractor_main_one_product_id')
                ->with('manufacturer', 'unit', 'category')
                ->first();
            if ($tempProduct) {
                $result['contractor_main_name'] = $tempProduct->name;
                $result['contractor_main_description'] = $tempProduct->description;
                $result['contractor_main_make'] = $tempProduct->manufacturer->name;
                $result['contractor_main_unit'] = $tempProduct->unit->name;
                $result['contractor_main_category'] = $tempProduct->category->name;
                $result['contractor_main_purchase'] = $tempProduct->purchase_rate;
                $result['contractor_main_price'] = $masterData->contractor_main_one_quantity * $noOfPumps * $tempProduct->purchase_rate;
            } else {
                $result['contractor_main_name'] = "";
                $result['contractor_main_description'] = "";
                $result['contractor_main_make'] = "";
                $result['contractor_main_unit'] = "";
                $result['contractor_main_category'] = "";
                $result['contractor_main_purchase'] = "";
                $result['contractor_main_price'] = 0;
            }
            $result['contractor_main_quantity'] = $masterData->contractor_main_one_quantity * $noOfPumps;
            $result['total'] += $result['contractor_main_price'];
            $tempProduct = null;

            $tempProduct = $masterData->selectProduct('contractor_delta_one_product_id')
                ->with('manufacturer', 'unit', 'category')
                ->first();
            if ($tempProduct) {
                $result['contractor_delta_name'] = $tempProduct->name;
                $result['contractor_delta_description'] = $tempProduct->description;
                $result['contractor_delta_make'] = $tempProduct->manufacturer->name;
                $result['contractor_delta_unit'] = $tempProduct->unit->name;
                $result['contractor_delta_category'] = $tempProduct->category->name;
                $result['contractor_delta_purchase'] = $tempProduct->purchase_rate;
                $result['contractor_delta_price'] = $masterData->contractor_delta_one_quantity * $noOfPumps * $tempProduct->purchase_rate;
            } else {
                $result['contractor_delta_name'] = "";
                $result['contractor_delta_description'] = "";
                $result['contractor_delta_make'] = "";
                $result['contractor_delta_unit'] = "";
                $result['contractor_delta_category'] = "";
                $result['contractor_delta_purchase'] = "";
                $result['contractor_delta_price'] = 0;
            }
            $result['contractor_delta_quantity'] = $masterData->contractor_delta_one_quantity * $noOfPumps;
            $result['total'] += $result['contractor_delta_price'];
            $tempProduct = null;

            $tempProduct = $masterData->selectProduct('contractor_star_one_product_id')
                ->with('manufacturer', 'unit', 'category')
                ->first();
            if ($tempProduct) {
                $result['contractor_star_name'] = $tempProduct->name;
                $result['contractor_star_description'] = $tempProduct->description;
                $result['contractor_star_make'] = $tempProduct->manufacturer->name;
                $result['contractor_star_unit'] = $tempProduct->unit->name;
                $result['contractor_star_category'] = $tempProduct->category->name;
                $result['contractor_star_purchase'] = $tempProduct->purchase_rate;
                $result['contractor_star_price'] = $masterData->contractor_star_one_quantity * $noOfPumps * $tempProduct->purchase_rate;
            } else {
                $result['contractor_star_name'] = "";
                $result['contractor_star_description'] = "";
                $result['contractor_star_make'] = "";
                $result['contractor_star_unit'] = "";
                $result['contractor_star_category'] = "";
                $result['contractor_star_purchase'] = "";
                $result['contractor_star_price'] = 0;
            }
            $result['contractor_star_quantity'] = $masterData->contractor_star_one_quantity * $noOfPumps;
            $result['total'] += $result['contractor_star_price'];
            $tempProduct = null;

            $tempProduct = $masterData->selectProduct('contractor_olr_one_product_id')
                ->with('manufacturer', 'unit', 'category')
                ->first();
            if ($tempProduct) {
                $result['contractor_olr_name'] = $tempProduct->name;
                $result['contractor_olr_description'] = $tempProduct->description;
                $result['contractor_olr_make'] = $tempProduct->manufacturer->name;
                $result['contractor_olr_unit'] = $tempProduct->unit->name;
                $result['contractor_olr_category'] = $tempProduct->category->name;
                $result['contractor_olr_purchase'] = $tempProduct->purchase_rate;
                $result['contractor_olr_price'] = $masterData->contractor_olr_one_quantity * $noOfPumps * $tempProduct->purchase_rate;
            } else {
                $result['contractor_olr_name'] = "";
                $result['contractor_olr_description'] = "";
                $result['contractor_olr_make'] = "";
                $result['contractor_olr_unit'] = "";
                $result['contractor_olr_category'] = "";
                $result['contractor_olr_purchase'] = "";
                $result['contractor_olr_price'] = 0;
            }
            $result['contractor_olr_quantity'] = $masterData->contractor_olr_one_quantity * $noOfPumps;
            $result['total'] += $result['contractor_olr_price'];
            $tempProduct = null;

        } else {

            // feeder incomer
            $tempProduct = $masterData->selectProduct('feeder_incomer_two_product_id')
                ->with('manufacturer', 'unit', 'category')
                ->first();
            if ($tempProduct) {
                $result['feeder_incomer_name'] = $tempProduct->name;
                $result['feeder_incomer_description'] = $tempProduct->description;
                $result['feeder_incomer_make'] = $tempProduct->manufacturer->name;
                $result['feeder_incomer_unit'] = $tempProduct->unit->name;
                $result['feeder_incomer_category'] = $tempProduct->category->name;
                $result['feeder_incomer_purchase'] = $tempProduct->purchase_rate;
                $result['feeder_incomer_price'] = $masterData->feeder_incomer_two_quantity * $noOfPumps * $tempProduct->purchase_rate;
            } else {
                $result['feeder_incomer_name'] = "";
                $result['feeder_incomer_description'] = "";
                $result['feeder_incomer_make'] = "";
                $result['feeder_incomer_unit'] = "";
                $result['feeder_incomer_category'] = "";
                $result['feeder_incomer_purchase'] = "";
                $result['feeder_incomer_price'] = 0;
            }
            $result['feeder_incomer_quantity'] = $masterData->feeder_incomer_two_quantity * $noOfPumps;
            $result['total'] += $result['feeder_incomer_price'];
            $tempProduct = null;

            // spreader & fuse
            $tempProduct = $masterData->selectProduct('spreader_fuse_two_product_id')
                ->with('manufacturer', 'unit', 'category')
                ->first();
            if ($tempProduct) {
                $result['spreader_fuse_name'] = $tempProduct->name;
                $result['spreader_fuse_description'] = $tempProduct->description;
                $result['spreader_fuse_make'] = $tempProduct->manufacturer->name;
                $result['spreader_fuse_unit'] = $tempProduct->unit->name;
                $result['spreader_fuse_category'] = $tempProduct->category->name;
                $result['spreader_fuse_purchase'] = $tempProduct->purchase_rate;
                $result['spreader_fuse_price'] = $masterData->spreader_fuse_two_quantity * $noOfPumps * $tempProduct->purchase_rate;
            } else {
                $result['spreader_fuse_name'] = "";
                $result['spreader_fuse_description'] = "";
                $result['spreader_fuse_make'] = "";
                $result['spreader_fuse_unit'] = "";
                $result['spreader_fuse_category'] = "";
                $result['spreader_fuse_purchase'] = "";
                $result['spreader_fuse_price'] = 0;
            }
            $result['spreader_fuse_quantity'] = $masterData->spreader_fuse_two_quantity * $noOfPumps;
            $result['total'] += $result['spreader_fuse_price'];
            $tempProduct = null;

            // entended rotary handle
            $tempProduct = $masterData->selectProduct('rotary_handle_two_product_id')
                ->with('manufacturer', 'unit', 'category')
                ->first();
            if ($tempProduct) {
                $result['rotary_handle_name'] = $tempProduct->name;
                $result['rotary_handle_description'] = $tempProduct->description;
                $result['rotary_handle_make'] = $tempProduct->manufacturer->name;
                $result['rotary_handle_unit'] = $tempProduct->unit->name;
                $result['rotary_handle_category'] = $tempProduct->category->name;
                $result['rotary_handle_purchase'] = $tempProduct->purchase_rate;
                $result['rotary_handle_price'] = $masterData->rotary_handle_two_quantity * $noOfPumps * $tempProduct->purchase_rate;
            } else {
                $result['rotary_handle_name'] = "";
                $result['rotary_handle_description'] = "";
                $result['rotary_handle_make'] = "";
                $result['rotary_handle_unit'] = "";
                $result['rotary_handle_category'] = "";
                $result['rotary_handle_purchase'] = "";
                $result['rotary_handle_price'] = 0;
            }
            $result['rotary_handle_quantity'] = $masterData->rotary_handle_two_quantity * $noOfPumps;
            $result['total'] += $result['rotary_handle_price'];
            $tempProduct = null;

            // contractor all 4
            $tempProduct = $masterData->selectProduct('contractor_main_two_product_id')
                ->with('manufacturer', 'unit', 'category')
                ->first();
            if ($tempProduct) {
                $result['contractor_main_name'] = $tempProduct->name;
                $result['contractor_main_description'] = $tempProduct->description;
                $result['contractor_main_make'] = $tempProduct->manufacturer->name;
                $result['contractor_main_unit'] = $tempProduct->unit->name;
                $result['contractor_main_category'] = $tempProduct->category->name;
                $result['contractor_main_purchase'] = $tempProduct->purchase_rate;
                $result['contractor_main_price'] = $masterData->contractor_main_two_quantity * $noOfPumps * $tempProduct->purchase_rate;
            } else {
                $result['contractor_main_name'] = "";
                $result['contractor_main_description'] = "";
                $result['contractor_main_make'] = "";
                $result['contractor_main_unit'] = "";
                $result['contractor_main_category'] = "";
                $result['contractor_main_purchase'] = "";
                $result['contractor_main_price'] = 0;
            }
            $result['contractor_main_quantity'] = $masterData->contractor_main_two_quantity * $noOfPumps;
            $result['total'] += $result['contractor_main_price'];
            $tempProduct = null;

            $tempProduct = $masterData->selectProduct('contractor_delta_two_product_id')
                ->with('manufacturer', 'unit', 'category')
                ->first();
            if ($tempProduct) {
                $result['contractor_delta_name'] = $tempProduct->name;
                $result['contractor_delta_description'] = $tempProduct->description;
                $result['contractor_delta_make'] = $tempProduct->manufacturer->name;
                $result['contractor_delta_unit'] = $tempProduct->unit->name;
                $result['contractor_delta_category'] = $tempProduct->category->name;
                $result['contractor_delta_purchase'] = $tempProduct->purchase_rate;
                $result['contractor_delta_price'] = $masterData->contractor_delta_two_quantity * $noOfPumps * $tempProduct->purchase_rate;
            } else {
                $result['contractor_delta_name'] = "";
                $result['contractor_delta_description'] = "";
                $result['contractor_delta_make'] = "";
                $result['contractor_delta_unit'] = "";
                $result['contractor_delta_category'] = "";
                $result['contractor_delta_purchase'] = "";
                $result['contractor_delta_price'] = 0;
            }
            $result['contractor_delta_quantity'] = $masterData->contractor_delta_two_quantity * $noOfPumps;
            $result['total'] += $result['contractor_delta_price'];
            $tempProduct = null;

            $tempProduct = $masterData->selectProduct('contractor_star_two_product_id')
                ->with('manufacturer', 'unit', 'category')
                ->first();
            if ($tempProduct) {
                $result['contractor_star_name'] = $tempProduct->name;
                $result['contractor_star_description'] = $tempProduct->description;
                $result['contractor_star_make'] = $tempProduct->manufacturer->name;
                $result['contractor_star_unit'] = $tempProduct->unit->name;
                $result['contractor_star_category'] = $tempProduct->category->name;
                $result['contractor_star_purchase'] = $tempProduct->purchase_rate;
                $result['contractor_star_price'] = $masterData->contractor_star_two_quantity * $noOfPumps * $tempProduct->purchase_rate;
            } else {
                $result['contractor_star_name'] = "";
                $result['contractor_star_description'] = "";
                $result['contractor_star_make'] = "";
                $result['contractor_star_unit'] = "";
                $result['contractor_star_category'] = "";
                $result['contractor_star_purchase'] = "";
                $result['contractor_star_price'] = 0;
            }
            $result['contractor_star_quantity'] = $masterData->contractor_star_two_quantity * $noOfPumps;
            $result['total'] += $result['contractor_star_price'];
            $tempProduct = null;

            $tempProduct = $masterData->selectProduct('contractor_olr_two_product_id')
                ->with('manufacturer', 'unit', 'category')
                ->first();
            if ($tempProduct) {
                $result['contractor_olr_name'] = $tempProduct->name;
                $result['contractor_olr_description'] = $tempProduct->description;
                $result['contractor_olr_make'] = $tempProduct->manufacturer->name;
                $result['contractor_olr_unit'] = $tempProduct->unit->name;
                $result['contractor_olr_category'] = $tempProduct->category->name;
                $result['contractor_olr_purchase'] = $tempProduct->purchase_rate;
                $result['contractor_olr_price'] = $masterData->contractor_olr_two_quantity * $noOfPumps * $tempProduct->purchase_rate;
            } else {
                $result['contractor_olr_name'] = "";
                $result['contractor_olr_description'] = "";
                $result['contractor_olr_make'] = "";
                $result['contractor_olr_unit'] = "";
                $result['contractor_olr_category'] = "";
                $result['contractor_olr_purchase'] = "";
                $result['contractor_olr_price'] = 0;
            }
            $result['contractor_olr_quantity'] = $masterData->contractor_olr_two_quantity * $noOfPumps;
            $result['total'] += $result['contractor_olr_price'];
            $tempProduct = null;

        }

        // timer
        $tempProduct = $masterData->selectProduct('timer_product_id')
            ->with('manufacturer', 'unit', 'category')
            ->first();
        if ($tempProduct) {
            $result['timer_name'] = $tempProduct->name;
            $result['timer_description'] = $tempProduct->description;
            $result['timer_make'] = $tempProduct->manufacturer->name;
            $result['timer_unit'] = $tempProduct->unit->name;
            $result['timer_category'] = $tempProduct->category->name;
            $result['timer_purchase'] = $tempProduct->purchase_rate;
            $result['timer_price'] = $masterData->timer_quantity * $noOfPumps * $tempProduct->purchase_rate;
        } else {
            $result['timer_name'] = "";
            $result['timer_description'] = "";
            $result['timer_make'] = "";
            $result['timer_unit'] = "";
            $result['timer_category'] = "";
            $result['timer_purchase'] = "";
            $result['timer_price'] = 0;
        }
        $result['timer_quantity'] = $masterData->timer_quantity * $noOfPumps;
        $result['total'] += $result['timer_price'];
        $tempProduct = null;

        // control mcb
        $tempProduct = $masterData->selectProduct('control_mcb_product_id')
            ->with('manufacturer', 'unit', 'category')
            ->first();
        if ($tempProduct) {
            $result['control_mcb_name'] = $tempProduct->name;
            $result['control_mcb_description'] = $tempProduct->description;
            $result['control_mcb_make'] = $tempProduct->manufacturer->name;
            $result['control_mcb_unit'] = $tempProduct->unit->name;
            $result['control_mcb_category'] = $tempProduct->category->name;
            $result['control_mcb_purchase'] = $tempProduct->purchase_rate;
            $result['control_mcb_price'] = $masterData->control_mcb_quantity * $noOfPumps * $tempProduct->purchase_rate;
        } else {
            $result['control_mcb_name'] = "";
            $result['control_mcb_description'] = "";
            $result['control_mcb_make'] = "";
            $result['control_mcb_unit'] = "";
            $result['control_mcb_category'] = "";
            $result['control_mcb_purchase'] = "";
            $result['control_mcb_price'] = 0;
        }
        $result['control_mcb_quantity'] = $masterData->control_mcb_quantity * $noOfPumps;
        $result['total'] += $result['control_mcb_price'];
        $tempProduct = null;

        // add on block all 4
        $tempProduct = $masterData->selectProduct('two_no_two_nc_product_id')
            ->with('manufacturer', 'unit', 'category')
            ->first();
        if ($tempProduct) {
            $result['two_no_two_nc_name'] = $tempProduct->name;
            $result['two_no_two_nc_description'] = $tempProduct->description;
            $result['two_no_two_nc_make'] = $tempProduct->manufacturer->name;
            $result['two_no_two_nc_unit'] = $tempProduct->unit->name;
            $result['two_no_two_nc_category'] = $tempProduct->category->name;
            $result['two_no_two_nc_purchase'] = $tempProduct->purchase_rate;
            $result['two_no_two_nc_price'] = $masterData->two_no__two_nc_quantity * $noOfPumps * $tempProduct->purchase_rate;
        } else {
            $result['two_no_two_nc_name'] = "";
            $result['two_no_two_nc_description'] = "";
            $result['two_no_two_nc_make'] = "";
            $result['two_no_two_nc_unit'] = "";
            $result['two_no_two_nc_category'] = "";
            $result['two_no_two_nc_purchase'] = "";
            $result['two_no_two_nc_price'] = 0;
        }
        $result['two_no_two_nc_quantity'] = $masterData->two_no__two_nc_quantity * $noOfPumps;
        $result['total'] += $result['two_no_two_nc_price'];
        $tempProduct = null;

        $tempProduct = $masterData->selectProduct('one_no_one_nc_product_id')
            ->with('manufacturer', 'unit', 'category')
            ->first();
        if ($tempProduct) {
            $result['one_no_one_nc_name'] = $tempProduct->name;
            $result['one_no_one_nc_description'] = $tempProduct->description;
            $result['one_no_one_nc_make'] = $tempProduct->manufacturer->name;
            $result['one_no_one_nc_unit'] = $tempProduct->unit->name;
            $result['one_no_one_nc_category'] = $tempProduct->category->name;
            $result['one_no_one_nc_purchase'] = $tempProduct->purchase_rate;
            $result['one_no_one_nc_price'] = $masterData->one_no_one_nc_quantity * $noOfPumps * $tempProduct->purchase_rate;
        } else {
            $result['one_no_one_nc_name'] = "";
            $result['one_no_one_nc_description'] = "";
            $result['one_no_one_nc_make'] = "";
            $result['one_no_one_nc_unit'] = "";
            $result['one_no_one_nc_category'] = "";
            $result['one_no_one_nc_purchase'] = "";
            $result['one_no_one_nc_price'] = 0;
        }
        $result['one_no_one_nc_quantity'] = $masterData->one_no_one_nc_quantity * $noOfPumps;
        $result['total'] += $result['one_no_one_nc_price'];
        $tempProduct = null;

        $tempProduct = $masterData->selectProduct('one_nc_product_id')
            ->with('manufacturer', 'unit', 'category')
            ->first();
        if ($tempProduct) {
            $result['one_nc_name'] = $tempProduct->name;
            $result['one_nc_description'] = $tempProduct->description;
            $result['one_nc_make'] = $tempProduct->manufacturer->name;
            $result['one_nc_unit'] = $tempProduct->unit->name;
            $result['one_nc_category'] = $tempProduct->category->name;
            $result['one_nc_purchase'] = $tempProduct->purchase_rate;
            $result['one_nc_price'] = $masterData->one_nc_quantity * $noOfPumps * $tempProduct->purchase_rate;
        } else {
            $result['one_nc_name'] = "";
            $result['one_nc_description'] = "";
            $result['one_nc_make'] = "";
            $result['one_nc_unit'] = "";
            $result['one_nc_category'] = "";
            $result['one_nc_purchase'] = "";
            $result['one_nc_price'] = 0;
        }
        $result['one_nc_quantity'] = $masterData->one_nc_quantity * $noOfPumps;
        $result['total'] += $result['one_nc_price'];
        $tempProduct = null;

        $tempProduct = $masterData->selectProduct('first_left_product_id')
            ->with('manufacturer', 'unit', 'category')
            ->first();
        if ($tempProduct) {
            $result['first_left_name'] = $tempProduct->name;
            $result['first_left_description'] = $tempProduct->description;
            $result['first_left_make'] = $tempProduct->manufacturer->name;
            $result['first_left_unit'] = $tempProduct->unit->name;
            $result['first_left_category'] = $tempProduct->category->name;
            $result['first_left_purchase'] = $tempProduct->purchase_rate;
            $result['first_left_price'] = $masterData->first_left_quantity * $noOfPumps * $tempProduct->purchase_rate;
        } else {
            $result['first_left_name'] = "";
            $result['first_left_description'] = "";
            $result['first_left_make'] = "";
            $result['first_left_unit'] = "";
            $result['first_left_category'] = "";
            $result['first_left_purchase'] = "";
            $result['first_left_price'] = 0;
        }
        $result['first_left_quantity'] = $masterData->first_left_quantity * $noOfPumps;
        $result['total'] += $result['first_left_price'];
        $tempProduct = null;

        // indicator
        $tempProduct = $masterData->selectProduct('indicator_product_id')
            ->with('manufacturer', 'unit', 'category')
            ->first();
        if ($tempProduct) {
            $result['indicator_name'] = $tempProduct->name;
            $result['indicator_description'] = $tempProduct->description;
            $result['indicator_make'] = $tempProduct->manufacturer->name;
            $result['indicator_unit'] = $tempProduct->unit->name;
            $result['indicator_category'] = $tempProduct->category->name;
            $result['indicator_purchase'] = $tempProduct->purchase_rate;
            $result['indicator_price'] = $masterData->indicator_quantity * $noOfPumps * $tempProduct->purchase_rate;
        } else {
            $result['indicator_name'] = "";
            $result['indicator_description'] = "";
            $result['indicator_make'] = "";
            $result['indicator_unit'] = "";
            $result['indicator_category'] = "";
            $result['indicator_purchase'] = "";
            $result['indicator_price'] = 0;
        }
        $result['indicator_quantity'] = $masterData->indicator_quantity * $noOfPumps;
        $result['total'] += $result['indicator_price'];
        $tempProduct = null;

        // selector switch
        $tempProduct = $masterData->selectProduct('selector_switch_product_id')
            ->with('manufacturer', 'unit', 'category')
            ->first();
        if ($tempProduct) {
            $result['selector_switch_name'] = $tempProduct->name;
            $result['selector_switch_description'] = $tempProduct->description;
            $result['selector_switch_make'] = $tempProduct->manufacturer->name;
            $result['selector_switch_unit'] = $tempProduct->unit->name;
            $result['selector_switch_category'] = $tempProduct->category->name;
            $result['selector_switch_purchase'] = $tempProduct->purchase_rate;
            $result['selector_switch_price'] = $masterData->selector_switch_quantity * $noOfPumps * $tempProduct->purchase_rate;
        } else {
            $result['selector_switch_name'] = "";
            $result['selector_switch_description'] = "";
            $result['selector_switch_make'] = "";
            $result['selector_switch_unit'] = "";
            $result['selector_switch_category'] = "";
            $result['selector_switch_purchase'] = "";
            $result['selector_switch_price'] = 0;
        }
        $result['selector_switch_quantity'] = $masterData->selector_switch_quantity * $noOfPumps;
        $result['total'] += $result['selector_switch_price'];
        $tempProduct = null;

        // push button all 4
        $tempProduct = $masterData->selectProduct('push_button_one_product_id')
            ->with('manufacturer', 'unit', 'category')
            ->first();
        if ($tempProduct) {
            $result['push_button_one_name'] = $tempProduct->name;
            $result['push_button_one_description'] = $tempProduct->description;
            $result['push_button_one_make'] = $tempProduct->manufacturer->name;
            $result['push_button_one_unit'] = $tempProduct->unit->name;
            $result['push_button_one_category'] = $tempProduct->category->name;
            $result['push_button_one_purchase'] = $tempProduct->purchase_rate;
            $result['push_button_one_price'] = $masterData->push_button_one_quantity * $noOfPumps * $tempProduct->purchase_rate;
        } else {
            $result['push_button_one_name'] = "";
            $result['push_button_one_description'] = "";
            $result['push_button_one_make'] = "";
            $result['push_button_one_unit'] = "";
            $result['push_button_one_category'] = "";
            $result['push_button_one_purchase'] = "";
            $result['push_button_one_price'] = 0;
        }
        $result['push_button_one_quantity'] = $masterData->push_button_one_quantity * $noOfPumps;
        $result['total'] += $result['push_button_one_price'];
        $tempProduct = null;

        $tempProduct = $masterData->selectProduct('push_button_two_product_id')
            ->with('manufacturer', 'unit', 'category')
            ->first();
        if ($tempProduct) {
            $result['push_button_two_name'] = $tempProduct->name;
            $result['push_button_two_description'] = $tempProduct->description;
            $result['push_button_two_make'] = $tempProduct->manufacturer->name;
            $result['push_button_two_unit'] = $tempProduct->unit->name;
            $result['push_button_two_category'] = $tempProduct->category->name;
            $result['push_button_two_purchase'] = $tempProduct->purchase_rate;
            $result['push_button_two_price'] = $masterData->push_button_two_quantity * $noOfPumps * $tempProduct->purchase_rate;
        } else {
            $result['push_button_two_name'] = "";
            $result['push_button_two_description'] = "";
            $result['push_button_two_make'] = "";
            $result['push_button_two_unit'] = "";
            $result['push_button_two_category'] = "";
            $result['push_button_two_purchase'] = "";
            $result['push_button_two_price'] = 0;
        }
        $result['push_button_two_quantity'] = $masterData->push_button_two_quantity * $noOfPumps;
        $result['total'] += $result['push_button_two_price'];
        $tempProduct = null;

        $tempProduct = $masterData->selectProduct('push_button_three_product_id')
            ->with('manufacturer', 'unit', 'category')
            ->first();
        if ($tempProduct) {
            $result['push_button_three_name'] = $tempProduct->name;
            $result['push_button_three_description'] = $tempProduct->description;
            $result['push_button_three_make'] = $tempProduct->manufacturer->name;
            $result['push_button_three_unit'] = $tempProduct->unit->name;
            $result['push_button_three_category'] = $tempProduct->category->name;
            $result['push_button_three_purchase'] = $tempProduct->purchase_rate;
            $result['push_button_three_price'] = $masterData->push_button_three_quantity * $noOfPumps * $tempProduct->purchase_rate;
        } else {
            $result['push_button_three_name'] = "";
            $result['push_button_three_description'] = "";
            $result['push_button_three_make'] = "";
            $result['push_button_three_unit'] = "";
            $result['push_button_three_category'] = "";
            $result['push_button_three_purchase'] = "";
            $result['push_button_three_price'] = 0;
        }
        $result['push_button_three_quantity'] = $masterData->push_button_three_quantity * $noOfPumps;
        $result['total'] += $result['push_button_three_price'];
        $tempProduct = null;

        $tempProduct = $masterData->selectProduct('push_button_four_product_id')
            ->with('manufacturer', 'unit', 'category')
            ->first();
        if ($tempProduct) {
            $result['push_button_four_name'] = $tempProduct->name;
            $result['push_button_four_description'] = $tempProduct->description;
            $result['push_button_four_make'] = $tempProduct->manufacturer->name;
            $result['push_button_four_unit'] = $tempProduct->unit->name;
            $result['push_button_four_category'] = $tempProduct->category->name;
            $result['push_button_four_purchase'] = $tempProduct->purchase_rate;
            $result['push_button_four_price'] = $masterData->push_button_four_quantity * $noOfPumps * $tempProduct->purchase_rate;
        } else {
            $result['push_button_four_name'] = "";
            $result['push_button_four_description'] = "";
            $result['push_button_four_make'] = "";
            $result['push_button_four_unit'] = "";
            $result['push_button_four_category'] = "";
            $result['push_button_four_purchase'] = "";
            $result['push_button_four_price'] = 0;
        }
        $result['push_button_four_quantity'] = $masterData->push_button_four_quantity * $noOfPumps;
        $result['total'] += $result['push_button_four_price'];
        $tempProduct = null;

        $result['is_result_calculated'] = true;

        return $result;
    }

    //
    public function emptyResult(): array
    {
        return array(
            'is_result_calculated' => false,
            'total' => 0,
        );
    }

    // generate table row
    public static function generateRow($pump, $boqRequest, $name, $hideZeroRow = false)
    {

        if (!$hideZeroRow) {
            echo "<tr>
                                    <td>-</td>
                                    <td>" . $boqRequest->$pump->{$name . '_name'} . "</td>
                                    <td>" . $boqRequest->$pump->{$name . '_description'} . "</td>
                                    <td>" . $boqRequest->$pump->{$name . '_make'} . "</td>
                                    <td>" . $boqRequest->$pump->{$name . '_unit'} . "</td>
                                    <td>" . $boqRequest->$pump->{$name . '_category'} . "</td>
                                    <td>" . $boqRequest->$pump->{$name . '_quantity'} . "</td>
                                    <td>₹ " . $boqRequest->$pump->{$name . '_purchase'} . "</td>
                                    <td>₹ " . $boqRequest->$pump->{$name . '_price'} . "</td>
                                </tr>";
        } else {
            if ($boqRequest->$pump->{$name . '_price'} > 0) {
                echo "<tr>
                                    <td>-</td>
                                    <td>" . $boqRequest->$pump->{$name . '_name'} . "</td>
                                    <td>" . $boqRequest->$pump->{$name . '_description'} . "</td>
                                    <td>" . $boqRequest->$pump->{$name . '_make'} . "</td>
                                    <td>" . $boqRequest->$pump->{$name . '_unit'} . "</td>
                                    <td>" . $boqRequest->$pump->{$name . '_category'} . "</td>
                                    <td>" . $boqRequest->$pump->{$name . '_quantity'} . "</td>
                                    <td>₹ " . $boqRequest->$pump->{$name . '_purchase'} . "</td>
                                    <td>₹ " . $boqRequest->$pump->{$name . '_price'} . "</td>
                                </tr>";
            } else {
                echo '';
            }
        }

    }

}
