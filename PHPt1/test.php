<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="Input">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php
    if(isset($_GET['Input'])){
        $a = explode(' ', $_GET['Input']);

        function Preobraz(&$arr){
            for($i = 0; $i < count($arr); $i++){
                if(($i % 2) > 0){
                    $arr[$i] = mb_strtoupper($arr[$i]);
                }
            }
        }
        Preobraz($a);
        $str = implode(' ', $a);
        echo $str;
    }
?>

