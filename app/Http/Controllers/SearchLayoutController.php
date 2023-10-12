<?php

namespace App\Http\Controllers;

use App\Models\SearchLayout;
use App\Http\Requests\StoreSearchLayoutRequest;
use App\Http\Requests\UpdateSearchLayoutRequest;
use Illuminate\Http\Request;

class SearchLayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $objCategory = new SearchLayout();
        $categories = $objCategory->getCategories();
        $objSubcategory = new SearchLayout();
        $subcategories = $objSubcategory->getSubcategories();
        $keyword = $request->keyword;
        $objProduct = new SearchLayout();
        $products = $objProduct->getProducts($keyword);
        return view('client.search', [
            'categories' => $categories,
            'subcategories' => $subcategories,
            'products' => $products,
            'keyword' => $keyword
        ]);
    }

    public function filterPrice($price, $objProduct, $keyword) {
        return match ($price) {
            10000000 => $objProduct->filterPrice($keyword, 0, 10000000),
            15000000 => $objProduct->filterPrice($keyword, 10000000, 15000000),
            20000000 => $objProduct->filterPrice($keyword, 15000000, 20000000),
            30000000 => $objProduct->filterPrice($keyword, 20000000, 30000000),
            45000000 => $objProduct->filterPrice($keyword, 30000000, 45000000),
            55000000 => $objProduct->filterPrice($keyword, 45000000, 55000000),
            80000000 => $objProduct->filterPrice($keyword, 55000000, 80000000),
            default => $objProduct->getProductsByCategory($keyword),
        };
    }

    public function filterScreen($screen, $objProduct, $keyword) {
        return $objProduct->filterScreen($keyword, $screen);
    }

    public function filterDisplay($display, $objProduct, $keyword) {
        return $objProduct->filterDisplay($keyword, $display);
    }

    public  function filterCpu($cpu, $objProduct, $keyword) {
        return $objProduct->filterCpu($keyword, $cpu);
    }

    public function filterRam($ram, $objProduct, $keyword) {
        return $objProduct->filterRam($keyword, $ram);
    }

    public function filter(Request $request) {
        $objCategory = new SearchLayout();
        $categories = $objCategory->getCategories();
        $objSubcategory = new SearchLayout();
        $subcategories = $objSubcategory->getSubcategories();
        $keyword = $request->keyword;
        $objProduct = new SearchLayout();
        if($request->price) {
            $price = intval($request->price);
            $products = $this->filterPrice($price, $objProduct, $keyword);
        } else if($request->screen) {
            $screen = $request->screen;
            $products = $this->filterScreen($screen, $objProduct, $keyword);
        } else if($request -> display) {
            $display = $request->display;
            $products = $this->filterDisplay($display, $objProduct, $keyword);
        } else if($request -> cpu) {
            $cpu = $request->cpu;
            $products = $this->filterCpu($cpu, $objProduct, $keyword);
        } else if($request -> ram) {
            $ram = $request -> ram;
            $products = $this->filterRam($ram, $objProduct, $keyword);
        } else {
            $products = array();
        }
        return view('client/search', [
            'categories' => $categories,
            'subcategories' => $subcategories,
            'products' => $products,
            'keyword' => $keyword
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
    public function store(StoreSearchLayoutRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SearchLayout $searchLayout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SearchLayout $searchLayout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSearchLayoutRequest $request, SearchLayout $searchLayout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SearchLayout $searchLayout)
    {
        //
    }
}
