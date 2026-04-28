<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (empty($_POST['email']) || empty($_POST['password'])) {
        echo "<p style='color: red;'>Поля 'E-mail' и 'Пароль' обязательны для заполнения.</p>";
        echo "<p><a href='index.php'>Вернуться к форме регистрации</a></p>";
        exit;
    }

    echo "<h2>Спасибо за регистрацию!</h2>";
    echo "<p>Ваше имя: " . htmlspecialchars($_POST['name'] ?? 'не указано') . "</p>";
    echo "<p>Ваш e-mail: " . htmlspecialchars($_POST['email']) . "</p>";
    echo "<p>Пароль: " . str_repeat('*', strlen($_POST['password'])) . "</p>"; // Не выводим пароль в открытом виде
    echo "<p>Пол: " . htmlspecialchars($_POST['gender'] ?? 'не указан') . "</p>";
    
    $agreement = isset($_POST['agreement']) ? 'Да' : 'Нет';
    echo "<p>Согласие с условиями: $agreement</p>";
    
} else {
    echo "<p>Доступ запрещен, используйте <a href='index.php'>форму регистрации</a>.</p>";
}
?>