<!DOCTYPE html>
<html>

<head>
    <title>Список пользователей</title>
    <style>
        .error {
            color: red;
        }

        .success {
            color: green;
        }
    </style>
</head>

<body>
    <h1>Пользователи</h1>

    <?php if (isset($_GET['success'])): ?>
        <div class="success">✅ Пользователь успешно добавлен!</div>
    <?php endif; ?>

    <?php if (isset($error)): ?>
        <div class="error">❌ <?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <?php foreach ($users as $user): ?>
        <div>
            ID: <?= htmlspecialchars($user['id']) ?>,
            Имя: <?= htmlspecialchars($user['username']) ?>,
            Email: <?= htmlspecialchars($user['email']) ?>

            <form method="POST" action="/public/users/delete.php" style="display: inline;">
                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                <button type="submit" onclick="return confirm('Точно удалить?')">
                    Удалить
                </button>
            </form>
        </div>
    <?php endforeach; ?>

    <a href="/public/users/create.php">Добавить пользователя</a>

</body>

</html>