<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->string('title');
            $table->string('working_hours');
            $table->string('contract_type');
            $table->integer('salary_from');
            $table->integer('salary_to');
            $table->string('salary_period');
            $table->text('description')->nullable();
            $table->string('requirements')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('voivodeship')->nullable();
            $table->string('city')->nullable();
            $table->string('housing')->nullable();
            $table->string('hire')->nullable();
            $table->string('name_company')->nullable();
            $table->string('name');
            $table->string('surname');
            $table->string('email');
            $table->string('payment');
            $table->tinyInteger('display');
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
        Schema::dropIfExists('vacancies');
    }
}
