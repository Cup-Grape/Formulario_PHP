<?php


class conexao
{
    public $con;
    public $database;

    public function entrarbd()
    {
        $user = "root";
        $password = " ";
        $database = "formulario";
        $hostname = "localhost";
        $conexao = new conexao;
        $conexao -> con = $con = mysqli_connect($hostname, $user, $password) or die("erro na conexão");
        mysqli_select_db($con, $database) or die("erro na conexão com database");

    }

    public function inserts($nome, $email){
        $obj = new conexao;
        $comandosql = "INSERT INTO $obj -> database (nome, email) VALUES ('$nome', '$email')";
        if(mysqli_query($obj->con,$comandosql)){
            echo 'Cadastro realizado com sucesso!';
        }




    }



}
?>
