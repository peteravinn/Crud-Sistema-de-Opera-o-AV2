<?php include 'header.php';

if(isset($_POST['deletebtn'])){

include "config.php";
$stu_id = $_POST['id'];

$sql = "DELETE FROM estudante WHERE id = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Consulta sem sucesso.");

mysqli_close($conn);

}
?>
<div id="main-content">
    <h2>Apagar registro</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="id" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
