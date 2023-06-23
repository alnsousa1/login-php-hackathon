<?php
    if (isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['ra']) && !empty($_POST['ra'])) {
        $nome = addslashes($_POST['nome']);
        $ra = addslashes($_POST['ra']);
    }

    header("Location: erro.php");exit;
?>


<h1>Você está logado!</h1>