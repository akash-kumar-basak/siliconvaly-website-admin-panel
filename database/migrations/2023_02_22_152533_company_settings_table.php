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
            $table-> bigIncrements("id");
            $table -> string('favicon');
            $table -> string('name');
            $table -> string('title');
            $table -> string('phone_one');
            $table -> string('phone_two');
            $table -> string('hot_line');
            $table -> string('primary_email');
            $table -> string('secondary_email');
            $table -> string('primary_address');
            $table -> string('company_logo');
            $table -> string('website');
            $table -> string('bin_no');
            $table -> string('google_map');
            $table -> string('facebook_page_id');
            $table -> string('secondary_address');
            $table -> string('meta_keyword');
            $table -> string('meta_description');
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
