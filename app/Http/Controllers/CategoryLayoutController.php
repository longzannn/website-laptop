<?php

namespace App\Http\Controllers;

use App\Models\CategoryLayout;
use App\Http\Requests\StoreCategoryLayoutRequest;
use App\Http\Requests\UpdateCategoryLayoutRequest;
use Illuminate\Http\Request;

class CategoryLayoutController extends Controller
{
    private $path = 'client/';
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $objCategory = new CategoryLayout();
        $categories = $objCategory->getCategories();
        $objSubcategory = new CategoryLayout();
        $subcategories = $objSubcategory->getSubcategories();
        $cat_id = $request->id;
        $category = $objCategory->getCategoryName($cat_id);
        $cat_name = $category->cat_name;
        $objProduct = new CategoryLayout();
        $products = $objProduct->getProductsByCategory($cat_id);
        return view($this->path . 'category', [
            'categories' => $categories,
            'subcategories' => $subcategories,
            'products' => $products,
            'cat_name' => $cat_name,
            'cat_id' => $cat_id,
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
    public function store(StoreCategoryLayoutRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryLayout $categoryLayout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoryLayout $categoryLayout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryLayoutRequest $request, CategoryLayout $categoryLayout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryLayout $categoryLayout)
    {
        //
    }
}
