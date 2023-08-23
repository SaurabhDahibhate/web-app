<?php

namespace App\Http\Controllers;

use App\Models\Current;
use App\Models\Hp;
use App\Models\Manufacture;
use App\Models\PanelType;
use App\Models\Product;

class MasterDataController extends Controller
{

    //
    public function index()
    {

        $hps = Hp::all();
        $panelTypes = PanelType::all();
        $manufactures = Manufacture::where('category_id', 19)->get();

        return view('admin.master_data.index', compact('hps', 'manufactures', 'panelTypes'));

    }

    //
    public function create($hpId, $manuId, $panelTypeId)
    {

        //
        $hp = Hp::find($hpId);
        $manufacture = Manufacture::find($manuId);
        $panelType = PanelType::find($panelTypeId);
        $products = Product::where('manufacture_id', $manufacture->id)->get();
        $type = "hp";

        return view('admin.master_data.create', compact('hp', 'manufacture', 'panelType', 'products', 'type'));

    }

    public function currentIndex()
    {

        $currents = Current::all();
        $panelTypes = PanelType::all();
        $manufactures = Manufacture::where('category_id', 19)->get();

        return view('admin.current_master_data.index', compact('currents', 'manufactures', 'panelTypes'));

    }

    //
    public function currentCreate($currentId, $manuId, $panelTypeId)
    {

        //
        $current = Current::find($currentId);
        $manufacture = Manufacture::find($manuId);
        $panelType = PanelType::find($panelTypeId);
        $products = Product::where('manufacture_id', $manufacture->id)->get();
        $type = "current";

        return view('admin.current_master_data.create', compact('current', 'manufacture', 'panelType', 'products', 'type'));

    }

    //
    public function hooterIndex()
    {
        return view('admin.master_data.hooter');
    }

}
