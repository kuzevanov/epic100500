<?php
echo '<head><meta charset="utf-8"><style> td{padding:5px;}table{border:solid 1px grey;text-align:center;border-collapse:collapse;}.red{border:solid 1px red;}</style>';
echo '<b>Таблица умножения</b> <br /><br />';
echo '<table>';
echo '<tr>';
    echo '<td></td>';
    for ($n = 1; $n <=30; $n++) {
        echo '<td>' . $n . '</td>';
    }
echo '</tr>';
for ($i = 1; $i <= 30; $i++)
{
 
     echo '<tr>';
           echo '<td>' . $i . '</td>';
    for ($y = 1; $y <= 30; $y++)
    {
    $sum = $i * $y;
        echo '<td  class="red">' . $sum . '</td>';
    }
     echo '</tr>';
}
echo '</table>';
