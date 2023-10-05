<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Subcategory;
use App\Models\Category;
use App\Models\Version;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    private $path = "admin/product/";
    /**
     * Display a listing of the resource.
     */
    public function indexLaptop()
    {
        $obj = new Product();
        $laptops = $obj->indexLaptop();
        return view($this->path . 'laptop', [
            'laptops' => $laptops
        ]);
    }

    public function indexComponent()
    {
        $obj = new Product();
        $components = $obj->indexComponent();
        return view($this->path . 'component', [
            'components' => $components
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $objSubcategory = new Subcategory();
        $subcategories = $objSubcategory->index();
        return view($this->path . 'add_product', [
            'subcategories' => $subcategories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
//        $obj = new Product();
//        $obj->sub_id = $request->sub_id;
//        $obj->prd_name = $request->prd_name;
//        $prd_id = $obj -> store();
//
//        $objVersion = new Version();
//        $objVersion->prd_id = $prd_id;
//        $objVersion->version_name = $request->version_name;
//        $objVersion->current_price = $request->current_price;
//        $objVersion->old_price = $request->old_price;
//
//        $cluster_count = intval($request->cluster_count);
//        $data = array();
//        for ($i = 1; $i <= $cluster_count; $i++) {
//            $name = $request->input("name$i");
//            $value = $request->input("value$i");
//            $data[] = "$name: $value";
//        }
//        $dataString = implode(', ', $data);
//        $objVersion->version_details = $dataString;
//        $objVersion->store();

        $images = $request->file('prd_images');
        $numberOfImages = count($images);
        $array = array();
        for ($i = 0; $i < $numberOfImages; $i++) {
            $image_name = $images[$i]->getClientOriginalName();
            $array[] = $image_name;
        }
        dd($array);

        return Redirect::route('product.laptop');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
