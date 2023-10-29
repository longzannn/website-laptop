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
            'version_status' => $this->version_status,
        ]);
    }

    public function edit() {
        return DB::table('version')
            ->join('product', 'version.prd_id', '=', 'product.prd_id')
            ->join('subcategory', 'product.sub_id', '=', 'subcategory.sub_id')
            ->join('category', 'subcategory.cat_id', '=', 'category.cat_id')
            ->select(
                'product.prd_id AS prd_id',
                'product.prd_name AS prd_name',
                'product.sub_id AS sub_id',
                'subcategory.sub_name AS sub_name',
                'version.current_price AS current_price',
                'version.old_price AS old_price',
                'version.version_status AS version_status',
                'product.prd_images AS prd_images',
                'version.version_name AS version_name',
                'version.version_details AS version_details'
            )
            ->where('version.version_id', '=', $this->version_id)
            ->get();
    }

    public function updateVersion() {
        // Cập nhật thông tin version
        DB::table('version')
            ->where('version_id', '=', $this->version_id)
            ->update([
                'version_name' => $this->version_name,
                'version_details' => $this->version_details,
                'current_price' => $this->current_price,
                'old_price' => $this->old_price,
                'version_status' => $this->version_status,
            ]);

        // Truy vấn lại thông tin version sau khi cập nhật
        $updatedVersion = DB::table('version')
            ->where('version_id','=', $this->version_id)
            ->first();

        // Lấy giá trị prd_id từ bản ghi được cập nhật
        return $updatedVersion->prd_id;
    }

    public function delete() {
        $version = DB::table('version')
            ->where('version_id', '=', $this->version_id)
            ->select('prd_id')
            ->first();
        $prd_id = $version->prd_id;
        DB::table('version')
            ->where('version_id', '=', $this->version_id)
            ->delete();
        return $prd_id;
    }
}
