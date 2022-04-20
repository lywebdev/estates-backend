<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstatesOptionsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estate_bathrooms', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->index();
        });

        Schema::create('estate_conditions', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->index();
        });

        Schema::create('estate_locations', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->index();
        });

        Schema::create('estate_furniture', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->index();
        });

        Schema::create('estate_heating', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->index();
        });

        Schema::create('estate_parking', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->index();
        });

        Schema::create('estate_purposes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->index();
        });

        Schema::create('estate_sewage', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->index();
        });

        Schema::create('estate_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->index();
        });

        Schema::create('estate_wall_materials', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estate_bathrooms');
        Schema::dropIfExists('estate_conditions');
        Schema::dropIfExists('estate_locations');
        Schema::dropIfExists('estate_furniture');
        Schema::dropIfExists('estate_heating');
        Schema::dropIfExists('estate_parking');
        Schema::dropIfExists('estate_purposes');
        Schema::dropIfExists('estate_sewage');
        Schema::dropIfExists('estate_statuses');
        Schema::dropIfExists('estate_wall_materials');
    }
}
