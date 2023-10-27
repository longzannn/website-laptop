<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SearchLayout extends Model
{
    use HasFactory;

    public function getCategories()
    {
        return DB::table('category')->get();
    }

    public function getSubcategories()
    {
        return DB::table('subcategory')
            ->join('category', 'subcategory.cat_id', '=', 'category.cat_id')
            ->select([
                'subcategory.*',
                'category.cat_name AS cat_name'
            ])
            ->get();
    }

    public function getProducts($keyword) {
        return DB::table('version')
            ->join('product', 'version.prd_id', '=', 'product.prd_id')
            ->join('subcategory', 'product.sub_id', '=', 'subcategory.sub_id')
            ->join('category', 'subcategory.cat_id', '=', 'category.cat_id')
            ->select(
                'product.prd_id AS prd_id',
                'version.version_id AS version_id',
                'product.prd_name AS prd_name',
                'version.version_name AS version_name',
                'subcategory.sub_name AS sub_name',
                'version.current_price AS current_price',
                'version.old_price AS old_price',
                'product.prd_images AS prd_images',
                'version.version_details AS version_details',
                'category.cat_name AS cat_name'
            )
            ->where('product.prd_name', 'LIKE', '%' . $keyword . '%')
            ->get();
    }

    public function filterPrice($keyword, $start_price, $end_price) {
        return DB::table('version')
            ->join('product', 'version.prd_id', '=', 'product.prd_id')
            ->join('subcategory', 'product.sub_id', '=', 'subcategory.sub_id')
            ->join('category', 'subcategory.cat_id', '=', 'category.cat_id')
            ->select(
                'product.prd_id AS prd_id',
                'version.version_id AS version_id',
                'product.prd_name AS prd_name',
                'version.version_name AS version_name',
                'subcategory.sub_name AS sub_name',
                'version.current_price AS current_price',
                'version.old_price AS old_price',
                'product.prd_images AS prd_images',
                'version.version_details AS version_details',
                'category.cat_name AS cat_name'
            )
            ->where('product.prd_name', 'LIKE', '%' . $keyword . '%')
            ->where('version.current_price', '>', $start_price)
            ->where('version.current_price', '<=', $end_price)
            ->get();
    }

    public function filterScreen($keyword, $screen) {
        return DB::table('version')
            ->join('product', 'version.prd_id', '=', 'product.prd_id')
            ->join('subcategory', 'product.sub_id', '=', 'subcategory.sub_id')
            ->join('category', 'subcategory.cat_id', '=', 'category.cat_id')
            ->select(
                'product.prd_id AS prd_id',
                'version.version_id AS version_id',
                'product.prd_name AS prd_name',
                'version.version_name AS version_name',
                'subcategory.sub_name AS sub_name',
                'version.current_price AS current_price',
                'version.old_price AS old_price',
                'product.prd_images AS prd_images',
                'version.version_details AS version_details',
                'category.cat_name AS cat_name'
            )
            ->where('product.prd_name', 'LIKE', '%' . $keyword . '%')
            ->where('version.version_details', 'LIKE', '%' . $screen . '"%')
            ->get();
    }

    public function filterDisplay($keyword, $display) {
        return DB::table('version')
            ->join('product', 'version.prd_id', '=', 'product.prd_id')
            ->join('subcategory', 'product.sub_id', '=', 'subcategory.sub_id')
            ->join('category', 'subcategory.cat_id', '=', 'category.cat_id')
            ->select(
                'product.prd_id AS prd_id',
                'version.version_id AS version_id',
                'product.prd_name AS prd_name',
                'version.version_name AS version_name',
                'subcategory.sub_name AS sub_name',
                'version.current_price AS current_price',
                'version.old_price AS old_price',
                'product.prd_images AS prd_images',
                'version.version_details AS version_details',
                'category.cat_name AS cat_name'
            )
            ->where('product.prd_name', 'LIKE', '%' . $keyword . '%')
            ->where('version.version_details', 'LIKE', '% ' . $display . ' %')
            ->get();
    }

    public function filterCpu($keyword, $cpu) {
        return DB::table('version')
            ->join('product', 'version.prd_id', '=', 'product.prd_id')
            ->join('subcategory', 'product.sub_id', '=', 'subcategory.sub_id')
            ->join('category', 'subcategory.cat_id', '=', 'category.cat_id')
            ->select(
                'product.prd_id AS prd_id',
                'version.version_id AS version_id',
                'product.prd_name AS prd_name',
                'version.version_name AS version_name',
                'subcategory.sub_name AS sub_name',
                'version.current_price AS current_price',
                'version.old_price AS old_price',
                'product.prd_images AS prd_images',
                'version.version_details AS version_details',
                'category.cat_name AS cat_name'
            )
            ->where('product.prd_name', 'LIKE', '%' . $keyword . '%')
            ->where('version.version_details', 'LIKE', '%' . $cpu . '%')
            ->get();
    }

    public function filterRam($keyword, $ram) {
        return DB::table('version')
            ->join('product', 'version.prd_id', '=', 'product.prd_id')
            ->join('subcategory', 'product.sub_id', '=', 'subcategory.sub_id')
            ->join('category', 'subcategory.cat_id', '=', 'category.cat_id')
            ->select(
                'product.prd_id AS prd_id',
                'version.version_id AS version_id',
                'product.prd_name AS prd_name',
                'version.version_name AS version_name',
                'subcategory.sub_name AS sub_name',
                'version.current_price AS current_price',
                'version.old_price AS old_price',
                'product.prd_images AS prd_images',
                'version.version_details AS version_details',
                'category.cat_name AS cat_name'
            )
            ->where('product.prd_name', 'LIKE', '%' . $keyword . '%')
            ->where('version.version_details', 'LIKE', '%' . $ram . '%')
            ->get();
    }
}
