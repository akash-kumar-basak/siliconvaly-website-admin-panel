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
        Schema::create('customers', function(Blueprint $table)
        {
            $table -> id();
            $table -> string('first_name')->nullable();
            $table -> string('last_name')->nullable();
            $table -> string('email')->unique()->nullable();
            $table -> string('phone')->unique()->nullable();
            $table -> string('password')->nullable();
            $table -> string('country')->nullable();
            $table -> string('district')->nullable();
            $table -> string('post_code')->nullable();
            $table -> string('street')->nullable();
            $table -> string('house_number')->nullable();
            $table -> string('image')->nullable();
            $table -> string('otp')->nullable();
            $table -> tinyInteger('status')->default(1);
            $table -> timestamps();
        }
        
    );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
