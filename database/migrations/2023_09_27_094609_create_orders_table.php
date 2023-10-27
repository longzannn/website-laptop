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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->text('code');
            $table->text('order_date');
            $table->text('status');
            $table->text('payment');
            $table->float('total_price');
            $table->foreignId('staff_id')->nullable()->constrained('staff');
            $table->foreignId('cus_id')->nullable()->constrained('customer');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
