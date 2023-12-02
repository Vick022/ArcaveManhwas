<link rel="stylesheet" href="css\manhwas.css">
    <?php
     $idManhwa = $_GET["idManhwa"];
     $sql = "SELECT * FROM tbmanhwas where idManhwa = $idManhwa";
     $rs = mysqli_query($conexao, $sql);
     while ($dados = mysqli_fetch_assoc($rs)){
    ?>
    <div>
    <img src="./capa-manhwa/<?=$dados['capaManhwa']?>" alt="" class="capa">
    </div>
    <div class="text">
    <h2><?=$dados["nomeManhwa"]?></h2>
    <p><?=$dados["sinopseManhwa"]?></p>
    <div class="button">
<a href="index.php?menu=inserir-lendo&idManhwa=<?=$dados["idManhwa"]?>">
<button>  
    Lendo
</button>
</a>
<a href="index.php?menu=inserir-lido&idManhwa=<?=$dados["idManhwa"]?>">
<button>
    Lido
</button>
</a>
<a href="index.php?menu=inserir-quero-ler&idManhwa=<?=$dados["idManhwa"]?>">
<button>
    Quero Ler
</button>
<a href="index.php?menu=inserir-dropados&idManhwa=<?=$dados["idManhwa"]?>">
<button>
    Dropado
</button>
</div>
</div>
</div>
<div class="clear"></div>
<?php
}
?>




<footer class="site-footer">
      <div class="footer">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <p class="text-justify">
            Direitos autorais e logotipos para manhwas e diferentes materiais promocionais são 
            de propriedade de seus respectivos proprietários e seu uso é permitido pela cláusula
            de Uso Justo da Lei de Direitos Autorais dos EUA.(The copyrights and logos of 
            the manhwas and different promotional substances are held by their respective owners 
            and their use is permitted under the fair use clause of U.S. copyright law.)</p>
          </div>
          
          <div class="col-xs-6 col-md-3">
            <ul class="footer-links">
              <li><a title="politica-de-privacidade" href="">Política de Privacidade</a></li>
              <li> | </li>
              <li><a  title="termos-de-uso" href="">Termos de Uso</a></li>
              <li> | </li>
              <li><a  title="sobre-nos" href="">Sobre Nós</a></li>
              <li> | </li>
              <li><a  title="Contato" href="">Contato</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="footer">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2023 All Rights Reserved by 
         <a href="#">Arcave</a>.
            </p>
          </div>
</footer>
