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
        Schema::create('studs', function (Blueprint $table) {
            $table->BigIncrements('ID');
            $table->string('Имя');
            $table->string('Фамилия');
            $table->BigInteger('Возраст');
            $table->string('Группа');
            $table->string('Почта');
            $table->float('СрБалл');
            $table->BigInteger('Стипендия');
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
        Schema::dropIfExists('studs');
    }
};
