<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $sql = "UPDATE humano SET nome=?, idade=? WHERE id=?";
    $query = $conn->prepare($sql) or die($conn->error);
    if(!$query){
        echo "Erro na atualização: ".$conn->errno."-".$conn->error;
    }
    $query->bind_param('ssi',$nome,$idade,$id);
    $query->execute();
    $conn->close();
    header("Location:index.php");
?>