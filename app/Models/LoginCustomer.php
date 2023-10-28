<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LoginCustomer extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use HasFactory;
    protected $table = 'customer';
    public $timestamps = false;
    use Authenticatable;

    public function createCustomer() {
        return DB::table('customer')->insert([
            'email' => $this->email,
            'password' => $this->password,
        ]);
    }
}
