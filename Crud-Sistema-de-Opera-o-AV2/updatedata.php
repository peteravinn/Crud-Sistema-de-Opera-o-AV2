<?php
$stu_id = $_POST['id'];
$stu_nome = $_POST['nome'];
$stu_endereco = $_POST['endereço'];
$stu_aula = $_POST['aula'];
$stu_telefone = $_POST['telefone'];

include 'config.php';

$sql = "UPDATE estudante SET nome = '{$stu_nome}', endereço = '{$stu_endereço}',aula = '{$stu_aula}', telefone = '{$tu_telefone}' WHERE sid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Consulta sem sucesso.");


mysqli_close($conn);

?>
