<?php
// criar conexão com banco de dados

try {

    $pdo = new PDO('mysql:host=localhost; dbname=sistema_satisfacao', 'Lucimaria', '84526883');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conexão bem sucessida";

} catch (PDOException $e) {
    echo " Erro de Conexão";
}

//função para inserir dados no Banco 
function Inserir($escolha)
{
    $pdo = $GLOBALS["pdo"];
    $data = date('Y-m-d');
    //echo "a data é" . $data;
    $sql = $pdo->prepare("INSERT INTO avaliacao VALUES (null,?,?)");
    $sql->execute(array($escolha, $data));
}
