<?php
error_reporting(-1);
ini_set('display_errors',1);
header('Content-Type: text/html; charset=utf-8');
$page = (isset($_GET['page']) ? $_GET['page'] : 'main');
?>
<html>
<head>
<title>Рыбки в аквариуме</title>
</head>
<body>
<header>
    <nav>
        <a href="index.php?page=main">Главная страница</a> | 
        <a href="index.php?page=photo">Фото</a> | 
        <a href="index.php?page=video">Видео</a>
    </nav>
</header>

<?php include basename($page).'.php'; ?>

<footer>
    Тут просто канец страницы.
</footer>
</body>
</html>
