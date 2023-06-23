<?php
    session_start();

    $localhost = "localhost";
    $usuario = "root";
    $senha = "root";
    $banco = "biblioteca";

    global $pdo; //global, para que a variavel $pdo possa ser usada em todo o sistema

    try{
        $pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $usuario, $senha);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "Erro no arquivo conexao.php: ".$e->getMessage();
        exit;
    }

?>