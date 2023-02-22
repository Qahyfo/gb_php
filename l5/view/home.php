<?php
/* @var $pageHeader string */
/* @var $username ?string */
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>
<h1><?= $pageHeader ?></h1>

<?php if (isset($username)): ?>
    <p>Давно не заходили, <?= $username ?></p>
    Выйти
<?php else: ?>
    <a href="/?controller=security">Войти</a>
    <a href="/?controller=exit">Выйти</a>
<?php endif; ?>
</body>
</html>