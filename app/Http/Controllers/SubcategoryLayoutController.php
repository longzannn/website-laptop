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
            'products' => $products,
            'sub_id' => $sub_id,
        ]);
    }

    public function filterPrice($price, $objProduct, $sub_id) {
        return match ($price) {
            10000000 => $objProduct->filterPrice($sub_id, 0, 10000000),
            15000000 => $objProduct->filterPrice($sub_id, 10000000, 15000000),
            20000000 => $objProduct->filterPrice($sub_id, 15000000, 20000000),
            30000000 => $objProduct->filterPrice($sub_id, 20000000, 30000000),
            45000000 => $objProduct->filterPrice($sub_id, 30000000, 45000000),
            55000000 => $objProduct->filterPrice($sub_id, 45000000, 55000000),
            80000000 => $objProduct->filterPrice($sub_id, 55000000, 80000000),
            default => $objProduct->getProductsBySubcategory($sub_id),
        };
    }

    public function filterScreen($screen, $objProduct, $sub_id) {
        return $objProduct->filterScreen($sub_id, $screen);
    }

    public function filterDisplay($display, $objProduct, $sub_id) {
        return $objProduct->filterDisplay($sub_id, $display);
    }

    public  function filterCpu($cpu, $objProduct, $sub_id) {
        return $objProduct->filterCpu($sub_id, $cpu);
    }

    public function filterRam($ram, $objProduct, $sub_id) {
        return $objProduct->filterRam($sub_id, $ram);
    }

    public function filter(Request $request) {
        $objCategory = new SubcategoryLayout();
        $categories = $objCategory->getCategories();
        $objSubcategory = new SubcategoryLayout();
        $subcategories = $objSubcategory->getSubcategories();
        $sub_id = $request->id;
        $subcategory = $objSubcategory->getSubcategoryName($sub_id);
        $sub_name = $subcategory->sub_name;
        $objProduct = new SubcategoryLayout();
        if($request->price) {
            $price = intval($request->price);
            $products = $this->filterPrice($price, $objProduct, $sub_id);
        } else if($request->screen) {
            $screen = $request->screen;
            $products = $this->filterScreen($screen, $objProduct, $sub_id);
        } else if($request -> display) {
            $display = $request->display;
            $products = $this->filterDisplay($display, $objProduct, $sub_id);
        } else if($request -> cpu) {
            $cpu = $request->cpu;
            $products = $this->filterCpu($cpu, $objProduct, $sub_id);
        } else if($request -> ram) {
            $ram = $request -> ram;
            $products = $this->filterRam($ram, $objProduct, $sub_id);
        } else {
            $products = array();
        }

        return view('client/subcategory', [
            'categories' => $categories,
            'subcategories' => $subcategories,
            'products' => $products,
            'sub_name' => $sub_name,
            'sub_id' => $sub_id,
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
