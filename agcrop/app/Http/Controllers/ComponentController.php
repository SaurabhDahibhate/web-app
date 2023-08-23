<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Component;
use App\Models\PanelType;
use Illuminate\Http\Request;

class ComponentController extends Controller
{
    //
    public function index()
    {
        $components = Component::all();
        return view('admin.components.index', compact('components'));
    }

    //
    public function create()
    {
        $categories = Category::all();
        return view('admin.components.create', compact('categories'));
    }

    //
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
        ]);

        // create a new component
        $component = new Component();
        $component->name = $request->get('name');
        $component->category_id = $request->get('category_id');
        $component->save();

        return redirect()->route('components.index')
            ->with('success', 'Component has been added successfully.');
    }

    //
    public function show($id)
    {
    }

    //
    public function edit(Component $component)
    {
        $categories = Category::all();
        return view('admin.components.edit', compact('component', 'categories'));
    }

    //
    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'id' => 'id',
            'category_id' => 'required',
        ]);


        $component = Component::find($id);
        $component->name = $request->get('name', $component->name);
        $component->category_id = $request->get('category_id', $component->category_id);
        $component->save();

        return redirect()->route('components.index')
            ->with('success', 'Component updated successfully');
    }

    //
    public function destroy(Component $component)
    {
        $component->delete();
        return redirect()->route('components.index')
            ->with('success', 'Component deleted successfully');
    }
}
