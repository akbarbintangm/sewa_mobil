<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_users', function (Blueprint $table) {
            $table->bigIncrements('id_m_user');
            $table->string('name_user');
            $table->string('email_user')->unique();
            $table->timestamp('email_user_verified_at')->nullable();
            $table->string('password_user');
            $table->text('profile_user');
            $table->bigInteger('role_user');
            $table->rememberToken();
            $table->bigInteger('created_by');
            $table->bigInteger('updated_by');
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
        Schema::dropIfExists('m_users');
    }
}
