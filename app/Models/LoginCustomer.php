<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginCustomer extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use HasFactory;
    protected $table = 'customer';
    public $timestamps = false;
    use Authenticatable;
}
