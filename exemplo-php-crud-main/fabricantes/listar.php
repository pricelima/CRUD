<?php 
    require_once "../src/funcoes-fabricantes.php"; 
    $listaDeFabricantes = lerFabricantes($conexao);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabricantes - Lista</title>
</head>
<body>
    <div class="container">
        <h1>Fabricantes | SELECT</h1>
        <hr>
        <h2>Lendo e carregando todos os fabricantes</h2>

        <p>
            <a href="inserir.php">
                Inserir um novo fabricante
            </a>
        </p>

        <?php if(isset ($_GET['status']) && $_GET['status'] == 'sucesso'){ ?>
            <p>Fabricante atualizado com sucesso</p>
        <?php } ?>
        
        

        <table>
            <caption>Lista de Fabricantes</caption>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th colspan="2">Operações</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($listaDeFabricantes as $fabricante) { ?>
                <tr>
                    <td> <?=$fabricante["id"]?> </td>
                    <td> <?=$fabricante["nome"]?> </td>
                    <td><a href="atualizar.php?id=<?=$fabricante['id']?>">Atualizar</a></td>
                                                                        <!-- função que determina se um evento vai dar continuidade ou não. neste caso abaixo é para saber se é pra apagar ou não onclick="return confirm('Deseja mesmo excluir?')" -->
                    <td><a class="excluir" href="excluir.php?id=<?=$fabricante['id']?>">Excluir</a></td>
                </tr>
            <?php
             }
            ?>

            </tbody>
        </table>
    </div>

    <script>
        // acessar todos os links com a classe excluir
        const links =  document.querySelectorAll('.excluir');
        for(let i=0; i<links.length; i++){
            event.preventDefault();
            let resposta = confirm("Deseja realmente excluir? ");
            if(resposta) location.href = links[i].getAttribute('href');
        }

    </script>

    


</body>
</html>