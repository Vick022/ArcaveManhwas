<?php
$idLidos = $_GET["idLidos"];
$sql = "delete from tblidos where idLidos = $idLidos";
$rs = mysqli_query($conexao,$sql);

header('Location:index.php?menu=lista-lido');

?>