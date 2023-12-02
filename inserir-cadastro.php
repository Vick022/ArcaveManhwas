<?php
$msg = "";

$loginUser = $_POST["loginUser"];
$nomeUser = $_POST["nomeUser"];
$senhaUser = hash('sha256',$_POST["senhaUser"]);



$sql = "SELECT * FROM tbusuarios where loginUser = '$loginUser'";
$rs = mysqli_query($conexao,$sql);
$linha = mysqli_num_rows($rs);
if($linha == 0) {

$sql = "INSERT INTO tbusuarios (
    loginUser,
    nomeUser,
    senhaUser
    )
    VALUES(
    '$loginUser',
    '$nomeUser',
    '$senhaUser'

    )
    ";
    $rs = mysqli_query($conexao,$sql);

    $msg = "<script> alertify.success('Usuário cadastrado com sucesso');</script>
    ";

    header('Location:index.php?menu=cadastro&msg='.$msg);


}else{
    $msg = "<script>alertify.error('Usuário já existe');</script>
    ";
    header('Location:index.php?menu=cadastro&msg='.$msg);
   
}
?>






