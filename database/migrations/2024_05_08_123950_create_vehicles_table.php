<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_name');
            $table->string('model');
            $table->string('transmission');
            $table->string('drive');
            $table->string('engine_type');
            $table->string('engine_size');
            $table->string('fuel');
            $table->integer('year');
            $table->string('color');
            $table->integer('door');
            $table->integer('seats');
            $table->string('bodytype');
            $table->string('mileage');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('location');
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
        Schema::dropIfExists('vehicles');
    }
}
