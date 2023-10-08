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
            ->join('image', 'product.img_id', '=', 'image.img_id')
            ->select(
                'product.prd_id AS prd_id',
                'version.version_id AS version_id',
                'product.prd_name AS prd_name',
                'version.version_name AS version_name',
                'subcategory.sub_name AS sub_name',
                'version.current_price AS current_price',
                'image.img_1 AS img_1'
            )
            ->where('category.cat_name', 'not like', '%Linh kiện máy tính%')
            ->get();

        return $laptops;
    }

    public function indexComponent()
    {
        $components = DB::table('product')
            ->join('version', 'product.prd_id', '=', 'version.prd_id')
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
                'image.img_1 AS img_1')
            ->where('category.cat_name', 'like', '%Linh kiện%')
            ->get();

        return $components;
    }

    public function store()
    {
        return DB::table('product')->insertGetId([
            'prd_name' =>$this->prd_name,
            'sub_id' => $this->sub_id,
            'img_id' => $this->img_id,
        ]);
    }

    public function getIdImage() {
        return DB::table('product')
            ->where('prd_id', '=', $this->prd_id)
            ->select('img_id')
            ->first();
    }

    public function updateProduct() {
        // Cập nhật thông tin product
        DB::table('product')
            ->where('prd_id', $this->prd_id)
            ->update([
                'prd_name' => $this->prd_name,
                'sub_id' => $this->sub_id,
            ]);

        // Truy vấn lại thông tin product sau khi cập nhật
        $updatedProduct = DB::table('product')
            ->where('prd_id', $this->prd_id)
            ->first();

        // Lấy giá trị img_id từ bản ghi được cập nhật
        $img_id = $updatedProduct->img_id;

        return $img_id;
    }

    public function delete() {
        $product = DB::table('product')
            ->where('prd_id', '=', $this->prd_id)
            ->first();
        $img_id = $product->img_id;
        DB::table('product')
            ->where('prd_id', '=', $this->prd_id)
            ->delete();
        return $img_id;
    }

}
