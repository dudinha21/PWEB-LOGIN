<?php

Class pessoa
{
    private $pdo;
    public $erro = "";
        public function conectar($nome, $host, $usuario, $senha){
            global $pdo;
            global $erro;

            try
            {
                $pdo = new PDO("mysql: dbname=".$nome.";host=".$host, $usuario, $senha);
            }
            catch(PDOException $e)
            {
                $erro=$e->getMessage();
            }
          
        }
        public function cadastrar($nome, $usuario, $email, $senha){
            global $pdo;
            

            $sql = $pdo->prepare("select * from pessoa where email = :a");
            $sql->bindValue(":a", $email);
            $sql->execute();
            if($sql->rowCount() > 0){
                return false;
                echo "email já esta sendo utilizado";
            }
            else{
                $sql = $pdo->prepare("insert into pessoa (nome, usuario, email, senha) values (:n, :u, :e, :s)");
                $sql->bindValue(":n", $nome);
                $sql->bindValue(":u", $usuario);
                $sql->bindValue(":e", $email);
                $sql->bindValue(":s", $senha);
                $sql->execute();
                return true;
                echo "cadastrado com sucesso";
            }
        }

        public function listagem(){
            global $pdo;
            $sql = $pdo->prepare("select * from pessoa");

        }

        public function pesquisa($usuario){
            global $pdo;
            $sql = $pdo->prepare("select * from pessoa where usuario = :u");
            $sql->bindValue(":u", $usuario);
        }

}

?>