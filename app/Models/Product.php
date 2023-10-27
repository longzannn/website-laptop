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
        return DB::table('product')
            ->join('version', 'product.prd_id', '=', 'version.prd_id')
            ->join('subcategory', 'product.sub_id', '=', 'subcategory.sub_id')
            ->join('category', 'subcategory.cat_id', '=', 'category.cat_id')
            ->select(
                'product.prd_id AS prd_id',
                'version.version_id AS version_id',
                'product.prd_name AS prd_name',
                'version.version_name AS version_name',
                'subcategory.sub_name AS sub_name',
                'version.current_price AS current_price',
                'product.prd_images AS prd_images',
                'version.quantity AS quantity'
            )
            ->where('category.cat_name', 'not like', '%Linh kiện máy tính%')
            ->paginate(4);
    }

    public function indexComponent()
    {
        return DB::table('product')
            ->join('version', 'product.prd_id', '=', 'version.prd_id')
            ->join('subcategory', 'product.sub_id', '=', 'subcategory.sub_id')
            ->join('category', 'subcategory.cat_id', '=', 'category.cat_id')
            ->select(
                'product.prd_id AS prd_id',
                'version.version_id AS version_id',
                'product.prd_name AS prd_name',
                'version.version_name AS version_name',
                'subcategory.sub_name AS sub_name',
                'version.current_price AS current_price',
                'product.prd_images AS prd_images',
                'version.quantity AS quantity'
            )
            ->where('category.cat_name', 'like', '%Linh kiện%')
            ->paginate(2);
    }

    public function store()
    {
        return DB::table('product')->insertGetId([
            'prd_name' =>$this->prd_name,
            'sub_id' => $this->sub_id,
            'prd_images' => $this->prd_images,
        ]);
    }

    public function updateProduct() {
        // Cập nhật thông tin product
        return DB::table('product')
            ->where('prd_id','=', $this->prd_id)
            ->update([
                'prd_name' => $this->prd_name,
                'sub_id' => $this->sub_id,
                'prd_images' => $this->prd_images,
            ]);
    }

    public function delete() {
        return DB::table('product')
            ->where('prd_id', '=', $this->prd_id)
            ->delete();
    }

}
