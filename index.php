<?php
global $pdo;

if (isset($_POST['ra']) && !empty($_POST['ra']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
    $ra = addslashes($_POST['ra']);
    $senha = addslashes($_POST['senha']);

    $sql = "SELECT * FROM aluno WHERE ra = '$ra' AND senha = '$senha'";
    $result = $conn->query($sql);

    // Verificar se a consulta retornou algum resultado
    if ($result->num_rows > 0) {
        // Credenciais válidas, redirecionar para index.php
        header("Location: index.php");
        exit;
    } else {
        // Credenciais inválidas, redirecionar para erro.php
        header("Location: erro.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="https://www.alfaumuarama.edu.br/fau/images/logo_novo.png?v=1687545048" class="logo" style="max-width:200px; max-height:200px; width:auto; height: auto;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="alunos.php">Alunos</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<body style="background-color: #B0BEC5;">
    <div class="card" style="margin: 100px">
        <div class="card-body" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
            <table class="table">
                <thead>
                    <tr>
                        <td scope="col"></td>
                        <td scope="col">ID</td>
                        <td scope="col">Titulo</td>
                        <td scope="col">Sub-titulo</td>
                        <td scope="col">Isbn</td>
                        <td scope="col">Local</td>
                        <td scope="col">Ano</td>
                        <td></td>
                    </tr>
                </thead>
                <?php
                require 'conexao.php';

                $sql = "select * from livro order by id";
                $consulta = $pdo->prepare($sql);
                $consulta->execute();

                while ($dados = $consulta->fetch(PDO::FETCH_OBJ)) {
                ?>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td><?= $dados->id ?></td>
                            <td><?= $dados->titulo ?></td>
                            <td><?= $dados->subTitulo ?></td>
                            <td><?= $dados->isbn ?></td>
                            <td><?= $dados->local ?></td>
                            <td><?= $dados->ano ?></td>
                        </tr>
                    </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>
