<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UcheniksFactory extends Factory
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
            'Возраст' => randomNumber(1),
            'Группа' => randomGroup(0),
            'Почта' => randomEmail(1),
            'СрБалл' => randomBall(2, 5),
            'Стипендия' => randomStip(0)
            ];
        }
    }
    
    function randomNumber(){
        return rand(16, 20);
    }
    
    function randomName(){
        $names = array("Дмитрий", "Тимур","Антон","Михаил","Юлиан");
        return $names[array_rand($names)];
    }
    
    function randomFam(){
        $fam = array("Шебулатов", "Ефимов","Фрицлер","Штурм","Рудаков");
        return $fam[array_rand($fam)];
    }
    
    function randomGroup(){
        $group = array("И-20-1", "И-19-1","Э-20-1","Н-20-1","И-21-1","М-21-1","И-22-1");
        return $group[array_rand($group)];
    }
    function randomEmail(){
        $group = array("studentapt@mail.ru", "studentinfor@mail.ru", "apt-angars@bk.ru", "aptstud@google.com", "aptangarsk@inbox.ru", "studentangarsk@mail.ru", "vihodezizpisy@yandex.ru", "angarskaptstudent@mail.ru");
        return $group[array_rand($group)];
    }
    
    function randomBall($min, $max){
        $ball = $min + mt_rand() / mt_getrandmax() * ($max - $min);
        return $ball;
    }
    
    function randomStip(){
        $group = array("800", "1200", "1800");
        return $group[array_rand($group)];
    }
