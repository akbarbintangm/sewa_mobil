<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_admins', function (Blueprint $table) {
            $table->bigIncrements('id_m_admin');
            $table->string('name_admin');
            $table->string('email_admin')->unique();
            $table->timestamp('email_admin_verified_at')->nullable();
            $table->string('password_admin');
            $table->text('profile_admin');
            $table->bigInteger('role_admin');
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
        Schema::dropIfExists('m_admins');
    }
}
