<?php
require '../vendor/autoload.php';

function e404 () {
    require '../public/404.php';
    exit();
}

function dd(...$vars) {
    foreach($vars as $var) {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }
}

function get_pdo (): PDO {
<<<<<<< HEAD
    return new PDO('mysql:host=localhost;dbname=strascook', 'root', 'Wild3r', [
=======
    return new PDO('mysql:host=localhost;dbname=strascook', 'user_strascook', 'StrasCookWCS2018', [
>>>>>>> 9a1ac89b62ee04add1460348449856e96a59ee2e
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
}

function h(string $value): string {
    if ($value === null) {
        return '';
    }
    return htmlentities($value);
}

function render(string $view, $parameters = []) {
    extract($parameters);
    include APP_VIEW_PATH."/StrasCook/{$view}.php";
}
