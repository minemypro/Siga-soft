<?php
include_once('conexao.php');

$primeiro_nome=$_POST['primeiro_nome'];
$nome_completo=$_POST['nome_completo'];
$data_nascimento=$_POST['data_nascimento'];
$genero=$_POST['genero']; 
$tipo_identifica=$_POST['tipo_identifica'];
$identificacao=$_POST['identificacao']; 
$nome_pai=$_POST['nome_pai'];
$nome_mae=$_POST['nome_mae']; 
$possui_deficiencia=$_POST['possui_deficiencia'];
$contacto=$_POST['contacto'];
$contacto_alternativo=$_POST['contacto_alternativo'];
$classe=$_POST['classe'];
$turno=$_POST['turno'];
$horario=$_POST['horario'];


$sql = "INSERT INTO cadastroestudante (primeiro_nome,nome_completo,data_nascimento,genero,tipo_identifica,identificacao,
nome_pai,nome_mae,possui_deficiencia,contacto,contacto_alternativo,classe,turno,horario) VALUES ('$primeiro_nome','$nome_completo','$data_nascimento',
'$genero','$tipo_identifica','$identificacao','$nome_pai','$nome_mae','$possui_deficiencia','$contacto','$contacto_alternativo','$turno','$horario',
'$horario')";

if($conn->query($sql)=== TRUE){
    echo"Novo registro na base de dados";
}else{"Error:".$sql."<br>".$conn->error;}
//$resultado_usuario = mysqli_query($conn,$sql);
$conn->close();

?>