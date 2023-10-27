<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CartLayout extends Model
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

    public function getProductByVersionId($version_id) {
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
                'category.cat_name AS cat_name',
                'version.version_details AS version_details'
            )
            ->where('version.version_id', '=', $version_id)
            ->first();
    }
}
