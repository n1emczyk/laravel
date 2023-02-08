<!DOCTYPE html>
<html lang="ru">
    <table class="table">
<thead>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styleTable.css" rel="stylesheet">
    <div class="blur"></div>
<div class="bottom1">
<a href="http://127.0.0.1:8000/">Главная</a>
<a href="about">О техникуме</a>
<a href="contact">Контакты</a>
<a href="login">И-20-1</a>
<a href="prepod">Преподаватели</a>
</div>
    <title>Студенты</title>
    <h1><strong><center>Студенты АПТ<center></strong></h1>
    <tr>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Возраст</th>
        <th>Группа</th>
        <th>Почта</th>
        <th>Средний Балл</th>
        <th>Стипендия</th>
    </tr>
</thead>
<tbody>
    @foreach($studs as $stud)
    <tr>
        <td>{{ $stud->Имя}}</td>
        <td>{{ $stud->Фамилия}}</td>
        <td>{{ $stud->Возраст}}</td>
        <td>{{ $stud->Группа}}</td>
        <td>{{ $stud->Почта}}</td>
        <td>{{ $stud->СрБалл}}</td>
        <td>{{ $stud->Стипендия}}</td>
    </tr>
    @endforeach
</tbody>
</table>
</html>
