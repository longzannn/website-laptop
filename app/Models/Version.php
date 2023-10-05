<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Version extends Model
{
    use HasFactory;

    public function store()
    {
        DB::table('version')->insert([
            'prd_id' => $this->prd_id,
            'version_name' => $this->version_name,
            'version_details' => $this->version_details,
            'current_price' => $this->current_price,
            'old_price' => $this->old_price,
        ]);
    }
}
