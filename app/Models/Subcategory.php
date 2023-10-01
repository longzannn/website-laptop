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
        $subcategories = DB::table('subcategory')
            ->join('category', 'subcategory.cat_id', '=', 'category.cat_id')
            ->select([
                'subcategory.*',
                'category.cat_name AS cat_name'
            ])
            ->get();
        return $subcategories;
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
            ->where('sub_id', $this->sub_id)
            ->get();
        return $subcategories;
    }

    public function updateSubcategory()
    {
        DB::table('subcategory')
            ->where('sub_id', $this->sub_id)
            ->update([
                'sub_name' => $this->sub_name,
                'cat_id' => $this->cat_id
            ]);
    }

    public function deleteSubcategory()
    {
        DB::table('subcategory')
            ->where('sub_id', $this->sub_id)
            ->delete();
    }
}