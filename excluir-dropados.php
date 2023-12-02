<?php
$idDropado = $_GET["idDropado"];
$sql = "delete from tbdropados where idDropado = $idDropado";
$rs = mysqli_query($conexao,$sql);

header('Location:index.php?menu=lista-dropados');

?>