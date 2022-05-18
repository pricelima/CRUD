<?php
require_once '../src/funcoes-fabricantes.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$fabricante = lerUmFabricante($conexao, $id);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabricantes - Atualizar</title>
</head>
<body>
    <div class="container">
        <h1>Fabricantes | UPDATE/SELECT</h1>
        <hr>

        <form action="" method="post">
            <input type="hidden" name="<?=$fabricante['nome']?>">
            <p>
                <label for="nome">Nome:</label>
                <input value="<?=$fabricante['nome']?>" type="text" name="nome" id="nome">
            </p>
            <button type="submit" name="atualizar">
                Atualizar fabricante</button>
        </form>

        <p><a href="listar.php">
        Voltar para lista de fabricantes</a></p>

        <p><a href="../index.php">Home</a></p>
    </div>
</body>
</html>