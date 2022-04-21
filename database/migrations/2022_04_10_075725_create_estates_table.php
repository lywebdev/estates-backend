<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estates', function (Blueprint $table) {
            $table->id();

            $table->string('name', 255)->index()->nullable();
            $table->bigInteger('price')->index()->nullable();
            $table->text('description')->nullable();
            $table->string('preview')->nullable();

            $table->string('category', 50)->index()->nullable();

            $table->bigInteger('user_id')->nullable();

            $table->bigInteger('city_id')->nullable();
            $table->bigInteger('district_id')->nullable();

            $table->integer('condition_id')->nullable();
            $table->integer('parking_id')->nullable();
            $table->integer('bathroom_id')->nullable();
            $table->integer('wall_material_id')->nullable();
            $table->integer('furniture_id')->nullable();
            $table->integer('purpose_id')->nullable();
            $table->integer('heating_id')->nullable();
            $table->integer('sewage_id')->nullable();
            $table->integer('status_id')->nullable();
            $table->integer('estate_location_id')->nullable();

            $table->string('location', 255)->index()->nullable();
            $table->double('area')->index()->nullable();
            $table->double('living_area')->index()->nullable();
            $table->double('kitchen_area')->index()->nullable();
            $table->tinyInteger('room_size')->index()->default(0)->nullable();
            $table->string('facing', 255)->index()->nullable();
            $table->tinyInteger('floor')->index()->nullable();
            $table->tinyInteger('floors')->index()->nullable();
            $table->integer('year')->index()->nullable(); // Год постройки
            $table->double('ceiling_height')->index()->nullable();

            $table->boolean('zd_deadend')->nullable();
            $table->boolean('parking')->nullable();
            $table->boolean('furniture')->nullable();

            $table->string('room_number')->nullable();
            $table->string('house_number')->nullable();
            $table->string('cadastral_number')->nullable();
            $table->string('intersection_streets')->nullable();
            $table->string('street')->nullable();
            $table->string('estate_number')->nullable();

            $table->string('owner_name')->nullable();
            $table->string('owner_phone')->nullable();
            $table->string('owner_phone2')->nullable();
            $table->string('owner_phone3')->nullable();

            $table->string('electricity_max')->nullable();
            $table->string('layout_path')->nullable();

            $table->string('map_coords', 255)->nullable();
            $table->string('map_address', 255)->nullable();

            $table->boolean('sold')->default(false);
            $table->boolean('status')->default(true);

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
        Schema::dropIfExists('estates');
    }
}
