<?php
$msg = "";

if(isset($_POST["loginUser"]) && isset($_POST["senhaUser"]) ){
    $loginUser = mysqli_escape_string($conexao,$_POST["loginUser"]);
    $senhaUser = hash('sha256',$_POST["senhaUser"]);

    $sql = "SELECT * FROM tbusuarios WHERE loginUser = '{$loginUser}' and senhaUser = '{$senhaUser}'";
    $rs = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_assoc($rs);
   
    $linha = mysqli_num_rows($rs);

    if($linha !=0 ){
        session_start();
        $_SESSION["loginUser"] = $loginUser;
        $_SESSION["senhaUser"] = $senhaUser;
        $_SESSION["nomeUser"] = $dados["nomeUser"];
        $_SESSION["idUser"] = $dados["idUser"];

        header('Location: index.php');
    }else{
        $msg = "<script>alertify.error('Usuário ou Senha não conferem');</script>
                     ";
    }
}
echo  "$msg"
?>
<link rel="stylesheet" type="text/css" href="css/login.css">
<div class="login-box">
  <h2>Login</h2>
  <form class="needs-validation" action="" method="post">
  <div class="user-box">
      <input type="text" name="loginUser" id="loginUser" required>
      <label class="form-label" for="loginUser">Login</label>
    </div>
    <div class="user-box">
      <input type="password" name="senhaUser" id="senhaUser" required>
      <label class="form-label" for="senhaUser">Senha</label>
    </div>
    <button type="submit">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Entrar
    </button>
  </form>
<a href="?menu=cadastro">
    <button>
      cadastrar
</button>
</a>
</div>