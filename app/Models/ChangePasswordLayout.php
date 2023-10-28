<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ChangePasswordLayout extends Model
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

    public function updateCustomer() {
        DB::table('customer')
            ->where('cus_id', '=', $this->cus_id)
            ->update([
                'password' => bcrypt($this->password)
            ]);
        return DB::table('customer')
            ->where('cus_id', '=', $this->cus_id)
            ->first();
    }
}
