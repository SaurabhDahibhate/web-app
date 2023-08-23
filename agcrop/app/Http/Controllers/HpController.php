<?php

namespace App\Http\Controllers;

use App\Models\Hp;
use Illuminate\Http\Request;

class HpController extends Controller
{
    //
    public function index()
    {
        $hps = Hp::all();
        return view('admin.hps.index', ['hp' => $hps]);
    }

    //
    public function create()
    {
        return view('admin.hps.index');
    }

    //
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
        ]);

        $hp = new Hp();
        $hp->name = $request->name;
        $hp->save();

        return redirect()->route('hps.index')
            ->with('success', 'HP has been added');
    }

    //
    public function show($id)
    {
        $hps = Hp::all();
        return view('admin.hp_products', ['hp' => $hps]);
    }

    //
    public function edit(Hp $hp)
    {
        //
        return view('admin.hps.edit', compact('hp'));
    }

    //
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name' => 'required',
            'id' => 'id'
        ]);

        $hps = Hp::find($id);
        $hps->name = $request->get('name');
        $hps->save();

        return redirect()->route('hps.index')
            ->with('success', 'HP updated successfully');
    }

    //
    public function destroy(Hp $hp)
    {
        //
        $hp->delete();
        return redirect()->route('hps.index')
            ->with('success', 'HP deleted successfully');
    }
}
