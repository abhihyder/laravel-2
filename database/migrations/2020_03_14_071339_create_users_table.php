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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('user');
            $table->string('email');
            $table->string('password');
            $table->string('gender');
            $table->string('birthday');
            $table->string('photo');
            $table->tinyInteger('email_verified')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('email_verification_token');
            $table->timestamp('last_login')->nullable();
            $table->rememberToken();
            $table->softDeletes();
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
