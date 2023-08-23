<?php

namespace App\Http\Controllers;

use App\Models\PanelType;
use Illuminate\Http\Request;

class PanelTypeController extends Controller
{
    //
    public function index()
    {
        $paneltypes = PanelType::all();
        return view('admin.panel_types.index', ['paneltypes' => $paneltypes]);
    }

    //
    public function create()
    {
        return view('admin.panel_types.create');
    }

    //
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
        ]);

        // Create a new panel type
        $paneltype = new PanelType();
        $paneltype->name = $request->get('name');
        $paneltype->is_fabrication_available = $request->get('is_fabrication_available');
        $paneltype->is_type_one_available = $request->get('is_type_one_available');
        $paneltype->is_type_two_available = $request->get('is_type_two_available');
        $paneltype->save();

        return redirect()->route('paneltypes.index')
            ->with('success', 'PanelType has been added');

    }

    //
    public function show($id)
    {

    }

    //
    public function edit(PanelType $paneltype)
    {
        return view('admin.panel_types.edit', compact('paneltype'));
    }

    //
    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'id' => 'id'
        ]);

        $paneltype = PanelType::find($id);
        $paneltype->name = $request->get('name', $paneltype->name);
        $paneltype->is_fabrication_available = $request->get('is_fabrication_available', $paneltype->is_fabrication_available);
        $paneltype->is_type_one_available = $request->get('is_type_one_available', $paneltype->is_type_one_available);
        $paneltype->is_type_two_available = $request->get('is_type_two_available', $paneltype->is_type_two_available);
        $paneltype->save();

        return redirect()->route('paneltypes.index')
            ->with('success', 'Panel Type updated successfully');

    }

    //
    public function destroy(PanelType $paneltype)
    {
        $paneltype->delete();
        return redirect()->route('paneltypes.index')
            ->with('success', 'Panel Type deleted successfully');
    }
}
