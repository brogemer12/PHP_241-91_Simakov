<?php
    header('Content-Type: text/plain');

    // Включение отладочной информации
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // if (!isset($_POST['expression']) || empty(trim($_POST['expression']))) {
    //     echo "Error: No expression provided";
    //     exit;
    // }

    $expression = $_POST['expression'];
    $pattern = '/(\d+)(.)(\d+)/';
    preg_match($pattern, $expression, $matches);
    // print_r($matches);
    $operator = $matches [2];
    $number1 = $matches [1];
    $number2 = $matches [3];

    switch ($operator){
        case '*':
            $x = $number1 * $number2;
            break;
        case '+':
            $x= $number1-+$number2;
            break;
        case '-':
            $x= $number1-$number2;
            break;
        case '/':
            $x=$number1/$number2;
            break;
    } 
    echo "Ответ: $x";

?>

    