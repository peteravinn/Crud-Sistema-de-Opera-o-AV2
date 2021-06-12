<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Atualizar registro</h2>
    <?php
    include 'config.php';

    $stu_id = $_GET['id'];

    $sql = "SELECT * FROM studante WHERE sid = {$stu_id}";
    $result = mysqli_query($conn, $sql) or die("Consulta sem sucesso.");

    if(mysqli_num_rows($result) > 0)  {
      while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Nome</label>
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
          <input type="text" name="nome" value="<?php echo $row['nome']; ?>"/>
      </div>
      <div class="form-group">
          <label>Endereço</label>
          <input type="text" name="endereco" value="<?php echo $row['endereco']; ?>"/>
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
          <input type="text" name="telefone" value="<?php echo $row['telefone']; ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php
      }
    }
    ?>
</div>
</div>
</body>
</html>
