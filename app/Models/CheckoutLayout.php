<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CheckoutLayout extends Model
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

    public function storeCustomer() {
        return DB::table('customer')->insertGetId([
            'cus_name' => $this->cus_name,
            'cus_phone' => $this->cus_phone,
            'cus_email' => $this->cus_email,
            'cus_address' => $this->cus_address
        ]);
    }

    public function storeOrder() {
        return DB::table('order')->insertGetId([
            'cus_id' => $this->cus_id,
            'staff_id' => $this->staff_id,
            'total_price' => $this->total_price,
            'order_date' => $this->order_date
        ]);
    }

    public function storeOrderDetail() {
        return DB::table('order_detail')->insert([
            'order_id' => $this->order_id,
            'payment' => $this->payment,
            'status' => $this->status,
            'code' => $this->code,
        ]);
    }
}
