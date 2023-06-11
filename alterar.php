<?php
include 'connx.php';

$codigo = $_POST['codigo'];
$nome = trim($_POST['nome']);
$endereco = trim($_POST['endereco']);
$telefone = trim($_POST['telefone']);

if(($nome <> "")AND($endereco <> "")AND($telefone <> "")){
    $altera = "UPDATE cliente SET  nome = '$nome', endereco = '$endereco', telefone = '$telefone' WHERE codigo = '$codigo'";
    $query_altera = mysqli_query($connx, $altera);
}

header('location: index.php');

?>