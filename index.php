<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Pesquisar Clima</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
        *{margin: 0; padding: 0; box-sizing: border-box;}

        body{
            background-image: linear-gradient(to right, #071c24 , #05151c, #071c24);
            color: #fff;
        }

        .container{
            width: 800px;
            height: auto;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        .btn-style{
            background-color: transparent;
            border: 1px solid #edd05c;
            text-transform: uppercase;
            font-weight: bold;
        }

        .btn-style:hover{
            background-color: #143f52;
            border: .5px solid #edd05c;
            transition: 3s;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Clima e Tempo - API Open Weather Map</h3>
            </div>
        </div>
        <br/>
        <div class="row">
            <form action="clima.php" method="POST">
                <div class="mb-3">
                    <label for="inputCidade" class="form-label">Nome da Cidade</label>
                    <input type="text" class="form-control" name="inputCidade" id="inputCidade" placeholder="Digite o nome da cidade">                    
                </div>
                <div class="mb-3">
                <label for="selectUf" class="form-label">UF</label>
                    <select class="form-select" id="selectUf" name="selectUf" aria-label="Default select example">
                        <option selected>Selecione a UF</option>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AM">AM</option>                        
                        <option value="AP">AP</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MG">MG</option>
                        <option value="MS">MS</option>
                        <option value="MT">MT</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="PR">PR</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="RS">RS</option>
                        <option value="SC">SC</option>
                        <option value="SE">SE</option>
                        <option value="SP">SP</option>
                        <option value="TO">TO</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-style">Consultar</button>
            </form>
        </div>
    </div>
</body>
</html>