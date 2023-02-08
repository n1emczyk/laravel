<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Prepod;
use Illuminate\Database\Seeder;
use Illuminate\Database\Seeders\PrepodTableSeeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Http\Controllers\PrepodController;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prepod>
 */
class PrepodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Имя' => randomName(0),
            'Фамилия' => randomFam(0),
            'НомерТелефона' => randomNomer(0),
            'Возраст' => randomVozr(0),
            'Почта' => randomEmail(0),
            'Предмет' => randomPredmet(0),
            'Стаж' => randomNumber(0)
        ];
    }
    }
    function randomNumber(){
        return rand(1, 45);
    }
    
    function randomName(){
        $names = array("Дмитрий", "Тимур","Антон","Михаил","Юлиан", "Юлия", "Наталья", "Алексей");
        return $names[array_rand($names)];
    }
    
    function randomFam(){
        $fam = array("Шебулатов", "Ефимов","Фрицлер","Штурм","Хмель", "Якутович");
        return $fam[array_rand($fam)];
    }
    
         function randomNomer(){
        $prefix = ['+7', '8'];
         $phone = $prefix[rand(0, 1)] . rand(100, 999) . rand(1000000, 9999999);
         return $phone;
    }

    function randomEmail(){
        $email = array("prepodapt@mail.ru", "prepodinfor@mail.ru", "aptprepod-angarsk@bk.ru", "aptprepod@google.com", "prepodaptangarsk@inbox.ru", "studentangarskprepod@mail.ru", "prepod@yandex.ru", "angarskapt.prepod@mail.ru");
        return $email[array_rand($email)];
    }
    
    function randomPredmet(){
        $predmet = array("Математика", "Черчение", "Русский язык", "Труды", "Химия", "Информатика", "Музыка", "Физика");
        return $predmet[array_rand($predmet)];
    }

    function randomVozr(){
        return rand(25, 65);
    }