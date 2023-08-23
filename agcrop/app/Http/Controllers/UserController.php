<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\BoqRequest;

class UserController extends Controller
{
    function index()
    {
        $customers = User::where('role', 'user')->get();
        return view('admin.customer-list', compact('customers'));
    }

    function boq(int $id) {
        $boqRequests = BoqRequest::where(['is_submitted' => true, 'user_id' => $id])
            ->get();
        return view('user.boq.index', compact('boqRequests'));
    }
}
