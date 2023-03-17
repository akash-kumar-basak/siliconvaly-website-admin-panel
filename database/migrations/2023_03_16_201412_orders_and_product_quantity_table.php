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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrains();
            $table->foreignId('customer_id')->constrains();
            $table->string('goods_delivery_address');
            $table->string('order_time');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
        Schema::create('order_product_quantitys', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrains();
            $table->foreignId('product_id')->constrains();
            $table->string('product_quantity');
            $table->timestamps();
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_product_quantitys');
        Schema::dropIfExists('orders');
    }
};
