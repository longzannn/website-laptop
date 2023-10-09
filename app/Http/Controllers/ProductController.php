<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Models\Version;
use App\Models\Image;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

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
        // Lưu ảnh vào thư mục public/admin
        $images = $request->file('prd_images'); // Lấy ra mảng các file ảnh
        $numberOfImages = count($images);
        $array = array();
        for ($j = 0; $j < $numberOfImages; $j++) {
            $image_name = $images[$j]->getClientOriginalName();
            // Kiểm tra xem ảnh đã tồn tại trong thư mục public/admin hay chưa
            if(!Storage::exists('public/admin/'.$image_name)) {
                Storage::putFileAs('public/admin', $images[$j], $image_name);
            }
            $array[] = $image_name;
        }
        $objImage = new Image();
        for ($k = 0; $k < count($array); $k++) {
            $objImage->{"img_" . ($k + 1)} = $array[$k];
        }
        $img_id = $objImage->store(); // Lưu và lấy ra img_id vừa được thêm vào

        $obj = new Product();
        $obj->img_id = $img_id;
        $obj->sub_id = $request->sub_id;
        $obj->prd_name = $request->prd_name;
        $prd_id = $obj -> store(); // Lưu và lấy ra prd_id vừa được thêm vào

        // Lưu thông tin phiên bản vào bảng version
        $objVersion = new Version();
        $objVersion->prd_id = $prd_id;
        $objVersion->version_name = $request->version_name;
        $objVersion->current_price = $request->current_price;
        $objVersion->old_price = $request->old_price;
        // Lưu thông tin chi tiết phiên bản vào bảng version
        $cluster_count = intval($request->cluster_count); // Số lượng cụm thông số
        $data = array();
        for ($i = 1; $i <= $cluster_count; $i++) {
            $name = $request->input("name$i");
            $value = $request->input("value$i");
            $data[] = "$name: $value";
        }
        $dataString = implode('; ', $data); // Chuyển mảng thành chuỗi
        $objVersion->version_details = $dataString;
        $objVersion->store();

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
    public function edit(Product $product, Request $request)
    {
        $objVersion = new Version();
        $objVersion->version_id = $request->id;
        $versions = $objVersion->edit();
        $objSubcategory = new Subcategory();
        $subcategories = $objSubcategory->index();
        return view($this->path . 'edit_product', [
            'subcategories' => $subcategories,
            'products' => $versions,
            'id' => $objVersion->version_id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $objVersion = new Version();
        $objVersion->version_id = $request->id;
        $objVersion->version_name = $request->version_name;
        $objVersion->current_price = $request->current_price;
        $objVersion->old_price = $request->old_price;
        $objVersion->version_details = $request->version_details;
        $prd_id = $objVersion->updateVersion(); // Lưu và lấy ra prd_id vừa được thêm vào

        $objProduct = new Product();
        $objProduct->prd_id = $prd_id;
        $objProduct->prd_name = $request->prd_name;
        $objProduct->sub_id = $request->sub_id;
        $img_id = $objProduct->updateProduct(); // Lưu và lấy ra img_id vừa được thêm vào

        $images = $request->file('prd_images'); // Lấy ra mảng các file ảnh
        if($images != null) {
            $numberOfImages = count($images);
            $array = array();
            for ($j = 0; $j < $numberOfImages; $j++) {
                $image_name = $images[$j]->getClientOriginalName();
                // Kiểm tra xem ảnh đã tồn tại trong thư mục public/admin hay chưa
                if(!Storage::exists('public/admin/'.$image_name)) {
                    Storage::putFileAs('public/admin', $images[$j], $image_name);
                }
                $array[] = $image_name;
            }
            $objImage = new Image();
            for ($k = 0; $k < count($array); $k++) {
                $objImage->{"img_" . ($k + 1)} = $array[$k];
            }
            $objImage->img_id = $img_id;
            $objImage->updateImage();
        }
        return Redirect::route('product.laptop');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product, Request $request)
    {
        $objVersion = new Version();
        $objVersion->version_id = $request->id;
        $prd_id = $objVersion->delete();
        $objProduct = new Product();
        $objProduct->prd_id = $prd_id;
        $img_id = $objProduct->delete();
        $objImage = new Image();
        $objImage->img_id = $img_id;
        $objImage->delete();
        return Redirect::route('product.laptop');
    }
}
