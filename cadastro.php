<link rel="stylesheet" type="text/css" href="css/login.css">
<?php
if (isset($_GET["msg"])) {
  $msg = $_GET["msg"];
} else {
  $msg = "";
}
echo "$msg";
?>
<div class="login-box">
  <h2>Cadastrar</h2>
  <form action="index.php?menu=inserir-cadastro" method="post">
    <div class="user-box">
      <input type="text" name="loginUser" id ="loginUser" required="">
      <label for="loginUser">Login</label>
    </div>
    <div class="user-box">
      <input type="text" name="nomeUser" id ="nomeUser" required="">
      <label for="nomeUser">Nome de Usuário</label>
    </div>
    <div class="user-box">
      <input type="password" name="senhaUser" id ="senhaUser" required="">
      <label for="senhaUser">Senha</label>
    </div>
      <button type="submit">
    <span></span>
      <span></span>
      <span></span>
      <span></span>
      cadastrar
      </button>
  </form>   
<a href="?menu=login">
    <button>
      login
</button>
</a>
</div>