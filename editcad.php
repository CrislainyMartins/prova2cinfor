<?php 
include ("conexao.php");
$id= $_POST['id'];
$nome= $_POST['nome'];
$email= $_POST['email'];
$senha= password_hash($_POST['senha'],PASSWORD_DEFAULT);


$sql = "UPDATE usuario set nome = '$nome' , email = '$email', senha = '$senha'
WHERE id = $id";

if ($conexao=mysqli_query($conexao, $sql)){
    echo"alterado com sucesso";
}
else{
    echo"erro ao se cadastrar com o banco".mysqli_connect_error($conexao);
}
?>