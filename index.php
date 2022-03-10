<?php 
$paragrafo =" non devi dire bugie, non devi dire bugie, non devi dire bugie";
$lungParagrafo= strlen($paragrafo);

$parolaDaCensurare = $_GET['censura'];
$paragrafoCensurato = str_ireplace($parolaDaCensurare, '***', $paragrafo);
$lungParagCensurato = strlen($paragrafoCensurato);
 

$arrayNumeri = array();//creo l'array dei numeri



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>
<body>
    
<!--<h1>PARAGRAFO ORIGINALE</h1>
<p><//?php echo $paragrafo; ?></p>

<p>Il paragrafo è lungo : <//?php echo $lungParagrafo; ?></p>

<h1>PARAGRAFO CENSURATO</h1>

<p><//?php echo $paragrafoCensurato; ?></p>
<p>Il paragrafo censurato è lungo : <//?php echo $lungParagCensurato; ?></p>
</body>
</html>-->


