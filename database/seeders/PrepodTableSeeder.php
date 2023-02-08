<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factory;
use App\Models\Prepod;
use App\Http\Controllers\PrepodController;
/*use Faker\Generator as Faker;*/
use Faker\Factory as Faker;

class PrepodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prepod::factory(10)->create();
    }
}
