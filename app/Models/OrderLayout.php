<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class OrderLayout extends Model
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

    public function getOrders()
    {
        return DB::table('order')
            ->where('cus_id', '=', $this->cus_id)
            ->orderBy('order_id', 'desc')
            ->get();
    }

    public function getOrderDetail()
    {
        return DB::table('order_detail')
            ->join('version', 'order_detail.version_id', '=', 'version.version_id')
            ->join('product', 'version.prd_id', '=', 'product.prd_id')
            ->select([
                'order_detail.order_id AS order_id',
                'order_detail.quantity AS quantity',
                'version.version_name AS version_name',
                'version.current_price AS current_price',
                'version.old_price AS old_price',
                'product.prd_name AS prd_name',
                'product.prd_images AS prd_images'
            ])
            ->where('order_detail.order_id', '=', $this->order_id)
            ->get();
    }

    public function updateOrder()
    {
        return DB::table('order')
            ->where('order_id', '=', $this->order_id)
            ->update([
                'status' => $this->status
            ]);
    }

    public function cancelOrder()
    {
        return DB::table('order')
            ->where('order_id', '=', $this->order_id)
            ->update([
                'status' => $this->status
            ]);
    }
}
