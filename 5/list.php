<?php

$stmt = $pdo->prepare("SELECT * FROM products");
$stmt->execute();

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);


echo "<table>";
echo "<tr><td>Title</td><td>Price</td><td></td></tr>";
foreach ($rows as $key => $row) {
    echo "<tr>";
    echo "<td>" . $row['title'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "<td><a href='?action=delete&id=" . $row['id'] . "'>удалить</a> "
        ."<a href='?action=edit&id=" . $row['id'] . "'>редактировать</a>";
    echo "</tr>";
}
echo "</table>";