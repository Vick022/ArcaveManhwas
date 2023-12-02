<?php
if(isset($_SESSION["loginUser"]) and isset($_SESSION["senhaUser"])){

  ?>

<link rel="stylesheet" href="css\lista-quero-ler.css">

<div class="container-h1">

    <h1>Manhwas que você deseja ler</h1>

</div>
<div class="container-manhwa">
  <div class="content">

        <?php
           $idUser = $idUser;

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
          tbqueroler as q inner join 
          tbmanhwas as m on q.idManhwa = m.idManhwa
          where idUser = $idUser 
          order by idQuero desc";
  
         $rs = mysqli_query($conexao, $sql);
         while ($dados = mysqli_fetch_assoc($rs)){
          $str =  $dados["sinopseManhwa"];
        ?>
        
        <div class="book-list-item">
        <img src="./capa-manhwa/<?=$dados['capaManhwa']?>" alt=""
      class="book-list-item-img">
    <span class="book-list-item-title"><?=$dados["nomeManhwa"]?></span>
      <p class="book-list-item-desc"><?=text_limiter_caracter($str, 200, '...')?></p>


         <div class="button-class"><a href="?menu=ver&idManhwa=<?=$dados["idManhwa"]?>"><button class="book-list-item-button">Ver</button></a>
         
         <a class="btn btn-outline-danger" href="index.php?menu=excluir-quero-ler&idQuero=<?=$dados["idQuero"]?>">
                <i class="ph-duotone ph-trash icone"></i>
                </a>
         
        </div>
        </div>


    <?php
    }
    ?>
<div class="clear"></div>
</div>
 </div>
    <script src="js/app.js"></script>
    <?php
}else{
  header('Location:index.php?menu=login');
}
?>