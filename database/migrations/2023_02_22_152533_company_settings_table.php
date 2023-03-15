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
        Schema::create("company_setting", function (Blueprint $table){
            $table->id();
            $table -> string('favicon')->nullable();
            $table -> string('name')->nullable();
            $table -> string('title')->nullable();
            $table -> string('phone_one')->nullable();
            $table -> string('phone_two')->nullable();
            $table -> string('hotline')->nullable();
            $table -> string('email_one')->nullable();
            $table -> string('email_two')->nullable();
            $table -> string('address_one')->nullable();
            $table -> string('address_two')->nullable();
            $table -> string('company_logo')->nullable();
            $table -> string('website')->nullable();
            $table -> string('bin_no')->nullable();
            $table -> string('google_map')->nullable();
            $table -> string('facebook_page_id')->nullable();
            $table -> string('meta_keyword')->nullable();
            $table -> string('meta_description')->nullable();
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_setting');
    }
};
