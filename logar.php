<?php
//se nome e ra existirem e não forem vazios, as variaveis $login e $ra recebem os valores vindos do POST, dos campos NOME e RA (lembrando que no trabalho, nome estará sendo o RA e abaixo, a senha, é só não ser burro Allan)
if (isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['ra']) && !empty($_POST['ra'])) {
    require 'conexao.php';
    require 'Usuario.class.php'; //chamando a classe criada

    //instanciando o objeto
    $u = new Usuario();

    $nome = addslashes($_POST['nome']);
    $ra   = addslashes($_POST['ra']);

    // var_dump($nome, $ra);
    //Está recebendo!!
    if ($u->login($nome, $ra) == true) {
        if (isset($_SESSION['idUser'])) {
            header("Location: index.php");
            exit;
        }
        header("Location: login.php");
    }
    header("Location: erro.php");
}
header("Location: login.php");
