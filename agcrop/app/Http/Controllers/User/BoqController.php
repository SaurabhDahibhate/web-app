<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\BoqRequest;
use Illuminate\Http\Request;

class BoqController extends Controller
{

    //
    public function index()
    {

        $user = auth()->user();
        $boqRequests = $user->boqRequests;
        return view('user.boq.index', compact('boqRequests'));
    }

    //
    public function quotationIndex()
    {
        $user = auth()->user();
        $boqRequests = $user->boqRequests;
        return view('user.quotation.index', compact('boqRequests'));
    }

    //
    public function show(Request $request, $id)
    {
        $boqRequest = BoqRequest::find($id);
        $hideZeroRow = true;
        return view('admin.boq.show', compact('boqRequest', 'hideZeroRow'));
    }

    //
    public function submitQuotation(Request $request, $id)
    {

        $boqRequest = BoqRequest::find($id);
        $boqRequest->is_submitted = true;
        $boqRequest->save();

        return redirect()->route('user.quotations.index')
            ->with('success', 'Quotation has been submitted successfully.');
    }
}
