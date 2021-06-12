<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Editar registro</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="id" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php
      if(isset($_POST['showbtn'])){
        include 'config.php';

        $stu_id = $_POST['sid'];

        $sql = "SELECT * FROM estudante WHERE sid = {$stu_id}";
        $result = mysqli_query($conn, $sql) or die("Consulta sem sucesso.");

        if(mysqli_num_rows($result) > 0)  {
          while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Nome</label>
            <input type="hidden" name="id"  value="<?php echo $row['id']; ?>" />
            <input type="text" name="nome" value="<?php echo $row['nome']; ?>" />
        </div>
        <div class="form-group">
            <label>Endereço</label>
            <input type="text" name="endereco" value="<?php echo $row['endereco']; ?>" />
        </div>
        <div class="form-group">
        <label>Aula</label>
        <?php
          $sql1 = "SELECT * FROM estudanteclasse";
          $result1 = mysqli_query($conn, $sql1) or die("Consulta sem sucesso.");

          if(mysqli_num_rows($result1) > 0)  {
            echo '<select name="aula">';
            while($row1 = mysqli_fetch_assoc($result1)){
              if($row['aula'] == $row1['id']){
                $select = "selected";
              }else{
                $select = "";
              }
              echo  "<option {$select} value='{$row1['id']}'>{$row1['nome']}</option>";
            }
        echo "</select>";
      }
          ?>
        </div>
        <div class="form-group">
            <label>Telefone</label>
            <input type="text" name="telefone" value="<?php echo $row['telefone']; ?>" />
        </div>
    <input class="submit" type="submit" value="Atualizar"  />
    </form>
    <?php
  }
}
}

    ?>
</div>
</div>
</body>
</html>
