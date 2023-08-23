<?php

namespace App\Http\Controllers;

use App\Models\Current;
use Illuminate\Http\Request;

class CurrentController extends Controller
{
    //
    public function index()
    {
        $currents = Current::all();
        return view('admin.currents.index', ['currents' => $currents]);
    }

    //
    public function create()
    {
        return view('admin.currents.index');
    }

    //
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
        ]);

        $current = new Current();
        $current->name = $request->name;
        $current->save();

        return redirect()->route('currents.index')
            ->with('success', 'Current has been added');
    }

    //
    public function show($id)
    {
        //
    }

    //
    public function edit(Current $current)
    {
        //
        return view('admin.currents.edit', compact('current'));
    }

    //
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name' => 'required',
            'id' => 'id'
        ]);

        $current = Current::find($id);
        $current->name = $request->get('name');
        $current->save();

        return redirect()->route('currents.index')
            ->with('success', 'Current updated successfully');
    }

    //
    public function destroy(Current $current)
    {
        //
        $current->delete();
        return redirect()->route('currents.index')
            ->with('success', 'Current deleted successfully');
    }
}
