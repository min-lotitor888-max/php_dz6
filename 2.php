<?php

//оператор ?? в PHP 7.0 +
$text = $_GET['text'] ?? 'Текст по умолчанию';

/*
if (isset($_GET['text'])) {
    $text = $_GET['text'];
} else {
    $text = 'Текст по умолчанию';
}
*/

/*
$text = isset($_GET['text']) ? $_GET['text'] : 'Текст по умолчанию';
*/

header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="file.txt"');
header('Content-Length: ' . strlen($text));

echo $text;