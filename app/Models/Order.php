<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;

    public function getAllOrder()
    {
        return DB::table('order_detail')
            ->join('order', 'order_detail.order_id', '=', 'order.order_id')
            ->join('customer', 'order.cus_id', '=', 'customer.cus_id')
            ->join('staff', 'order.staff_id', '=', 'staff.staff_id')
            ->select(
                'order_detail.order_id AS order_id',
                'order_detail.code AS code',
                'customer.cus_name AS cus_name',
                'order_detail.status AS status',
                'order_detail.payment AS payment',
                'order.order_date AS order_date',
                'order.total_price AS total_price',
            )
            ->get();
    }
}
