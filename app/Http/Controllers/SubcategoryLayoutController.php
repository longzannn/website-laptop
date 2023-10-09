<?php

namespace App\Http\Controllers;

use App\Models\SubcategoryLayout;
use App\Http\Requests\StoreSubcategoryLayoutRequest;
use App\Http\Requests\UpdateSubcategoryLayoutRequest;
use Illuminate\Http\Request;

class SubcategoryLayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $objCategory = new SubcategoryLayout();
        $categories = $objCategory->getCategories();
        $objSubcategory = new SubcategoryLayout();
        $subcategories = $objSubcategory->getSubcategories();
        $sub_id = $request->id;
        $subcategory = $objSubcategory->getSubcategoryName($sub_id);
        $sub_name = $subcategory->sub_name;
        $objProduct = new SubcategoryLayout();
        $products = $objProduct->getProductsBySubcategory($sub_id);
        return view('client/subcategory', [
            'categories' => $categories,
            'subcategories' => $subcategories,
            'sub_name' => $sub_name,
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubcategoryLayoutRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SubcategoryLayout $subcategoryLayout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubcategoryLayout $subcategoryLayout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubcategoryLayoutRequest $request, SubcategoryLayout $subcategoryLayout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubcategoryLayout $subcategoryLayout)
    {
        //
    }
}
