<?php
    $arr = file('test.txt', FILE_IGNORE_NEW_LINES);
    $summ = array_sum($arr);
    echo $summ;
?>