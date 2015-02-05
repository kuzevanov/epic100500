<?php

echo '<table>';
for ($i = 1; $i <= 25; $i++) { 
    echo '<tr>';
    for ($j = 1; $j <= 5; $j++) {
       echo '<td><img src="images/' . $i . '.jpg" /></td>'; 
       $i++;
    }
    echo '</tr>';
    $i--;
}
echo'</table>';
 