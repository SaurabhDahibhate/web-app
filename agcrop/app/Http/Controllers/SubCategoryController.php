<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    //
    public function index()
    {
        $subcategorys = SubCategory::all();
        return view('admin.subcategories.index', ['subcategory' => $subcategorys]);
    }

    //
    public function create()
    {
        return view('admin.subcategories.index');
    }

    //
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        SubCategory::create($request->all());
        return redirect()->route('subcategories.index')
            ->with('success', ' Sub Category has been added');

    }

    //
    public function show(SubCategory $subcategory)
    {
        //
    }

    //
    public function edit(SubCategory $subcategory)
    {
        return view('admin.subcategories.edit', compact('subcategory'));
    }

    //
    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'id' => 'id'
        ]);

        $subcategory = SubCategory::find($id);
        $subcategory->name = $request->get('name', $subcategory->name);
        $subcategory->update();

        return redirect()->route('subcategories.index')
            ->with('success', 'category updated successfully');
    }

    //
    public function destroy(SubCategory $subcategory)
    {
        $subcategory->delete();
        return redirect()->route('subcategories.index')
            ->with('success', 'sub category name deleted successfully');
    }
}
