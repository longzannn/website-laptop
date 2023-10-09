<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CategoryLayout extends Model
{
    use HasFactory;

    public function getCategoryName($cat_id)
    {
        $category = DB::table('category')
            ->where('cat_id', '=', $cat_id)
            ->first();
        return $category;
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

    public function getProductsByCategory($cat_id)
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
            ->where('category.cat_id', '=', $cat_id)
            ->get();
        return $products;
    }
}
