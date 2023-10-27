<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('version', function (Blueprint $table) {
            $table->id();
            $table->text('version_name');
            $table->foreignId('prd_id')->constrained('product');
            $table->text('version_details');
            $table->float('old_price');
            $table->float('current_price');
            $table->float('quantity');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('version');
    }
};
