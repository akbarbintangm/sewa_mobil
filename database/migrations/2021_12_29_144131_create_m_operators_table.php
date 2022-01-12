<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMOperatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_operators', function (Blueprint $table) {
            $table->bigIncrements('id_m_operator');
            $table->string('name_operator');
            $table->string('email_operator')->unique();
            $table->timestamp('email_operator_verified_at')->nullable();
            $table->string('password_operator');
            $table->text('profile_operator');
            $table->bigInteger('role_operator');
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
        Schema::dropIfExists('m_operators');
    }
}
