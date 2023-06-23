<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row">
                        <img src="https://www.alfaumuarama.edu.br/fau/images/logo_novo.png?v=1687545048" class="logo" style="max-width:200px; max-height:200px; width:auto; height: auto;">
                    </div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                        <img src="https://img.freepik.com/vetores-premium/ilustracao-em-vetor-de-desenho-animado-isolada-da-biblioteca-escolar_107173-28474.jpg?w=740" class="image" style="max-width:600px; max-height:650px; width:auto; height: auto;">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="logar.php" method="POST">
                    <div class="card2 card border-0 px-4 py-5" style="margin: 140px 40px">
                        <div class="row px-3">
                            <label class="mb-1"><h6 class="mb-0 text-sm">Nome:</h6></label>
                            <input class="mb-4" type="text" name="nome" required placeholder="Digite seu nome">
                        </div>
                        <div class="row px-3">
                            <label class="mb-1"><h6 class="mb-0 text-sm">Registro do Aluno:</h6></label>
                            <input type="password" name="ra" required placeholder="Digite seu RA">
                        </div>
                        <div class="row px-3 mb-4">
                            <a href="#" class="ml-auto mb-0 text-sm">Esqueceu a senha??</a>
                        </div>
                        <div class="row mb-3 px-3">
                            <button type="submit" class="btn btn-blue text-center">Login</button>
                        </div>
                        <div class="row mb-4 px-3">
                            <small class="font-weight-bold">Não possui uma conta? <a class="text-danger ">Registre-se</a></small>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="bg-blue py-4">
            <div class="row px-3">
                <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; Faculdade UniAlfa Umuarama 2023.</small>
                <div class="social-contact ml-4 ml-sm-auto">
                    <span class="fa fa-facebook mr-4 text-sm"></span>
                    <span class="fa fa-google-plus mr-4 text-sm"></span>
                    <span class="fa fa-linkedin mr-4 text-sm"></span>
                    <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span>
                </div>
            </div>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>