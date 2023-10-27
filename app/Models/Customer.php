<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customer';
    public $timestamps = false;
    const UPDATED_AT = null;

    public function index()
    {
        return DB::table('customer')->paginate(5);
    }

    public function store()
    {
        DB::table('customer')->insert([
            'cus_name' => $this->cus_name,
            'email' => $this->email,
            'cus_phone' => $this->cus_phone,
            'cus_address' => $this->cus_address,
        ]);
    }

    public function edit()
    {
        return DB::table('customer')
            ->where('cus_id','=', $this->cus_id)
            ->get();
    }

    public function updateCustomer()
    {
        DB::table('customer')
            ->where('cus_id','=', $this->cus_id)
            ->update([
                'cus_name' => $this->cus_name,
                'email' => $this->email,
                'cus_phone' => $this->cus_phone,
                'cus_address' => $this->cus_address,
            ]);
    }

//    public function deleteCustomer()
//    {
//        DB::table('customer')
//            ->where('cus_id','=', $this->cus_id)
//            ->delete();
//    }

//    public function getCusIdByOrderId($order_id)
//    {
//        $order = DB::table('order')
//            ->where('order_id', '=', $order_id)
//            ->first();
//        return $order->cus_id;
//    }
}
