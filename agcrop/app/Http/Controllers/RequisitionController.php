<?php

namespace App\Http\Controllers;

use App\Models\BoqRequest;
use App\Models\Hp;
use App\Models\Manufacture;
use App\Models\PanelType;
use Illuminate\Http\Request;

class RequisitionController extends Controller
{

    //
    public function index()
    {

        $panelTypes = PanelType::all();
        $switchMakers = Manufacture::where('category_id', 19)->get();
        $cableMakers = Manufacture::where('category_id', 12)->get();
        $hps = Hp::all();

        return view('admin.requisition.index', compact('panelTypes', 'hps', 'switchMakers', 'cableMakers'));
    }


    //
    public function showQuotation(Request $request, $id)
    {

        $user = auth()->user();

        $boqRequest = BoqRequest::with('user', 'switchMaker')
            ->find($id);

        // check boq and check authorization
        if (!$boqRequest || ($boqRequest->user_id != $user->id))
            abort(404);

        //
        return view('user.quotation.show', compact('boqRequest'));


    }

}
