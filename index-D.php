<?php
    $count=0;
    function cubed($x) {
        return $x * $x * $x;
    }
    while($count<1000) {
        $c001=$count%10;
        $c010=intval($count/10)%10;
        $c100=intval($count/100);
        if (cubed($c001) + cubed($c010) + cubed($c100) == $count) {
            echo $count . "<br>";
        }
        $count++;
    }
?>