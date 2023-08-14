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
        Schema::create('part_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('part_id');
            $table->string('firm');     //რა ფირმის
            $table->string('model');    //რა მოდელის
            $table->string('fyear');    //რომელ წელიდან მანქანისაა
            $table->string('tyear');    //რომელ წელამდე მანქანისაა

            $table->foreign('part_id')->references('id')->on('parts')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('part_models');
    }
};
