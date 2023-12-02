<?php
$idLendo = $_GET["idLendo"];
$sql = "delete from tblendo where idLendo = $idLendo";
$rs = mysqli_query($conexao,$sql);

header('Location:index.php?menu=lista-lendo');

?>