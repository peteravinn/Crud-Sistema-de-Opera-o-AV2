<?php

$stu_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM estudante WHERE id = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Consulta sem sucesso.");

mysqli_close($conn);

?>
