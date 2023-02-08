<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factory;
use App\Models\Studs;
use App\Http\Controllers\StudsController;
/*use Faker\Generator as Faker;*/
use Faker\Factory as Faker;


class StudsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        studs::factory(10)->create();
    }
}


        /*$factory = factory(Studs::class, 10)->create();*/
        /*Studs::factory(3)->create();*/
       /*Studs::create([
        'Имя' => 'Антон',
        'Фамилия' => 'Фрицлер',
        'Возраст' => '19',
        'Группа' => 'И-20',
        'Почта' => 'antonfricler@mail.ru',
        'СрБалл' => '4.10',
        'Стипендия' => '1800',
        ]);*/