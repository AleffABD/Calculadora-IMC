<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles.css">
    <title>Olivia</title>
</head>
<body>
    <div class="bloco">
    <h1>Calculadora de IMC</h1>
    <form method="get" action="index.php">
 <label>Digite o seu peso: </label><p></p>
 <input type="text" name="peso">
 <p></p>
 <label>Digite a sua altura:</label><p></p>
 <input type="text" name="altura">
 <p></p>
 <button class="butao">calcular</button>
</form>
<?php
if(!($_GET["peso"])){
    echo "Insira um peso válido";
    exit; 
}

if(!($_GET["altura"])){
    echo "Insira uma altura válida";
    exit;
}


$peso=floatval($_GET["peso"]);
$altura=floatval($_GET["altura"]);

$imc=$peso/pow($altura,2);
echo "<p>Seu IMC é: ".round($imc)."</p>";

 
?></div> 
</body>
</html>