<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id('shop_id');
            $table->unsignedBigInteger('users_id');
            $table->string('shop_name');
            $table->string('shop_description');
            $table->string('shop_address');
            $table->timestamps();

            // Foreign key
            $table->foreign('users_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
//Migrate Specific
// php artisan migrate --path=/database/migrations/2023_09_18_063041_create_shop_table.php 
