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
        Schema::create('parts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('part');     //რა ნაწილი mypartidan
            $table->string('condition'); //ნაწილის (ახალ/მეორადი)
            $table->string('description', 2047); //აღწერა
            $table->string('price');    //ფასი
            $table->string('currency')->default('GEL');    //ფასი

            $table->string('o_name')->nullable();
            $table->string('o_phone')->nullable();
            $table->string('o_city')->nullable();

            $table->integer('vip')->nullable();    //ფასი


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }






    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parts');
    }
};
