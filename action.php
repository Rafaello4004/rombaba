<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $num1 = $_POST['num1'] ?? null;
    $num2 = $_POST['num2'] ?? null;
    $operation = $_POST['operation'] ?? null;

    if (!is_numeric($num1) || !is_numeric($num2)) {
        $_SESSION['calc_error'] = "Пожалуйста, введите числовые значения.";
        header('Location: index.php');
        exit;
    }

    $num1 = (float)$num1;
    $num2 = (float)$num2;
    $result = null;

    switch ($operation) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            if ($num2 == 0) {
                $_SESSION['calc_error'] = "Ошибка: Деление на ноль невозможно!";
            } else {
                $result = $num1 / $num2;
            }
            break;
        default:
            $_SESSION['calc_error'] = "Выберите корректную операцию.";
    }

    if (isset($result)) {
        $_SESSION['calc_result'] = $result;
    }
    
    header('Location: index.php');
    exit;
} else {
    header('Location: index.php');
    exit;
}
?>