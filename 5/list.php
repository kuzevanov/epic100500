<?php

$stmt = $pdo->prepare("SELECT * FROM products WHERE price < :max AND price > :min");
$stmt->execute([
    ':min' => 5,
    ':max' => 15,
]);

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $key => $row) {
    var_dump($row);
}
