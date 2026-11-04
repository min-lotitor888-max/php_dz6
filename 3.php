<?php

session_start();

// Инициализируем счётчик, если его ещё нет
if (!isset($_SESSION['views'])) {
    $_SESSION['views'] = 0;
}

$_SESSION['views']++;

if ($_SESSION['views'] % 3 === 0) {
    header('Location: /4.php');
    exit;
}

$views = $_SESSION['views'];

echo "<h1>Страница 3</h1>";
echo "<p>Эта страница открыта $views раз(а).</p>";
echo "<p>При открытии, кратном трём, произойдёт редирект.</p>";
echo "<p><a href='/3.php'>Обновить</a></p>";
