<?php

namespace App\Http\Controllers;

use App\Models\HomeLayout;
use App\Http\Requests\StoreHomeLayoutRequest;
use App\Http\Requests\UpdateHomeLayoutRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\Version;

class HomeLayoutController extends Controller
{
    private $path = "client/";
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $objCategory = new HomeLayout();
        $categories = $objCategory->getCategories();
        $objSubcategory = new HomeLayout();
        $subcategories = $objSubcategory->getSubcategories();
        $objVersion = new HomeLayout();
        $products = $objVersion->getLaptopProducts();
        return view($this->path . 'home', [
            'categories' => $categories,
            'subcategories' => $subcategories,
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
    public function store(StoreHomeLayoutRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(HomeLayout $homeLayout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomeLayout $homeLayout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHomeLayoutRequest $request, HomeLayout $homeLayout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomeLayout $homeLayout)
    {
        //
    }
}
