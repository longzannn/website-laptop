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
        return DB::table('order')
            ->join('customer', 'order.cus_id', '=', 'customer.cus_id')
            ->select(
                'order.order_id AS order_id',
                'order.code',
                'customer.cus_name',
                'order.status',
                'order.order_date',
                'order.total_price',
            )
            ->orderBy('order.order_id', 'DESC')
            ->paginate(5);
    }

    public function getOrderById($order_id)
    {
        return DB::table('order')
            ->join('customer', 'order.cus_id', '=', 'customer.cus_id')
            ->select(
                'order.order_id AS order_id',
                'order.code',
                'customer.cus_name',
                'customer.cus_phone',
                'customer.cus_address',
                'customer.email',
                'order.status',
                'order.order_date',
                'order.total_price',
            )
            ->where('order.order_id', '=', $order_id)
            ->first();
    }

    public function getOrderDetailById($order_id) {
        return DB::table('order_detail')
            ->join('version', 'order_detail.version_id', '=', 'version.version_id')
            ->join('product', 'version.prd_id', '=', 'product.prd_id')
            ->select(
                'product.prd_name AS prd_name',
                'product.prd_images AS prd_images',
                'version.version_name AS version_name',
                'order_detail.quantity AS quantity',
                'order_detail.price AS price',
            )
            ->where('order_detail.order_id', '=', $order_id)
            ->get();
    }

    public function updateOrder() {
        return DB::table('order')
            ->where('order_id', '=', $this->order_id)
            ->update([
                'staff_id' => $this->staff_id,
                'status' => $this->status,
            ]);
    }
}
