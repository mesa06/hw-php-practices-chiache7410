<?php
    $yyyy = 2016;
    $mm = 10;
    $dd = 21;
    echo ( strtotime("$yyyy-$mm-$dd") - strtotime($yyyy . "-01-01") ) / (60 * 60 * 24);
    
    echo "<hr>" . date("z");
?>