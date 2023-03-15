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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('serial')->default(1);
            $table->string('category');
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->string('brand')->nullable();
            $table->text('video_url')->nullable();
            $table->string('sale_price');
            $table->string('regular_price')->nullable();
            $table->string('discount')->nullable();
            $table->text('inside_box')->nullable();
            $table->string('stock')->nullable();
            $table->text('warranty_type')->nullable();
            $table->text('warranty_period')->nullable();
            $table->text('warranty_policy')->nullable();
            $table->string('package_weight')->nullable();
            $table->string('package_dimensions')->nullable();
            $table->string('dangerous_goods')->nullable();
            $table->string('image_one')->nullable();
            $table->string('image_two')->nullable();
            $table->string('image_three')->nullable();
            $table->string('image_four')->nullable();
            $table->string('image_five')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
