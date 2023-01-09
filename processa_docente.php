<?php
session_start();
include_once("conexao.php");
$nome=filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);

//echo  "Nome: $nome <br>";
//echo  "Email: $email <br>";

$result_usuario ="INSERT INTO docentecria (nome,email) VALUES ('$nome','$email',NOW())" ;
$resultado_usuario = mysqli_query($conn,$result_usuario);

if(mysqli_insert_id($conn)){
    $_SESSION['msg']="<p style='color:green;'> Usuario Cadastrado com sucesso</p>";
    header("Location:index.php");
}else{
    $_SESSION['msg']="<p style='color:red;'> Usuario não foi cadastrado com sucesso</p>";
    header("Location:cad_usuario.php");
}
?>