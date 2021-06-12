<?php

 $stu_nome = $_POST['nome'];
 $stu_endereco = $_POST['endereco'];
 $stu_aula = $_POST['aula'];
 $stu_telefone = $_POST['telefone'];

$conn = mysqli_connect("localhost","root","","crud") or die("Falha na conexão");

$sql = "INSERT INTO estudante(nome,endereço,aula,telefone) VALUES ('{$stu_nome}','{$stu_endereço}','{$stu_aula}','{$stu_telefone}')";
$result = mysqli_query($conn, $sql) or die("Consulta sem sucesso.");


mysqli_close($conn);

?>
