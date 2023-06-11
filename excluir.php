<?php
include 'connx.php';

$codigo = $_POST['codigo'];

$delete = "DELETE FROM cliente WHERE codigo = $codigo";

$query_delete = mysqli_query($connx, $delete);

header('location: index.php');

?>