<?php


if(isset($_SESSION["loginUser"]) and isset($_SESSION["senhaUser"])){
    
$idManhwa = $_GET["idManhwa"];
$msg = "";

$sql = "SELECT idManhwa FROM tbdropados where idManhwa = $idManhwa and idUser = $idUser";
$rs = mysqli_query($conexao,$sql);
$idUser = $idUser;
$linha = mysqli_num_rows($rs);
if($linha == 0) {

$sql = "INSERT INTO tbdropados (
    idManhwa,idUser
    )
    VALUES(
    '$idManhwa',
    '$idUser'

    )
    ";
    $rs = mysqli_query($conexao,$sql);

    $msg = "<script> alertify.success('Manhwa inserido na lista dropados com sucesso.');</script>";
    header('Location:index.php?menu=lista-dropados&msg='.$msg);

}else{
    
    $msg = "<script>alertify.error('Este manhwa já está adicionado na lista');</script>";
    header('Location:index.php?menu=lista-dropados&msg='.$msg);

}
}else{
    header('Location:index.php?menu=login');
  }
?>