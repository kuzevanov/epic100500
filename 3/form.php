<?php
var_dump($_GET);
$message = '';

foreach ($_GET as $key => $value) {
    $message .= $key . ': ' . $value . "\n";
}
var_dump($message);
?>
<html>
<head>
    <meta charset="utf-8" />
</head>
<body>
    <form action="" method="get">
        <div><input type="text" name="name" value="<?php echo (isset($_GET['name']) ? $_GET['name'] : 'Вася') ?>" /></div>
        <div><input type="text" name="email" /></div>
        <div><textarea name="content"><?php echo (isset($_GET['content']) ? $_GET['content'] : 'Большой текст') ?></textarea></div>
        <br /><br /><br />
        <div><input type="submit" name="submit" /></div>
    </form>
</body>
</html>
