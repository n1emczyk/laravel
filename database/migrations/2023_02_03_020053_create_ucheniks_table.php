<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ucheniks', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->string('Имя');
            $table->string('Фамилия');
            $table->Integer('Возраст');
            $table->string('Группа');
            $table->string('Почта');
            $table->date('Дата_рождения');
            /*$table->timestamps();*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ucheniks');
    }
};
