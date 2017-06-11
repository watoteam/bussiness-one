<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_users', function (Blueprint $table) {
            $table->increments('UserID');
            $table->string('Username');
            $table->string('Full_Name');
            $table->string('password');
            $table->integer('pswd_auth');
            $table->integer('otp_auth');
            $table->integer('bio_auth');
            $table->string('mobile_no');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('rights_template_id');
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
        Schema::dropIfExists('t_users');
    }
}
