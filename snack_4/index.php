<?php
    $numeri = [];
    for ($i=0; $i < 15; $i++) { 
        $appoggio = rand(1,100);
        if(!(in_array($appoggio, $numeri))){
            $numeri[] = $appoggio;
        }else{
            $i--;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeri casuali</title>
</head>
<body>
    <?php
        echo "<pre>";
        var_dump($numeri);
        echo "</pre>";
    ?>
</body>
</html>