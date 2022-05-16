<?php
if(isset($_POST['inserir'])){
    //importando as funções e a conexão
    require_once"../src/funcoes-fabricantes.php";

    // capturando o que foi digitado no campo nome
    $_nome = $_POST['nome'];

    inserirFabricante($conexao, $nome);
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabricantes - Inserir</title>
</head>
<body>
    <div class="conteiner">
        <h1>Fabricantes | INSERT</h1>
        <hr>
        <form action="" method="post" >
            <p>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
            </p>
            <button type="submit" name="inserir">Inserir fabricante</button>
        </form>
    </div>
    
</body>
</html>