<?php
if (!empty($_GET['id'])) {
    $stmt = $pdo->prepare(
        "SELECT * FROM products WHERE id = :id"
    );
    $stmt->execute([
        ':id' => $_GET['id']
    ]);

    if (!$row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "wrong id";
        exit;
    }
} else {
    echo "id is required";
    exit;
}
?>
<form method="post" action="">
    <div><input type="text" name="title" value="<?=$row['title'] ?>" /></div>
    <div><input type="text" name="price" value="" /></div>
    <div><input type="text" name="category" value="" /></div>
    <div><textarea name="description"></textarea></div>
    <div><input type="submit" name="submit" /></div>
</form>
