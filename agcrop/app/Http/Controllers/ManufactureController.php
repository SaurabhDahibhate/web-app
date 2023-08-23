<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Manufacture;
use Illuminate\Http\Request;

class ManufactureController extends Controller
{
    //
    public function index()
    {
        //
        $manufactures = Manufacture::all();
        $category = Category::all();
        return view('admin.manufactures.index', ['manufacture' => $manufactures, 'category' => $category]);
    }

    //
    public function create()
    {
        //
        return view('admin.manufactures.index');
    }

    //
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
        ]);

        $manufacture = new Manufacture();
        $manufacture->name = $request->name;
        $manufacture->category_id = $request->category_id;
        $manufacture->save();

        return redirect()->route('manufactures.index')
            ->with('success', 'manufacture has been added');
    }

    //
    public function show(Manufacture $manufacture)
    {
        //
    }

    //
    public function edit(Manufacture $manufacture)
    {
        $category = Category::all();
        return view('admin.manufactures.edit', compact('manufacture', 'category'));
    }

    //
    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'id' => 'id',
            'category_id' => 'required',
        ]);

        $manufacture = Manufacture::find($id);
        $manufacture->name = $request->get('name', $manufacture->name);
        $manufacture->category_id = $request->get('category_id', $manufacture->category_id);
        $manufacture->save();

        return redirect()->route('manufactures.index')
            ->with('success', 'Manufacture updated successfully');
    }

    //
    public function destroy(Manufacture $manufacture)
    {
        //
        $manufacture->delete();
        return redirect()->route('manufactures.index')
            ->with('success', 'Manufacture deleted successfully');
    }
}
