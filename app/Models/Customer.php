<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    use HasFactory;

    public function index()
    {
        $customers = DB::table('customer')->get();
        return $customers;
    }

    public function store()
    {
        DB::table('customer')->insert([
            'cus_name' => $this->cus_name,
            'cus_email' => $this->cus_email,
            'cus_phone' => $this->cus_phone,
            'cus_address' => $this->cus_address,
        ]);
    }

    public function edit()
    {
        $customers = DB::table('customer')
            ->where('cus_id', $this->cus_id)
            ->get();
        return $customers;
    }

    public function updateCustomer()
    {
        DB::table('customer')
            ->where('cus_id', $this->cus_id)
            ->update([
                'cus_name' => $this->cus_name,
                'cus_email' => $this->cus_email,
                'cus_phone' => $this->cus_phone,
                'cus_address' => $this->cus_address,
            ]);
    }

    public function deleteCustomer()
    {
        DB::table('customer')
            ->where('cus_id', $this->cus_id)
            ->delete();
    }
}
