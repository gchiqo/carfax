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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');

            $table->string('name', 511)->nullable();
            $table->string('code')->nullable();
            $table->string('country')->nullable();
            $table->string('firm')->nullable();
            $table->string('model')->nullable();
            $table->string('engine')->nullable();
            $table->string('metersRun')->nullable();
            $table->string('petrol')->nullable();
            $table->string('driveShaft')->nullable();
            $table->string('pullingWheels')->nullable();
            $table->string('year')->nullable();
            $table->string('weel')->nullable();
            $table->string('price')->nullable();
            $table->string('currency')->default('GEL');    //ფასი


            $table->string('vin')->nullable();
            $table->string('vehicleType')->nullable();
            $table->string('cylinders')->nullable();
            $table->string('transmission')->nullable();
            $table->string('description', 2047)->nullable();

            $table->string('color')->nullable();
            $table->string('salonColor')->nullable();
            $table->string('Hatch')->nullable();
            $table->string('Panorama')->nullable();
            $table->string('leather')->nullable();
            $table->string('multimedia')->nullable();
            $table->string('camera')->nullable();

            $table->string('o_name')->nullable();
            $table->string('o_phone')->nullable();
            $table->string('o_city')->nullable();

            $table->string('vip')->nullable();

            $table->string('status')->default(0);

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
