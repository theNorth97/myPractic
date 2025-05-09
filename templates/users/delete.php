<!DOCTYPE html>
<html>

<head>
    <title>удалить пользователя</title>
</head>

<body>
    <h1>Удалить пользователя</h1>

    <form method="POST" action="/public/users/delete.php">
        <div>
            <label>Имя пользователя:</label>
            <input type="text" name="username" required>
        </div>

        <button type="submit">Добавить</button>
    </form>

    <a href="/public/users/list.php">Назад к списку</a>
</body>

</html>