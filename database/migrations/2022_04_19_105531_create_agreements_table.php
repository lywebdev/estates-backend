<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgreementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agreements', function (Blueprint $table) {
            $table->id();

            $table->string('type', 255)->index();
            $table->string('subtype', 255)->index()->nullable();

            $table->string('date')->nullable();
            $table->string('time')->nullable();

            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('patronymic')->nullable();

            $table->string('iin', 50)->index()->nullable();
            $table->string('estate_address')->nullable();
            $table->string('registration_address')->nullable();
            $table->string('living_address')->nullable();
            $table->string('agreement_end_date')->nullable();
            $table->bigInteger('commission')->default(0)->nullable();
            $table->string('phone')->nullable();

            $table->json('third_parties')->nullable();
            $table->json('similar_objects')->nullable();
            $table->json('package')->nullable();
            $table->string('sms')->nullable();

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
        Schema::dropIfExists('agreements');
    }
}
