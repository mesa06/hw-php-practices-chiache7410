<?php
    $s="chiache!@$$%"; //輸入的字串
    $sl=strlen($s); //算出字串長度
    $array="";   //計數字母出現次數的陣列
    $count=32;   //32為ASCII碼空白鍵的十進位值
    for ($i=0;$i<$sl;$i++) {
        $array[ord(substr($s,$i,1))]++;   //取出字串第i個字轉成ASCII碼當作array的key值,並計數一次
    }
    while($count<127) {
        if($array[$count] != "") {
            echo chr($count) . "=>" . $array[$count] . "<br>";
        }
        $count++;
    }
?>