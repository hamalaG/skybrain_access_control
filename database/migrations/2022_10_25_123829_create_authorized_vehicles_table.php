<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authorized_vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('plate_number');
            $table->string('vehicle_type');
            $table->string('vehicle_model');
            $table->string('vehicle_owner');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authorized_vehicles');
    }
};
