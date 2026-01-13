<?php
    $a = ["1.txt", "2.txt", "3.txt"];
    foreach($a as $e){
        $text = file_put_contents(file_get_contents($e), 1);
        file_put_contents(file_get_contents($e), $text.'!');
        echo file_get_contents(file_get_contents($e));
    }
    
?>