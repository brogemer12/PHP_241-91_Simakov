<?php
    $arr = file('test.txt', FILE_IGNORE_NEW_LINES);
    $summ = array_sum($arr);
    file_put_contents('test.txt', $summ, FILE_APPEND | LOCK_EX);
?>  
