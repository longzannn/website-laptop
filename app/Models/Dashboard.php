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
        return DB::table('order_detail')
            ->join('order', 'order_detail.order_id', '=', 'order.order_id')
            ->join('customer', 'order.cus_id', '=', 'customer.cus_id')
            ->select(
                'order_detail.order_id AS order_id',
                'order_detail.code',
                'customer.cus_name',
                'order_detail.status',
                'order_detail.payment',
                'order.order_date',
                'order.total_price'
            )
            ->orderBy('order.order_date', 'DESC')
            ->get();
    }

}
