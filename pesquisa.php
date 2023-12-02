<link rel="stylesheet" href="css\pesquisa.css">
<?php
include("form-pesquisa.php");
?>
<div class="container-manhwa">
  <div class="content">
  <?php
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

$sql = "SELECT * FROM tbmanhwas where nomeManhwa like '%{$txtPesquisa}%'";
$rs = mysqli_query($conexao, $sql);
while ($dados = mysqli_fetch_assoc($rs))
{
$str =  $dados["sinopseManhwa"];
    ?>
    <div class="book-list-item">
        <img src="./capa-manhwa/<?=$dados['capaManhwa']?>" alt=""
      class="book-list-item-img">
    <span class="book-list-item-title"><?=$dados["nomeManhwa"]?></span>
      <p class="book-list-item-desc"><?=text_limiter_caracter($str, 200, '...')?></p>
         <div class="button-class"><a href="?menu=ver&idManhwa=<?=$dados["idManhwa"]?>"><button class="book-list-item-button">Ver</button></a>
        </div>
        </div>
<?php
}
?>
<div class="clear"></div>
  </div>
  </div>