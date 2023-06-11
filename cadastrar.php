<?php
include 'connx.php';

$nome = trim($_POST['nome']);
$endereco = trim($_POST['endereco']);
$telefone = trim($_POST['telefone']);

if(($nome <> "")AND($endereco <> "")AND($telefone <> "")){
    $insere = "INSERT INTO cliente VALUES ('','$nome','$endereco','$telefone')";
    $query_cadastro = mysqli_query($connx, $insere);
}

header('location: index.php');

?>