<?php
    class Usuario{
        public function login($ra, $senha){
            global $pdo;

            $sql = "SELECT * FROM aluno WHERE ra = :ra AND senha = :senha";
            $sql = $pdo->prepare($sql);
            //verificar se o bindValue funciona da mesma forma que o bindParam
            $sql->bindValue("ra", $ra);
            $sql->bindValue("senha", md5($senha));
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