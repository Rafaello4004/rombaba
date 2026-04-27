<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));
    
    $errors = [];
    
    if (empty($name)) {
        $errors[] = 'Имя обязательно для заполнения';
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Введите корректный Email';
    }
    
    if (empty($message)) {
        $errors[] = 'Сообщение не может быть пустым';
    }
    
    if (empty($errors)) {
        $success = "Спасибо, $name! Ваше сообщение отправлено.";
    }
}
?>