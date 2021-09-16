<?php

//Autoload das classes
require __DIR__ . "/vendor/autoload.php";

//Dependências
use App\WebService\Api;

//Instância da Classe
$api = new Api("5c113205eab4b011183a1695e7893864");

$cidade = filter_input(INPUT_POST, "inputCidade", FILTER_SANITIZE_STRING);
$uf = filter_input(INPUT_POST, "selectUf", FILTER_SANITIZE_STRING);

if(strlen($cidade) < 1){
    header("location: /public/views/erro.html"); exit;
}else {
    $dados = $api->consultarClima($cidade, $uf);
    
    if($dados['cod'] == "404"){
        header("location: /public/views/erro.html"); exit;
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Pesquisa do Clima</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p><?php echo "Cidade: " . $dados['name'] ?></p><hr>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
            <p><?php echo "Temperatura: " . $dados['main']['temp'] ." °C" ?></p><hr>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
            <p><?php echo "Sensação Térmica: " . $dados['main']['feels_like'] ." °C" ?></p><hr>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p><?php echo "Céu: " . $dados['weather'][0]['description']?></p><hr>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p><?php echo "Velocidade do Vento: " . $dados['wind']['speed'] . " km"?></p><hr>
            </div>
        </div>
    </div>
</body>
</html>