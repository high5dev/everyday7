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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('contact_email');
            $table->string('business_name');
            $table->string('business_address');
            $table->string('business_city');
            $table->string('business_state');
            $table->string('business_zip');
            $table->string('business_phone');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('tiktok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
