<?php
include("./db/conexao.php");


if(isset($_POST["txtPesquisa"])){
    $txtPesquisa = $_POST["txtPesquisa"];
}else{
    $txtPesquisa = "";
}

session_start();

$nomeUser = "";
$sair = "";

if (isset($_SESSION["loginUser"]) and isset($_SESSION["senhaUser"])) {
    $loginUser = $_SESSION["loginUser"];
    $senhaUser = $_SESSION["senhaUser"];
    $nomeUser = $_SESSION["nomeUser"];
    $idUser = $_SESSION["idUser"];

    $sair = '  <a href="logout.php">
    <i class="ph ph-x-circle"></i>Sair</a>';

    $sql = "SELECT * FROM tbusuarios WHERE loginUser = '{$loginUser}' and senhaUser = '{$senhaUser}'";
    $rs = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_assoc($rs);
    $linha = mysqli_num_rows($rs);

    if ($linha == 0) {
        session_unset();
        session_destroy();
        header('Location: index.php?menu=login');
        exit();
    }
}
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <title>Arcave</title>
</head>

<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <h1 class="logo"><a href="index.php">Arcave</a></h1>
            </div>
            <div class="menu-container">
                <ul class="menu-list">

                    <li class="menu-items"><a href="?menu=lista-lendo">Lendo</a></li>
                    <li class="menu-items"><a href="?menu=lista-lido">Lido</a></li>
                    <li class="menu-items"><a href="?menu=lista-quero-ler">Quero Ler</a></li>
                    <li class="menu-items"><a href="?menu=lista-dropados">Dropados</a></li>
                </ul>
            </div>
            <div>
                <!-- icones de login -->
                <div class="icon">
                    <a href="?menu=login">
                        <i class="ph ph-user-circle"></i><?= $nomeUser ?></a>
                  <?=$sair?>
                </div>
                <!-- fim do icone -->
            </div>
        </div>
    </div>



    <main>
        <div class="container">
            <?php
            if (isset($_GET["menu"])) {
                $menu = $_GET["menu"];
            } else {
                $menu = "";
            }
            switch ($menu) {
                case "ver":
                    include("manhwa.php");
                    break;
                case "inserir-lendo":
                    include("inserir-lendo.php");
                    break;
                case "lista-lendo":
                    include("lista-lendo.php");
                    break;
                case "excluir-lendo":
                    include("excluir-lendo.php");
                    break;
                case "inserir-lido":
                    include("inserir-lido.php");
                    break;
                case "lista-lido":
                    include("lista-lido.php");
                    break;
                case "excluir-lido":
                    include("excluir-lido.php");
                    break;
                case "inserir-quero-ler":
                    include("inserir-quero-ler.php");
                    break;
                case "lista-quero-ler":
                    include("lista-quero-ler.php");
                    break;
                case "excluir-quero-ler":
                    include("excluir-quero-ler.php");
                    break;
                case "inserir-dropados":
                    include("inserir-dropados.php");
                    break;
                case "lista-dropados":
                    include("lista-dropados.php");
                    break;
                case "excluir-dropados":
                    include("excluir-dropados.php");
                    break;
                case "login":
                    include("login.php");
                    break;
                case "cadastro":
                    include("cadastro.php");
                    break;
                case "inserir-cadastro":
                    include("inserir-cadastro.php");
                    break;
                case "pesquisa":
                    include("pesquisa.php");
                    break;
                default:
                    include("home.php");
            }
            ?>
        </div>
    </main>

<script src="js/app.js"></script>
</body>
</html>

