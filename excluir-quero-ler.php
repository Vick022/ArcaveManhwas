<?php
$idQuero = $_GET["idQuero"];
$sql = "delete from tbqueroler where idQuero = $idQuero";
$rs = mysqli_query($conexao,$sql);

header('Location:index.php?menu=lista-quero-ler');

?>