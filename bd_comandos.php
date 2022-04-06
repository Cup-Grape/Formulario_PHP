<?PHP
include('bd_conexao.php');
$nome = strval($_POST['nome']);
$email = strval($_POST['email']);

//Chama o metodo para conexao____________________
$obj = new conexao;
try {
    $obj->entrarbd();
} catch (\Throwable $th) {
    echo $th;
}

//_______________________________________________

//Chama o metodo para inserir____________________
try {
    $obj->inserts($nome, $email);
    echo 'Cadastro realizado com sucesso!';
} catch (\Throwable $th) {
    echo $th;
}
//Chama o metodo de inserir______________________


?>