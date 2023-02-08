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
        Schema::create('prepods', function (Blueprint $table) {
            $table->BigIncrements('ID');
            $table->string('Имя');
            $table->string('Фамилия');
            $table->char('НомерТелефона');
            $table->Integer('Возраст');
            $table->string('Почта');
            $table->string('Предмет');
            $table->Integer('Стаж');
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
        Schema::dropIfExists('prepods');
    }
};
