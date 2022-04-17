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

            $table->string('name', 255)->index();
            $table->bigInteger('price')->index()->nullable();
            $table->text('description')->nullable();
            $table->string('preview')->nullable();

            $table->string('category', 25)->index()->nullable();
            $table->string('type', 50)->index();

            $table->string('city', 255)->indeX()->nullable();
            $table->string('district', 255)->index()->nullable();
            $table->string('location', 255)->index()->nullable();
            $table->double('area')->index()->nullable();
            $table->double('living_area')->index()->nullable();
            $table->tinyInteger('room_size')->index()->default(0)->nullable();
            $table->string('facing', 255)->index()->nullable();
            $table->tinyInteger('floor')->index()->nullable();
            $table->tinyInteger('floors')->index()->nullable();
            $table->string('condition', 255)->index()->nullable();
            $table->integer('year')->index()->nullable(); // Год постройки
            $table->string('wall_material', 255)->index()->nullable();
            $table->double('ceiling_height')->index()->nullable();
            $table->boolean('furniture')->index()->default(0);
            $table->boolean('parking')->index()->default(0);
            $table->string('bathroom', 255)->index()->nullable();

            $table->string('map_coords', 255)->nullable();
            $table->string('map_address', 255)->nullable();

            $table->boolean('sold')->default(false);

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
