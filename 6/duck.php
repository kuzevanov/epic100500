<?php
$apiUrl = 'http://api.duckduckgo.com/?q=%s&format=json&pretty=1';

$q = isset($_GET['q']) ? $_GET['q'] : '';
if (!empty($q)) {
    $apiUrl = sprintf($apiUrl, $q);
    $json = file_get_contents($apiUrl);
    var_dump($json);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8" />
    <title></title>
</head>
<body>
    <div>
        <form action="" method="get">
            <input name="q" type="text" value="<?=htmlspecialchars($q) ?>" />
            <input name="submit" type="submit" value="Duck!" />
        </form>
    </div>
</body>
</html>


