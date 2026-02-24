<?php
// Konfigurasi Path
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$basePath = '/rpl1/laravel/kaggleradya';

// URL dasar
define('BASE_URL', $protocol . '://' . $host . $basePath . '/');
define('CSS_PATH', BASE_URL . 'css/');
define('LESSONS_PATH', BASE_URL . 'lessons/');
define('IMG_PATH', BASE_URL . 'assets/');

// Untuk development / debugging
define('DEBUG', false);
?>
