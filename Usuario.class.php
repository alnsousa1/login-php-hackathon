<?php
    class Usuario{
<<<<<<< HEAD
        public function login($ra, $senha){
            global $pdo;

            $sql = "SELECT * FROM aluno WHERE ra = :ra AND senha = :senha";
            $sql = $pdo->prepare($sql);
            //verificar se o bindValue funciona da mesma forma que o bindParam
            $sql->bindValue("ra", $ra);
            $sql->bindValue("senha", md5($senha));
=======
        public function login($nome, $ra){
            global $pdo;

            $sql = "SELECT * FROM usuario WHERE nome = :nome AND ra = :ra";
            $sql = $pdo->prepare($sql);
            //verificar se o bindValue funciona da mesma forma que o bindParam
            $sql->bindValue("nome", $nome);
            $sql->bindValue("ra", $ra);
>>>>>>> f1cb14808da6568128dbfe2bae3b3344c81b05d8
            $sql->execute();

            if($sql->rowCount() > 0){
                $dado = $sql->fetch(); //fetch cria um array e recebe todos os dados que vem do SELECT feito na linha 6
                $_SESSION['idUser'] = $dado['id'];

                return true;
            }
            return false;
        }
    }
?>