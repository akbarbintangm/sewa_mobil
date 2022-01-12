<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_owners', function (Blueprint $table) {
            $table->bigIncrements('id_m_owner');
            $table->string('name_owner');
            $table->string('email_owner')->unique();
            $table->timestamp('email_owner_verified_at')->nullable();
            $table->string('password_owner');
            $table->text('profile_owner');
            $table->bigInteger('role_owner');
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
        Schema::dropIfExists('m_owners');
    }
}
