<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    //
    public function index()
    {
        $units = Unit::all();
        return view('admin.units.index', ['unit' => $units]);
    }

    //
    public function create()
    {
        return view('admin.units.index');
    }

    //
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
        ]);

        Unit::create($request->all());
        return redirect()->route('units.index')
            ->with('success', 'Unit has been added');

    }

    //
    public function show(Unit $unit)
    {
        //
    }

    //
    public function edit(Unit $unit)
    {
        return view('admin.units.edit', compact('unit'));
    }

    //
    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'id' => 'id'
        ]);

        $unit = Unit::find($id);
        $unit->name = $request->get('name', $unit->name);
        $unit->update();

        return redirect()->route('units.index')
            ->with('success', 'unit updated successfully');

    }

    //
    public function destroy(Unit $unit)
    {
        $unit->delete();
        return redirect()->route('units.index')
            ->with('success', 'Unit deleted successfully');
    }
}
