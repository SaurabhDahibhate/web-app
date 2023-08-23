<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Product;
use App\Models\Category;
use App\Models\Manufacture;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Imports\ProductImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Request\Admin\Product\StoreProductRequest;

class ProductController extends Controller
{

    public function __construct()
    {
    }

    //
    public function index()
    {

        $products = Product::with('category', 'subcategory', 'manufacturer', 'unit')
            ->get();

        return view('admin.products.index', ['products' => $products]);
    }

    //
    public function create()
    {
        $unit = Unit::all();
        $manufacture = Manufacture::all();
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin.products.create', compact('unit', 'category', 'manufacture', 'subcategory'));
    }

    //
    public function store(Request $request)
    {

        $product = new Product();
        $product->name = $request->get('name');
        $product->unit_id = $request->get('unit_id');
        $product->category_id = $request->get('category_id');
        $product->manufacture_id = $request->get('manufacture_id');
        $product->subcategory_id = $request->get('subcategory_id');
        $product->purchase_rate = $request->get('purchase_rate');
        $product->purchase_discount = $request->get('purchase_discount');
        $product->actual_rate = $request->get('actual_rate');
        $product->description = $request->get('description');
        $product->save();

       


        return redirect()->route('products.index')->with('success', 'Product has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return Response
     */
    public function show(Product $product)
    {
        //
    }

    //
    public function edit(Product $product)
    {

        $unit = Unit::all();
        $category = Category::all();
        $manufacture = Manufacture::all();
        $subcategory = SubCategory::all();

        return view('admin.products.edit', compact('unit', 'category', 'manufacture', 'product', 'subcategory'));
    }

    //
    public function update(StoreProductRequest $request, $id)
    {

        $product = Product::find($id);
        $product->name = $request->get('name', $product->name);
        $product->unit_id = $request->get('unit_id', $product->unit_id);
        $product->category_id = $request->get('category_id', $product->category_id);
        $product->manufacture_id = $request->get('manufacture_id', $product->manufacture_id);
        $product->purchase_rate = $request->get('purchase_rate', $product->purchase_rate);
        $product->purchase_discount = $request->get('purchase_discount', $product->purchase_discount);
        $product->actual_rate = $request->get('actual_rate', $product->actual_rate);
        $product->description = $request->get('description', $product->description);
        $product->save();

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }

    //
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }


    public function importProducts(Request $request) {

            Excel::import(new ProductImport, $request->file('file')->store('temp'));
            die;
            //return back();

    }
}
