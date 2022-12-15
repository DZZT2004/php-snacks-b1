<?php
    $nome = $_GET['nome'] ?? '';
    $mail = $_GET['mail'] ?? '';
    $age = $_GET['age'] ?? '';

    if(strlen($nome) > 3 && is_numeric($age) && str_contains($mail, '.') && str_contains($mail, '@')){
        $messaggio = "Accesso riuscito";
    }else{
        $messaggio = "Accesso negato";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack Form</title>
</head>
<body>
    <form action="" method="get">
        <label for="nome">nome</label>
		<input type="text" name="nome" id="nome" value=<?= $nome ?>>

		<label for="mail">mail</label>
		<input type="text" name="mail" id="mail" value=<?= $mail ?> >

		<label for="age">age</label>
		<input type="text" name="age" id="age" value=<?= $age ?> >

		<button>Controlla Dati</button>
    </form>
    <span><?= $messaggio ?></span>
</body>
</html>