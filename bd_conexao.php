<?php


class conexao
{
    private $con;
    private $user = "root";
    private $password = " ";
    private $database = "formulario";
    private $hostname = "localhost";


    public function entrarbd()//Faz apenas a conexão
    {
        //Faz a conexão____________________________________________________________________________________________
        $obj = new conexao;
        $obj -> con = mysqli_connect($obj->hostname, $obj->user, $obj->password) or die("erro na conexão");
        mysqli_select_db($obj -> con, $obj->database) or die("erro na conexão com database");
        //_________________________________________________________________________________________________________
    }



    public function inserts($nome, $email){//Inseri Valores no BD
        //Faz a conexão____________________________________________________________________________________________
        $obj = new conexao;
        $obj -> con = mysqli_connect($obj->hostname, $obj->user, $obj->password) or die("erro na conexão");
        //_________________________________________________________________________________________________________


        //Inseri os dados no BD____________________________________________________________________________________
        $comandosql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";
        $obj -> con = mysqli_connect($obj->hostname, $obj->user, $obj->password) or die("erro na conexão");
        mysqli_select_db($obj -> con, $obj->database) or die("erro na conexão com database");
        if(mysqli_query($obj->con,$comandosql)){
        }
        else{
            echo "Erro! Dados não enviado";
        }
        //_________________________________________________________________________________________________________


    }


}
?>
