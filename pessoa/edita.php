<html>
    <body>
        <center><h3>CRUD PHP</h3>
        <hr/>
        <?php
            include 'conecta.php';
            $id = $_GET['id'];
            $sql = "SELECT * FROM humano WHERE id=$id";
            $query = $conn->query($sql);
            while($dados = $query->fetch_assoc()){
                $nome = $dados['nome'];
                $idade = $dados['idade'];
            }
        ?>
        <form action="editar.php?id=<?php echo $id; ?>" method="POST">
            <label>Nome</label><br/>
            <input type="text" name="nome" value="<?PHP echo $nome; ?>"/><br/>
            <label>Idade</label><br/>
            <input type="number" name="idade" value="<?PHP echo $idade; ?>"/><br/><br/>
            <input type="submit" value="Inserir" name="btinserir"/>
        </form><center>
        <hr/>
    </body>
</html>