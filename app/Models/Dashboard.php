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

    public function getAllOrder()
    {
        return DB::table('order')
            ->join('customer', 'order.cus_id', '=', 'customer.cus_id')
            ->select(
                'customer.cus_name',
                'order.order_date',
                'order.total_price'
            )
            ->orderBy('order.order_date', 'DESC')
            ->limit(15)
            ->get();
    }

}
