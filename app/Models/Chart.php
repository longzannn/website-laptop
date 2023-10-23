<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Chart extends Model
{
    use HasFactory;

    public function orderChart() {
        return DB::table('order')
            ->select(DB::raw('MONTH(order_date) as month'), DB::raw('COUNT(*) as count'))
            ->groupBy(DB::raw('month'))
            ->orderBy('month')
            ->get();
    }
}
