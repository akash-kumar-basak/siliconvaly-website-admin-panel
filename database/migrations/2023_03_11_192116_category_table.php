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
        Schema::create('category_one', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('serial');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });

        Schema::create('category_two', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('serial');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
            $table->foreignId('category_one_id')->constrained('category_one', 'id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_one');
        Schema::dropIfExists('category_two');
    }
};
