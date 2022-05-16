<?php
require_once "conecta.php";

// carregar  dados dos fabricantes
function lerFabricantes($conexao){
    $sql = "SELECT id, nome FROM fabricantes";  
    try{
        $consulta = $conexao->prepare($sql);    
        $consulta->execute();    
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    } catch(Exception $erro){
        die("Erro: ".$erro->getMessage());
    }
    return $resultado;
}

function inserirFabricante(PDO $conexao, string $nome){

};
