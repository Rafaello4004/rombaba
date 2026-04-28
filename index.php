<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parapa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Форма регистрации</h1>

    <form action="action.php" method="post">
        <p>
            <label for="name">Имя пользователя:</label>
            <input type="text" id="name" name="name" placeholder="Введите имя" required>
        </p>
        <p>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="Введите e-mail" required>
        </p>
        <p>
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" placeholder="Введите пароль" required>
        </p>
        <p>
            <label for="password">Подтвердите пароль:</label>
            <input type="password" id="password" name="password" placeholder="Подтвердите пароль" required>
        </p>
        <p>
            <label>Пол:</label>
            <select name="gender">
                <option value="">-- Выберите пол --</option>
                <option value="male">Мужской</option>
                <option value="female">Женский</option>
            </select>
        </p>
        <p>
            <label>
                <input type="checkbox" name="agreement" value="yes" required>
                Я согласен с условиями
            </label>
        </p>
        <p>
            <input type="submit" value="Зарегистрироваться">
        </p>
    </form>
</body>
</html>