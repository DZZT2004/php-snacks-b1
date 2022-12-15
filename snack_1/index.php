<?php
    $partite =[
        [
            'nomeCasa' => 'Olimpia Milano',
            'nomeOspite' => 'Cantù',
            'puntiCasa' => 55,
            'puntiOspite' => 60
        ],
        [
            'nomeCasa' => 'Pippo',
            'nomeOspite' => 'Paperino',
            'puntiCasa' => 24,
            'puntiOspite' => 47
        ],
        [
            'nomeCasa' => 'Pluto',
            'nomeOspite' => 'Scooby Doo',
            'puntiCasa' => 78,
            'puntiOspite' => 34
        ]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partite basket</title>
</head>
<body>
    <?php
        for ($i=0; $i < count($partite); $i++) { 
            echo "<div>{$partite[$i]['nomeCasa']} - {$partite[$i]['nomeOspite']} | {$partite[$i]['puntiCasa']} - {$partite[$i]['puntiOspite']} </div>";
        }
    ?>
</body>
</html>