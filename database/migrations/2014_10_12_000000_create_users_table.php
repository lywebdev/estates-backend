<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->string('photo')->nullable();
            $table->string('phone')->index()->nullable();
            $table->string('phone_double')->nullable();
            $table->string('surname')->nullable();
            $table->string('patronymic')->nullable();

            $table->bigInteger('tg_chat_id')->unique()->nullable();
            $table->text('api_hash')->nullable();
            $table->text('api_token')->nullable();
            $table->text('finger_data')->nullable();

            $table->integer('age')->index()->nullable();
            $table->string('gender')->index()->nullable();
            $table->string('auto')->default(0);
            $table->text('about')->nullable();
            $table->string('role')->default(\App\Models\User::ROLES['user']['name']);

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
