<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Заявка на электромонтаж</title>
</head>

<body>
    <h1>Создать заявку</h1>
    <form action="create_request.php" method="POST">
        <label>Тип объекта:</label>
        <select name="type">
            <option value="Квартира">Квартира</option>
            <option value="Дом">Дом</option>
            <option value="Гараж">Гараж</option>
            <option value="Офис">Офис</option>
        </select><br><br>

        <label>Адрес:</label>
        <input type="text" name="address" required><br><br>

        <label>Телефон:</label>
        <input type="text" name="phone" required><br><br>

        <button type="submit">Отправить заявку</button>
    </form>
</body>

</html>

<?php
// Далее заберу логику этой вьюхи и переделаю все под неё.
