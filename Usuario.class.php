<?php
    class Usuario{
        public function login($nome, $ra){
            global $pdo;

            $sql = "SELECT * FROM usuario WHERE nome = :nome AND ra = :ra";
            $sql = $pdo->prepare($sql);
            //verificar se o bindValue funciona da mesma forma que o bindParam
            $sql->bindValue("nome", $nome);
            $sql->bindValue("ra", $ra);
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