<?php
echo'<meta charset="utf-8">';
echo '<table>';
for ($i = 1; $i <= 31; $i++) {
    echo '<tr>';
    for ($d = 1; $d <= 7 && $i <= 31; $d++) {
        echo '<td>' . $i . '</td>';
        $i++;
    }
    echo '</tr>';
    $i = $i-1;
}
echo '</table>';