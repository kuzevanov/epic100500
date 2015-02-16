<?php
$apiUrl = 'http://api.duckduckgo.com/?q=%s&format=json&pretty=1';

$q = isset($_GET['q']) ? $_GET['q'] : '';
if (!empty($q)) {
    $apiUrl = sprintf($apiUrl, $q);
    $json = file_get_contents($apiUrl);
    $data = json_decode($json, true);
    $results = [];
    if (!empty($data['RelatedTopics'])) {
        foreach ($data['RelatedTopics'] as $key => $value) {
            if (!empty($value['Topics'])) {
                foreach ($value['Topics'] as $subKey => $subValue) {
                    $results[] = [
                        'image' => $subValue['Icon']['URL'],
                        'link' => $subValue['FirstURL'],
                        'text' => $subValue['Text'],
                    ];
                }
            } else {
                $results[] = [
                    'image' => $value['Icon']['URL'],
                    'link' => $value['FirstURL'],
                    'text' => $value['Text'],
                ];
            }
        }
    }
    // var_dump($results);
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
    <div>
        <ul>
            <?php foreach ($results as $key => $item) : ?>
            <li>
                <a href="<?=$item['link'] ?>"><img src="<?=$item['image'] ?>" /></a>
                <?=$item['text'] ?>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>


