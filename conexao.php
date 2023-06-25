<?php
    session_start();

    $localhost = "localhost";
    $usuario = "root";
<<<<<<< HEAD
    $senha = "";
=======
    $senha = "root";
>>>>>>> f1cb14808da6568128dbfe2bae3b3344c81b05d8
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