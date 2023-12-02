<?php
if(isset($_SESSION["loginUser"]) and isset($_SESSION["senhaUser"])){
  ?>
  <link rel="stylesheet" href="css\lista-dropados.css">
<div class="container-h1">

  <h1>Manhwas que você dropou</h1>

</div>

<div class="container-manhwa">
  <div class="content">

    <?php
    $idUser = $idUser;
    if (isset($_GET["idManhwa"]) && isset($_GET["capPause"])) {
      $idManhwa = $_GET["idManhwa"];
      $capPause = $_GET["capPause"];
      $sql = "UPDATE tbdropados SET capPause = $capPause WHERE idManhwa = $idManhwa";
      mysqli_query($conexao, $sql);
    }

    function text_limiter_caracter($str, $limit, $suffix = '...')
    {

      while (substr($str, $limit, 1) != ' ') {
        $limit--;
      }

      if (strlen($str) <= $limit) {
        return $str;
      }

      return substr($str, 0, $limit + 1) . $suffix;
    }


    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
    } else {
      $msg = "";
    }


    echo "<p> $msg   </p>";



    $sql = "SELECT * FROM
          tbdropados as d inner join 
          tbmanhwas as m on d.idManhwa = m.idManhwa
          where idUser = $idUser 
          order by idDropado desc";

    $rs = mysqli_query($conexao, $sql);
    while ($dados = mysqli_fetch_assoc($rs)) {
      $str =  $dados["sinopseManhwa"];
    ?>
<div class="livros">
      <div class="book-list-item">
        <img src="./capa-manhwa/<?= $dados['capaManhwa'] ?>" alt="" class="book-list-item-img">
        <span class="book-list-item-title"><?= $dados["nomeManhwa"] ?></span>
        <p class="book-list-item-desc"><?= text_limiter_caracter($str, 200, '...') ?></p>

<div class="buttons-form">

  
<div class="button-class"><a href="?menu=ver&idManhwa=<?= $dados["idManhwa"] ?>"><button class="book-list-item-button">Ver</button></a>

  <a class="btn btn-outline-danger" href="index.php?menu=excluir-dropados&idDropado=<?= $dados["idDropado"] ?>">
    <i class="ph-duotone ph-trash icone"></i>
  </a>


  <form action="" method="get">
    
<div class="formulario">
    <div class="form">
      <input type="hidden" name="menu" value="lista-dropados">
      <input type="hidden" name="idManhwa" value="<?= $dados["idManhwa"] ?>">
      <label class="form-label" for="capPause">último capitulo lido:</label>
      <select class="form-select" name="capPause" id="capPause">
        <option value="">Selecione o capitulo</option>
        <?php
        $cont = 1;

        while ($cont <= $dados["capitulosManhwa"]) {
        ?>

          <option value="<?= $cont ?>" <?php echo ($cont == $dados["capPause"]) ? "selected" : ""; ?>><?= $cont ?></option>

        <?php
          $cont++;
        }
        ?>
      </select>
        <button type="submit" class="featured-button">ok</button>
    </div>
  </form>
</div>
  </div>
  </div>
  </div>
  </div>
    <?php
    }
    ?>
<div class="clear"></div>
  </div>
</div>

<?php
}else{
  header('Location:index.php?menu=login');
}
?>