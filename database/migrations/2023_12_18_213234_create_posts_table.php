<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('model');
            $table->text('transmission');
            $table->text('drive');
            $table->text('engine_type');
            $table->text('engine_size');
            $table->text('fuel');
            $table->text('year');
            $table->text('chessis');
            $table->text('color');
            $table->text('doors');
            $table->text('seats');
            $table->text('price');
            $table->text('body_type');
            $table->text('mileage');
            $table->text('status');
            $table->text('condition');
            $table->json('image')->nullable(); // Change the column type to json
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
