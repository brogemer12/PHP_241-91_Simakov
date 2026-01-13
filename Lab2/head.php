
<?php

    
    $email = $_POST["email"];
    $name = $_POST["names"];
    $chek = $_POST["chek"];
    $text = $_POST["text"];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <textarea name="textarea" id="textarea" cols="150" rows = "5" > 
       <?php echo "Спасибо $name за ваше обращение с темой: $chek и текстом $text оно будет рассмотрено и отправлено на $email. ";?>
    </textarea>
    

</body>
</html>