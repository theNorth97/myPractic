<!DOCTYPE html>
<html>

<head>
    <title>Добавить пользователя</title>
</head>

<body>
    <h1>Добавить нового пользователя</h1>


    <form method="POST" action="/public/users/create.php">
        <div>
            <label>Имя пользователя:</label>
            <input type="text" name="username" required>
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <button type="submit">Добавить</button>
    </form>

    <a href="/public/users/list.php">Назад к списку</a>
</body>

</html>