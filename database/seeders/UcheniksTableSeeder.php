<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ucheniks;
use App\Http\Controllers\StudsController;
use Illuminate\Database\Seeder;

class UcheniksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ucheniks::factory(10)->create();
    }
}
