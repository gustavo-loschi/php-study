<?php

function webClient($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
$url = sprintf('http://viacep.com.br/ws/%s/json/ ', $_REQUEST['cep']);
$result = json_decode(webClient($url));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        echo "CEP: " . $result->cep . "<br>";
        echo "Logradouro: " . $result->logradouro . "<br>";
        echo "Complemento: " . $result->complemento . "<br>";
        echo "Bairro: " . $result->bairro . "<br>";
        echo "Localidade: " . $result->localidade . "<br>";
        echo "UF: " . $result->uf . "<br>";
    ?>
    <form action="../index.html">
        <input type="submit" value="Nova consulta"></input>
    </form>
</body>

</html>