<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    //
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', ['category' => $categories]);
    }

    //
    public function create()
    {
        return view('admin.categories.index');
    }

    //
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
        ]);

        Category::create($request->all());
        return redirect()->route('categories.index')
            ->with('success', 'Category has been added');
    }

    //
    public function show(Category $Category)
    {
        //
    }

    //
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    //
    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'id' => 'id'
        ]);

        $category = Category::find($id);
        $category->name = $request->get('name', $category->name);
        $category->save();

        return redirect()->route('categories.index')
            ->with('success', 'Category updated successfully');
    }

    //
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')
            ->with('success', 'Category name deleted successfully');
    }
}
