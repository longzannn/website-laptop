<?php

namespace App\Http\Controllers;

use App\Models\CategoryLayout;
use App\Http\Requests\StoreCategoryLayoutRequest;
use App\Http\Requests\UpdateCategoryLayoutRequest;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

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

    public function filterPrice($price, $objProduct, $cat_id) {
        return match ($price) {
            10000000 => $objProduct->filterPrice($cat_id, 0, 10000000),
            15000000 => $objProduct->filterPrice($cat_id, 10000000, 15000000),
            20000000 => $objProduct->filterPrice($cat_id, 15000000, 20000000),
            30000000 => $objProduct->filterPrice($cat_id, 20000000, 30000000),
            45000000 => $objProduct->filterPrice($cat_id, 30000000, 45000000),
            55000000 => $objProduct->filterPrice($cat_id, 45000000, 55000000),
            80000000 => $objProduct->filterPrice($cat_id, 55000000, 80000000),
            default => $objProduct->getProductsByCategory($cat_id),
        };
    }

    public function filterScreen($screen, $objProduct, $cat_id) {
        return $objProduct->filterScreen($cat_id, $screen);
    }

    public function filterDisplay($display, $objProduct, $cat_id) {
        return $objProduct->filterDisplay($cat_id, $display);
    }

    public  function filterCpu($cpu, $objProduct, $cat_id) {
        return $objProduct->filterCpu($cat_id, $cpu);
    }

    public function filterRam($ram, $objProduct, $cat_id) {
        return $objProduct->filterRam($cat_id, $ram);
    }

    public function filter(Request $request) {
        $objCategory = new CategoryLayout();
        $categories = $objCategory->getCategories();
        $objSubcategory = new CategoryLayout();
        $subcategories = $objSubcategory->getSubcategories();
        $cat_id = $request->id;
        $category = $objCategory->getCategoryName($cat_id);
        $cat_name = $category->cat_name;
        $objProduct = new CategoryLayout();
        if($request->price) {
            $price = intval($request->price);
            $products = $this->filterPrice($price, $objProduct, $cat_id);
        } else if($request->screen) {
            $screen = $request->screen;
            $products = $this->filterScreen($screen, $objProduct, $cat_id);
        } else if($request -> display) {
            $display = $request->display;
            $products = $this->filterDisplay($display, $objProduct, $cat_id);
        } else if($request -> cpu) {
            $cpu = $request->cpu;
            $products = $this->filterCpu($cpu, $objProduct, $cat_id);
        } else if($request -> ram) {
            $ram = $request -> ram;
            $products = $this->filterRam($ram, $objProduct, $cat_id);
        } else {
            $products = array();
        }

        return view($this->path . 'category', [
            'categories' => $categories,
            'subcategories' => $subcategories,
            'cat_name' => $cat_name,
            'products' => $products,
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
