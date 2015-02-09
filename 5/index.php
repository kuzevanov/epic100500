<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
<ul>
    <li><a href="index.php">Главная</a></li>
    <li><a href="index.php?action=insert">Добавить</a></li>
</ul>
<?php
$actions = ['insert', 'list', 'delete', 'edit'];
$action = isset($_GET['action']) ? $_GET['action'] : 'list';
if (!in_array($action, $actions)) {
    exit('Bye');
}
$pdo = new PDO(
    'mysql:host=localhost;dbname=shop;charset=utf8', 
    'root', 
    'root'
);
$pdo->setAttribute(
    PDO::ATTR_ERRMODE, 
    PDO::ERRMODE_EXCEPTION
);
include $action . '.php';

?>
</body>
</html>
