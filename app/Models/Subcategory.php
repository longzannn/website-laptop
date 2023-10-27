<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Subcategory extends Model
{
    use HasFactory;

    public function index()
    {
        return DB::table('subcategory')
            ->join('category', 'subcategory.cat_id', '=', 'category.cat_id')
            ->select([
                'subcategory.*',
                'category.cat_name AS cat_name'
            ])
            ->paginate(5);
    }

    public function getSubcategories() {
        return DB::table('subcategory')
            ->join('category', 'subcategory.cat_id', '=', 'category.cat_id')
            ->select([
                'subcategory.*',
                'category.cat_name AS cat_name'
            ])
            ->get();
    }

    public function store()
    {
        DB::table('subcategory')->insert([
            'sub_name' => $this->sub_name,
            'cat_id' => $this->cat_id
        ]);
    }

    public function edit()
    {
        $subcategories = DB::table('subcategory')
            ->where('sub_id','=', $this->sub_id)
            ->get();
        return $subcategories;
    }

    public function updateSubcategory()
    {
        DB::table('subcategory')
            ->where('sub_id','=', $this->sub_id)
            ->update([
                'sub_name' => $this->sub_name,
                'cat_id' => $this->cat_id
            ]);
    }

    public function deleteSubcategory()
    {
        // Kiểm tra có tồn tại sản phẩm nào thuộc subcategory này hay không
        $isExistProductWithSubId = DB::table('product')
            ->where('sub_id','=', $this->sub_id)
            ->exists();

        if ($isExistProductWithSubId) {
            // Lấy ra tất cả id của sản phẩm thuộc subcategory này
            $prd_ids = DB::table('product')
                ->join('subcategory', 'product.sub_id', '=', 'subcategory.sub_id')
                ->select('product.prd_id')
                ->where('subcategory.sub_id','=', $this->sub_id)
                ->get();
            // Xóa hết version của sản phẩm thuộc subcategory này
            foreach ($prd_ids as $prd_id) {
                DB::table('version')
                    ->where('prd_id','=', $prd_id->prd_id)
                    ->delete();
            }
            // Xóa hết sản phẩm thuộc subcategory này
            DB::table('product')
                ->where('sub_id','=', $this->sub_id)
                ->delete();
            // Xóa subcategory này
            DB::table('subcategory')
                ->where('sub_id','=', $this->sub_id)
                ->delete();
        } else  { // Nếu không có sản phẩm nào thộc subcategory này thì xóa subcategory này luôn
            DB::table('subcategory')
                ->where('sub_id','=', $this->sub_id)
                ->delete();
        }
    }

}
