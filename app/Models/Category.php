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
        $categories = DB::table('category')->get();
        return $categories;
    }

    public function store()
    {
        DB::table('category')->insert([
            'cat_name' => $this->cat_name
        ]);
    }

    public function edit()
    {
        $categories = DB::table('category')
            ->where('cat_id', $this->cat_id)
            ->get();
        return $categories;
    }

    public function updateCategory()
    {
        $categories = DB::table('category')
            ->where('cat_id', $this->cat_id)
            ->update([
                'cat_name' => $this->cat_name
            ]);
        return $categories;
    }
}
