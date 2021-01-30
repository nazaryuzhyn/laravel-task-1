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
            $table->string('role');
            $table->string('name');
            $table->string('surname');
            $table->string('phone');
            $table->string('name_company')->nullable();
            $table->string('nip')->nullable();
            $table->string('kraz')->nullable();
            $table->string('voivodeship')->nullable();
            $table->string('city')->nullable();
            $table->string('street')->nullable();
            $table->string('house_number')->nullable();
            $table->string('office_number')->nullable();
            $table->string('postal_code')->nullable();
            $table->text('description')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('access')->nullable();
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
