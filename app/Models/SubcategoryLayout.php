<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SubcategoryLayout extends Model
{
    use HasFactory;

    public function getSubcategoryName($sub_id)
    {
        $subcategory = DB::table('subcategory')
            ->where('sub_id', '=', $sub_id)
            ->first();
        return $subcategory;
    }

    public function getCategories()
    {
        $categories = DB::table('category')->get();
        return $categories;
    }

    public function getSubcategories()
    {
        $subcategories = DB::table('subcategory')
            ->join('category', 'subcategory.cat_id', '=', 'category.cat_id')
            ->select([
                'subcategory.*',
                'category.cat_name AS cat_name'
            ])
            ->get();
        return $subcategories;
    }

    public function getProductsBySubcategory($sub_id)
    {
        $products = DB::table('version')
            ->join('product', 'version.prd_id', '=', 'product.prd_id')
            ->join('subcategory', 'product.sub_id', '=', 'subcategory.sub_id')
            ->join('category', 'subcategory.cat_id', '=', 'category.cat_id')
            ->join('image', 'product.img_id', '=', 'image.img_id')
            ->select(
                'product.prd_id AS prd_id',
                'version.version_id AS version_id',
                'product.prd_name AS prd_name',
                'version.version_name AS version_name',
                'subcategory.sub_name AS sub_name',
                'version.current_price AS current_price',
                'version.old_price AS old_price',
                'image.img_5 AS img_5',
                'image.img_1 AS img_1',
                'version.version_details AS version_details',
                'category.cat_name AS cat_name'
            )
            ->where('subcategory.sub_id', '=', $sub_id)
            ->get();
        return $products;
    }

    public function filterPrice($sub_id, $start_price, $end_price) {
        return DB::table('version')
            ->join('product', 'version.prd_id', '=', 'product.prd_id')
            ->join('subcategory', 'product.sub_id', '=', 'subcategory.sub_id')
            ->join('category', 'subcategory.cat_id', '=', 'category.cat_id')
            ->join('image', 'product.img_id', '=', 'image.img_id')
            ->select(
                'product.prd_id AS prd_id',
                'version.version_id AS version_id',
                'product.prd_name AS prd_name',
                'version.version_name AS version_name',
                'subcategory.sub_name AS sub_name',
                'version.current_price AS current_price',
                'version.old_price AS old_price',
                'image.img_5 AS img_5',
                'image.img_1 AS img_1',
                'version.version_details AS version_details',
                'category.cat_name AS cat_name'
            )
            ->where('subcategory.sub_id', '=', $sub_id)
            ->where('version.current_price', '>', $start_price)
            ->where('version.current_price', '<=', $end_price)
            ->get();
    }

    public function filterScreen($sub_id, $screen) {
        return DB::table('version')
            ->join('product', 'version.prd_id', '=', 'product.prd_id')
            ->join('subcategory', 'product.sub_id', '=', 'subcategory.sub_id')
            ->join('category', 'subcategory.cat_id', '=', 'category.cat_id')
            ->join('image', 'product.img_id', '=', 'image.img_id')
            ->select(
                'product.prd_id AS prd_id',
                'version.version_id AS version_id',
                'product.prd_name AS prd_name',
                'version.version_name AS version_name',
                'subcategory.sub_name AS sub_name',
                'version.current_price AS current_price',
                'version.old_price AS old_price',
                'image.img_5 AS img_5',
                'image.img_1 AS img_1',
                'version.version_details AS version_details',
                'category.cat_name AS cat_name'
            )
            ->where('subcategory.sub_id', '=', $sub_id)
            ->where('version.version_details', 'LIKE', '%' . $screen . '"%')
            ->get();
    }

    public function filterDisplay($sub_id, $display) {
        return DB::table('version')
            ->join('product', 'version.prd_id', '=', 'product.prd_id')
            ->join('subcategory', 'product.sub_id', '=', 'subcategory.sub_id')
            ->join('category', 'subcategory.cat_id', '=', 'category.cat_id')
            ->join('image', 'product.img_id', '=', 'image.img_id')
            ->select(
                'product.prd_id AS prd_id',
                'version.version_id AS version_id',
                'product.prd_name AS prd_name',
                'version.version_name AS version_name',
                'subcategory.sub_name AS sub_name',
                'version.current_price AS current_price',
                'version.old_price AS old_price',
                'image.img_5 AS img_5',
                'image.img_1 AS img_1',
                'version.version_details AS version_details',
                'category.cat_name AS cat_name'
            )
            ->where('subcategory.sub_id', '=', $sub_id)
            ->where('version.version_details', 'LIKE', '% ' . $display . ' %')
            ->get();
    }

    public function filterCpu($sub_id, $cpu) {
        return DB::table('version')
            ->join('product', 'version.prd_id', '=', 'product.prd_id')
            ->join('subcategory', 'product.sub_id', '=', 'subcategory.sub_id')
            ->join('category', 'subcategory.cat_id', '=', 'category.cat_id')
            ->join('image', 'product.img_id', '=', 'image.img_id')
            ->select(
                'product.prd_id AS prd_id',
                'version.version_id AS version_id',
                'product.prd_name AS prd_name',
                'version.version_name AS version_name',
                'subcategory.sub_name AS sub_name',
                'version.current_price AS current_price',
                'version.old_price AS old_price',
                'image.img_5 AS img_5',
                'image.img_1 AS img_1',
                'version.version_details AS version_details',
                'category.cat_name AS cat_name'
            )
            ->where('subcategory.sub_id', '=', $sub_id)
            ->where('version.version_details', 'LIKE', '%' . $cpu . '%')
            ->get();
    }

    public function filterRam($sub_id, $ram) {
        return DB::table('version')
            ->join('product', 'version.prd_id', '=', 'product.prd_id')
            ->join('subcategory', 'product.sub_id', '=', 'subcategory.sub_id')
            ->join('category', 'subcategory.cat_id', '=', 'category.cat_id')
            ->join('image', 'product.img_id', '=', 'image.img_id')
            ->select(
                'product.prd_id AS prd_id',
                'version.version_id AS version_id',
                'product.prd_name AS prd_name',
                'version.version_name AS version_name',
                'subcategory.sub_name AS sub_name',
                'version.current_price AS current_price',
                'version.old_price AS old_price',
                'image.img_5 AS img_5',
                'image.img_1 AS img_1',
                'version.version_details AS version_details',
                'category.cat_name AS cat_name'
            )
            ->where('subcategory.sub_id', '=', $sub_id)
            ->where('version.version_details', 'LIKE', '%' . $ram . '%')
            ->get();
    }
}
