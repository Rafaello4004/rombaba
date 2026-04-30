<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parapa</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="assets/images/fav.png">
</head>
<body>
    <div>
    <h2>Калькулятор</h2>
    <form action="action.php" method="post">
        <input type="number" name="num1" placeholder="Число 1" step="any" required><br>
        <input type="number" name="num2" placeholder="Число 2" step="any" required><br>
        
        <div>
            <input type="submit" name="operation" value="+">
            <input type="submit" name="operation" value="-">
            <input type="submit" name="operation" value="*">
            <input type="submit" name="operation" value="/">
        </div>
    </form>

    <?php
    session_start();
    if (isset($_SESSION['calc_result'])) {
        echo '<div>Результат: ' . $_SESSION['calc_result'] . '</div>';
        unset($_SESSION['calc_result']);
    }
    if (isset($_SESSION['calc_error'])) {
        echo '<div>' . $_SESSION['calc_error'] . '</div>';
        unset($_SESSION['calc_error']);
    }
    ?>
</div>
</body>
</html>