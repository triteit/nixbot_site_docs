<?php
$uri = $_SERVER['REQUEST_URI'];
$extension = pathinfo($uri, PATHINFO_EXTENSION);

// Проверяем, является ли расширение .html
if ($extension === 'html') {
    // Удаляем расширение из адресной строки
    $uri = preg_replace('/\.html$/', '', $uri);
    
    // Перенаправляем пользователя на новый URL без расширения
    header("Location: $uri", true, 301);
    exit();
}
