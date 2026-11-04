<?php

session_start();

$views = $_SESSION['views'] ?? 0;

echo "<h1>Страница 4</h1>";
echo "<p>Страница 3 была открыта $views раз(а).</p>";
echo "<p><a href='/3.php'>Вернуться на страницу 3</a></p>";
