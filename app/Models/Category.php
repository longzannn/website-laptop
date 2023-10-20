<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    public function index()
    {
        return DB::table('category')->paginate(5);
    }

    public function getCategories() {
        return DB::table('category')->get();
    }

    public function store()
    {
        DB::table('category')->insert([
            'cat_name' => $this->cat_name
        ]);
    }

    public function edit()
    {
        return DB::table('category')
            ->where('cat_id','=', $this->cat_id)
            ->get();
    }

    public function updateCategory()
    {
        DB::table('category')
            ->where('cat_id','=', $this->cat_id)
            ->update([
                'cat_name' => $this->cat_name
            ]);
    }

    public function deleteCategory()
    {
        // Kiểm tra có tồn tại subcategory nào thuộc category này hay không
        $isExistSubcategoryWithCatId = DB::table('subcategory')
            ->where('cat_id','=', $this->cat_id)
            ->exists();

        if ($isExistSubcategoryWithCatId) { // Nếu có thì xóa hết subcategory đó trước
            $sub_ids = DB::table('subcategory')
                ->join('category', 'subcategory.cat_id', '=', 'category.cat_id')
                ->select('subcategory.sub_id')
                ->where('category.cat_id','=', $this->cat_id)
                ->get();
            // Xóa hết version của sản phẩm đó
            foreach ($sub_ids as $sub_id) {
                $obj = new Subcategory();
                $obj->sub_id = $sub_id->sub_id;
                $obj->deleteSubcategory();
            }
        }

        // Xóa hết subcategory thuộc category này
        DB::table('category')
            ->where('cat_id','=', $this->cat_id)
            ->delete();
    }
}
