<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    public function indexLaptop()
    {
        $laptops = DB::table('product')
            ->join('version', 'product.prd_id', '=', 'version.prd_id')
            ->join('subcategory', 'product.sub_id', '=', 'subcategory.sub_id')
            ->join('category', 'subcategory.cat_id', '=', 'category.cat_id')
            ->select('product.prd_name AS prd_name', 'subcategory.sub_name AS sub_name', 'version.current_price AS current_price')
            ->where('category.cat_name', 'like', '%Laptop%')
            ->get();

        return $laptops;
    }

    public function indexComponent()
    {
        $components = DB::table('product')
            ->join('version', 'product.prd_id', '=', 'version.prd_id')
            ->join('subcategory', 'product.sub_id', '=', 'subcategory.sub_id')
            ->join('category', 'subcategory.cat_id', '=', 'category.cat_id')
            ->select('product.prd_name AS prd_name', 'subcategory.sub_name AS sub_name', 'version.current_price AS current_price')
            ->where('category.cat_name', 'like', '%Linh kiện%')
            ->get();

        return $components;
    }

    public function store()
    {
    }
}
