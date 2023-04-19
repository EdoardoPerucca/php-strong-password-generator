<?php 

function passwordGenerator($characters) 
{
  $array = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz!@#$%&*_"';
  return substr(str_shuffle($array), 0, $characters);
}

?>





<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    <h1>Password Generator</h1>

    <form action="index.php" method="GET">
        <button type="submit">Genera la tua Password</button>
    </form>

    <p>
        <?php 
        echo passwordGenerator(15);
        ?>
    </p>

    
    
</body>
</html>