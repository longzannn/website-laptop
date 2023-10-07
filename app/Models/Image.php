<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Image extends Model
{
    use HasFactory;

    public function store()
    {
        return DB::table('image')->insertGetId([
            'img_1' => $this->img_1,
            'img_2' => $this->img_2,
            'img_3' => $this->img_3,
            'img_4' => $this->img_4,
            'img_5' => $this->img_5,
        ]);
    }

    public function updateImage() {
        DB::table('image')
            ->where('img_id', '=', $this->img_id)
            ->update([
                'img_1' => $this->img_1,
                'img_2' => $this->img_2,
                'img_3' => $this->img_3,
                'img_4' => $this->img_4,
                'img_5' => $this->img_5,
            ]);
    }

    public function delete() {
        DB::table('image')
            ->where('img_id', '=', $this->img_id)
            ->delete();
    }
}
