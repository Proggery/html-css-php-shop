<?php
session_start();
error_reporting(-1);
ini_set('display_errors', 'On');

define('CONFIG_DIR', __DIR__ . '/config');
require_once __DIR__ . '/functions/database.php';

$sql = "SELECT id, title, description, price FROM products";

$result = getDB()->query($sql);

$cartItems = 0;
$userId = random_int(0, time());


if (isset($_COOKIE['userId'])) {
    $userId = (int) $_COOKIE['userId'];
}

if (isset($_SESSION['userId'])) {
    $userId = (int) $_SESSION['userId'];
}

setcookie('userId', $userId, strtotime('+5 sec'));

$url = $_SERVER['REQUEST_URI'];
$indexPHPPosition = strpos($url, 'index.php');
$route = substr($url, $indexPHPPosition);
$route = str_replace('index.php', '', $route);

if (strpos($route, 'cart/add/') !== false) {
    $routeParts = explode("/", $route);
    $productId = (int)$routeParts[3];

    $sql = "INSERT INTO cart SET user_id = :userId, product_id = :productId";
    $statement = getDB()->prepare($sql);

    $statement->execute([
        ':userId' => $userId,
        ':productId' => $productId
    ]);


    header("Location: /index.php");
    exit();
}


$sql = "SELECT COUNT(id) FROM cart WHERE user_id =" . $userId;
$cartResults = getDB()->query($sql);


$cartItems = $cartResults->fetchColumn();



require __DIR__ . '/templates/main.php';
