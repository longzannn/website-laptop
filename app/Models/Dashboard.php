<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dashboard extends Model
{
    use HasFactory;

    public function getProductCount()
    {
        return DB::table('product')->count();
    }

    public function getCategoryCount()
    {
        return DB::table('category')->count();
    }

    public function getSubcategoryCount()
    {
        return DB::table('subcategory')->count();
    }

    public function getCustomerCount()
    {
        return DB::table('customer')->count();
    }

    public function getStaffCount()
    {
        return DB::table('staff')->count();
    }

}
