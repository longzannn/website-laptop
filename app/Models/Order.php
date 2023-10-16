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
            ->select(
                'order_detail.order_id AS order_id',
                'order_detail.code',
                'customer.cus_name',
                'order_detail.status',
                'order_detail.payment',
                'order.order_date',
                'order.total_price'
            )
            ->get();

    }

    public function getOrderById($order_id)
    {
        return DB::table('order_detail')
            ->join('order', 'order_detail.order_id', '=', 'order.order_id')
            ->join('customer', 'order.cus_id', '=', 'customer.cus_id')
            ->select(
                'order.order_id AS order_id',
                'order_detail.code AS code',
                'customer.cus_name AS cus_name',
                'customer.cus_address AS cus_address',
                'customer.cus_phone AS cus_phone',
                'customer.cus_email AS cus_email',
                'order_detail.status AS status',
                'order_detail.payment AS payment',
                'order.order_date AS order_date',
                'order.total_price AS total_price'
            )
            ->where('order_detail.order_id', '=', $order_id)
            ->first();
    }

    public function updateOrderDetail($order_id, $status, $payment) {
        return DB::table('order_detail')
            ->where('order_id', '=', $order_id)
            ->update([
                'status' => $status,
                'payment' => $payment,
            ]);
    }

    public function updateOrder() {
        return DB::table('order')
            ->where('order_id', '=', $this->order_id)
            ->update([
                'staff_id' => $this->staff_id,
            ]);
    }

    public function deleteOrderDetail($order_id) {
        return DB::table('order_detail')
            ->where('order_id', '=', $order_id)
            ->delete();
    }

    public function deleteOrder($order_id) {
        $cus_id = DB::table('order')
            ->where('order_id', '=', $order_id)
            ->select('cus_id')
            ->first();
        DB::table('order')
            ->where('order_id', '=', $order_id)
            ->delete();
        return $cus_id;
    }
}
