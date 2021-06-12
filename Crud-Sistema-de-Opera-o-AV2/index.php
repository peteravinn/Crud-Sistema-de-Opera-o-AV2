<?php
include 'header.php';
?>
<div id="main-content">
    <h2>Todos os registros</h2>
    <?php
      include 'config.php';

      $sql = "SELECT * FROM estudante JOIN classe de estudante WHERE classe.de.estudante = classe.de.estudante.id";
      $result = mysqli_query($conn, $sql) or die("Consulta sem sucesso.");

      if(mysqli_num_rows($result) > 0)  {
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Nome</th>
        <th>Endereco</th>
        <th>Classe</th>
        <th>Telefone</th>
        <th>Acao</th>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nome']; ?></td>
                <td><?php echo $row['endereco']; ?></td>
                <td><?php echo $row['nome']; ?></td>
                <td><?php echo $row['telefone']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['id']; ?>'>Editar</a>
                    <a href='delete-inline.php?id=<?php echo $row['id']; ?>'>Delete</a>
                </td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
  <?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($conn);
  ?>
</div>
</div>
</body>
</html>
