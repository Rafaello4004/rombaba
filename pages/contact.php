<?php include '../includes/header.php'; ?>
<?php include '../includes/form-handler.php'; ?>
<head>
    <link rel="icon" type="image/png" href="../assets/images/fav.png">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<main>
    <h1>Контакты</h1>

    <?php if (!empty($errors)): ?>
        <div class="error">
            <?php foreach ($errors as $error): ?>
                <p><?= $error ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    
    <?php if (!empty($success)): ?>
        <div class="success">
            <p><?= $success ?></p>
        </div>
    <?php endif; ?>

    <form method="post">
        <input type="text" name="name" placeholder="Имя" value="<?= htmlspecialchars($name ?? '') ?>">
        <input type="email" name="email" placeholder="Email" value="<?= htmlspecialchars($email ?? '') ?>">
        <textarea name="message"><?= htmlspecialchars($message ?? '') ?></textarea>
        <button type="submit">Отправить</button>
    </form>
</main>
<?php include '../includes/footer.php'; ?>
