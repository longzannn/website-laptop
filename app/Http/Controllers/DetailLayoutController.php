<?php

namespace App\Http\Controllers;

use App\Models\DetailLayout;
use App\Http\Requests\StoreDetailLayoutRequest;
use App\Http\Requests\UpdateDetailLayoutRequest;
use Illuminate\Http\Request;

class DetailLayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $objCategory = new DetailLayout();
        $categories = $objCategory->getCategories();
        $objSubcategory = new DetailLayout();
        $subcategories = $objSubcategory->getSubcategories();
        $objProduct = new DetailLayout();
        $version_id = $request->id;
        $product = $objProduct->getProductByVersionId($version_id);
        $products = $objProduct->getProductsHaveTheSameName($product->prd_name);
        return view('client/detail', [
            'product' => $product,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'products' => $products,
            'version_id' => $version_id,
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
    public function store(StoreDetailLayoutRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DetailLayout $detailLayout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DetailLayout $detailLayout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDetailLayoutRequest $request, DetailLayout $detailLayout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DetailLayout $detailLayout)
    {
        //
    }
}
