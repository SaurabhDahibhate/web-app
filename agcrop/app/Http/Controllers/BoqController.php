<?php

namespace App\Http\Controllers;

use App\Mail\BoqRequestApprovedEmail;
use App\Models\BoqRequest;
use Illuminate\Http\Request;
use Mail;

class BoqController extends Controller
{

    //
    public function index()
    {
        $boqRequests = BoqRequest::where('is_submitted', true)
            ->get();
        return view('admin.boq.index', compact('boqRequests'));
    }

    //
    public function show(Request $request, $id)
    {
        $boqRequest = BoqRequest::find($id);

        $hideZeroRow = false;

        return view('admin.boq.show', compact('boqRequest', 'hideZeroRow'));
    }

    //
    public function approve(Request $request, $id)
    {

        $boqRequest = BoqRequest::find($id);
        $boqRequest->is_approved = true;
        $boqRequest->save();

        return redirect()->route('boqs.show', [$boqRequest->id])
            ->with('success', 'BOQ Request approved');
    }

    //
    public function sendEmail(Request $request, $id)
    {

        $boqRequest = BoqRequest::find($id);
        $boqRequest->is_approved = true;
        $boqRequest->save();

        Mail::to($boqRequest->user->email)->send(new BoqRequestApprovedEmail($boqRequest));

        return redirect()->route('boqs.show', [$boqRequest->id])
            ->with('success', 'Email has been sent to user at ' . $boqRequest->user->email);
    }
}
