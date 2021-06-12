<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Adicionar novo registro</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" required/>
        </div>
        <div class="form-group">
            <label>Endereço</label>
            <input type="text" name="endereço" required/>
        </div>
        <div class="form-group">
            <label>Aula</label>
            <select name="aula" required>
                <option value="" selected disabled>Selecione a aula</option>
                <?phpc
                include 'config.php';

                $sql = "SELECT * FROM estudantetclasse";
                $result = mysqli_query($conn, $sql) or die("Consulta sem sucesso.");

                while($row = mysqli_fetch_assoc($result)){
                ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?> ></option>

              <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Telefone</label>
            <input type="text" name="telefone" required/>
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
