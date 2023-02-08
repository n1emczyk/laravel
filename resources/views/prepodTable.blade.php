<!DOCTYPE html>
<html lang="ru">
    <table class="table">
<thead>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styleTablee.css" rel="stylesheet">
<div class="blur"></div>
<div class="bottom1">
<a href="http://127.0.0.1:8000/">Главная</a>
<a href="about">О техникуме</a>
<a href="contact">Контакты</a>
<a href="login">И-20-1</a>
<a href="studs">Студенты</a>
</div>
    <title>Преподаватели</title>
    <h1><strong><center>Преподаватели АПТ<center></strong></h1>
    <tr>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Номер телефона</th>
        <th>Возраст</th>
        <th>Почта</th>
        <th>Предмет</th>
        <th>Стаж</th>
    </tr>
</thead>
<tbody>
    @foreach($data as $prepods)
    <tr>
        <td>{{ $prepods->Имя}}</td>
        <td>{{ $prepods->Фамилия}}</td>
        <td>{{ $prepods->НомерТелефона}}</td>
        <td>{{ $prepods->Возраст}}</td>
        <td>{{ $prepods->Почта}}</td>
        <td>{{ $prepods->Предмет}}</td>
        <td>{{ $prepods->Стаж}}</td>
    </tr>
    @endforeach
</tbody>
</table>
</html>
