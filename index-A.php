<?php
    $count = 5;
    $what = "*";
    for ($i=0; $i<$count; $i++) {
        for ($j=$i; $j>=0; $j--) {
            echo "$what";
        }
        echo "<br>";
    }
?>