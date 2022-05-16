<?php 
// SCRIP DE CONEXÃO AO SERVIDOR BANCO DE DADOS


// parametros
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "vendas";


try{
    $conexao = new PDO("mysql:host=$servidor; dbname=$banco; chartset-utf8",
    $usuario,
    $senha

);

// Habilita a verificação de erros

$conexao ->setAttribute(
    PDO::ATTR_ERRMODE, //Constante de erros em geral
    PDO::ERRMODE_EXCEPTION //Constante de exceções de erro
);

} catch(Exception $erro){
    die("Erro: " .$erro->getMessage());
}


?>