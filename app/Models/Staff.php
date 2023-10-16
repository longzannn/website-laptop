<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Staff extends Model
{
    use HasFactory;
    public $timestamps = false;
    const UPDATED_AT = null;

    public function index()
    {
        $staffs = DB::table('staff')->get();
        return $staffs;
    }

    public function store()
    {
        DB::table('staff')->insert([
            'staff_name' => $this->staff_name,
            'email' => $this->email,
            'staff_phone' => $this->staff_phone,
            'staff_address' => $this->staff_address,
            'password' => $this->password,
        ]);
    }

    public function edit()
    {
        $staffs = DB::table('staff')
            ->where('staff_id','=', $this->staff_id)
            ->get();
        return $staffs;
    }

    public function updateStaff()
    {
        DB::table('staff')
            ->where('staff_id','=', $this->staff_id)
            ->update([
                'staff_name' => $this->staff_name,
                'email' => $this->email,
                'staff_phone' => $this->staff_phone,
                'staff_address' => $this->staff_address,
                'password' => $this->password,
            ]);
    }

    public function deleteStaff()
    {
        DB::table('staff')
            ->where('staff_id','=', $this->staff_id)
            ->delete();
    }
}
