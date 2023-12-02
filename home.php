<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

<?php



include("form-pesquisa.php");






$sql = "SELECT * FROM tbmanhwas  where idManhwa = 1";
$rs = mysqli_query($conexao, $sql);
while ($dados = mysqli_fetch_assoc($rs)) {
?>




    <div class="container">
        <div class="content-container">
            <div class="featured-content" style="background-image: linear-gradient(rgba(0, 0, 0, 0.1), #101820ff), url('./capa-manhwa/Banner-Beware.jpg');background-repeat:no-repeat; background-position: center;">
                <h1 class="featured-title"><?= $dados["nomeManhwa"] ?></h1>
                <!-- <h3 class="featured-author"> <i>by</i> Mia Castello </h3> -->
                <p class="featured-text"><?= $dados["sinopseManhwa"] ?></p>
                <div class="button-section">
                    <a href="?menu=ver&idManhwa=<?= $dados["idManhwa"] ?>"><button class="featured-button">Ver <i class="fas fa-book"></i> </button></a>

                </div>
            </div>

        <?php
    }
        ?>












        <div class="book-list-container">
            <h1 class="book-list-title">NOVOS</h1>
            <div class="book-list-wrapper">
                <div class="book-list">


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







                    $sql = "SELECT * FROM tbmanhwas where idManhwa between 1 and 10 ";
                    $rs = mysqli_query($conexao, $sql);
                    while ($dados = mysqli_fetch_assoc($rs)) {
                        $str =  $dados["sinopseManhwa"];
                    ?>







                        <div class="book-list-item">
                            <img src="./capa-manhwa/<?= $dados['capaManhwa'] ?>" alt="" class="book-list-item-img">
                            <span class="book-list-item-title"><?= text_limiter_caracter($dados["nomeManhwa"], 20, '...') ?>
                            </span>
                            <p class="book-list-item-desc"><?= text_limiter_caracter($str, 120, '...') ?></p>
                            <div class="button-class"><a href="?menu=ver&idManhwa=<?= $dados["idManhwa"] ?>"><button class="book-list-item-button">Ver</button></a>
                            </div>
                        </div>





                    <?php
                    }
                    ?>


                </div>
                <i class="arrow fas fa-chevron-right "></i>

            </div>
        </div>











        <div class="book-list-container">
            <h1 class="book-list-title">POPULARES DA SEMANA</h1>
            <div class="book-list-wrapper">
                <div class="book-list">



                    <?php







                    $sql = "SELECT * FROM tbmanhwas where idManhwa between 11 and 20";
                    $rs = mysqli_query($conexao, $sql);
                    while ($dados = mysqli_fetch_assoc($rs)) {
                        $str =  $dados["sinopseManhwa"];
                    ?>







                        <div class="book-list-item">
                            <img src="./capa-manhwa/<?= $dados['capaManhwa'] ?>" alt="" class="book-list-item-img">
                            <span class="book-list-item-title"><?= text_limiter_caracter($dados["nomeManhwa"], 20, '...') ?>
                            </span>
                            <p class="book-list-item-desc"><?= text_limiter_caracter($str, 120, '...') ?></p>
                            <div class="button-class"><a href="?menu=ver&idManhwa=<?= $dados["idManhwa"] ?>"><button class="book-list-item-button">Ver</button></a>
                            </div>
                        </div>





                    <?php
                    }
                    ?>


                </div>
                <i class="arrow fas fa-chevron-right "></i>

            </div>
        </div>








        <div class="book-list-container">
            <h1 class="book-list-title">MAIS QUERIDOS</h1>
            <div class="book-list-wrapper">
                <div class="book-list">


                    <?php







                    $sql = "SELECT * FROM tbmanhwas where idManhwa between 21 and 30";
                    $rs = mysqli_query($conexao, $sql);
                    while ($dados = mysqli_fetch_assoc($rs)) {
                        $str =  $dados["sinopseManhwa"];
                    ?>







                        <div class="book-list-item">
                            <img src="./capa-manhwa/<?= $dados['capaManhwa'] ?>" alt="" class="book-list-item-img">
                            <span class="book-list-item-title"><?= text_limiter_caracter($dados["nomeManhwa"], 20, '...') ?>
                            </span>
                            <p class="book-list-item-desc"><?= text_limiter_caracter($str, 120, '...') ?></p>
                            <div class="button-class"><a href="?menu=ver&idManhwa=<?= $dados["idManhwa"] ?>"><button class="book-list-item-button">Ver</button></a>
                            </div>
                        </div>





                    <?php
                    }
                    ?>


                </div>
                <i class="arrow fas fa-chevron-right "></i>

            </div>
        </div>







        <?php







        $sql = "SELECT * FROM tbmanhwas where idManhwa = 41";
        $rs = mysqli_query($conexao, $sql);
        while ($dados = mysqli_fetch_assoc($rs)) {
        ?>







            <div class="featured-content" style="background-image: linear-gradient(rgba(0, 0, 0, 0.1), #101820ff), url('./capa-manhwa/Banner-Operation.jpg');background-repeat:no-repeat; background-position: center;">
                <h1 class="featured-title"><?= $dados["nomeManhwa"] ?> </h1>
                <p class="featured-text"><?= $dados["sinopseManhwa"] ?></p>
                <div class="button-section">
                    <a href="?menu=ver&idManhwa=<?= $dados["idManhwa"] ?>"><button class="featured-button">Ver <i class="fas fa-book"></i></button></a>

                </div>

            </div>


        <?php
        }
        ?>









        <div class="book-list-container">
            <h1 class="book-list-title">EM ANDAMENTO</h1>
            <div class="book-list-wrapper">
                <div class="book-list">



                    <?php







                    $sql = "SELECT * FROM tbmanhwas where idManhwa between 31 and 40";
                    $rs = mysqli_query($conexao, $sql);
                    while ($dados = mysqli_fetch_assoc($rs)) {
                        $str =  $dados["sinopseManhwa"];
                    ?>







                        <div class="book-list-item">
                            <img src="./capa-manhwa/<?= $dados['capaManhwa'] ?>" alt="" class="book-list-item-img">
                            <span class="book-list-item-title"><?= text_limiter_caracter($dados["nomeManhwa"], 20, '...') ?>
                            </span>
                            <p class="book-list-item-desc"><?= text_limiter_caracter($str, 120, '...') ?></p>
                            <div class="button-class"><a href="?menu=ver&idManhwa=<?= $dados["idManhwa"] ?>"><button class="book-list-item-button">Ver</button></a>
                            </div>
                        </div>





                    <?php
                    }
                    ?>




                </div>
                <i class="arrow fas fa-chevron-right "></i>
            </div>
        </div>








        <div class="book-list-container">
            <h1 class="book-list-title">FINALIZADOS</h1>
            <div class="book-list-wrapper">
                <div class="book-list">



                    <?php







                    $sql = "SELECT * FROM tbmanhwas where idManhwa between 41 and 54";
                    $rs = mysqli_query($conexao, $sql);
                    while ($dados = mysqli_fetch_assoc($rs)) {
                        $str =  $dados["sinopseManhwa"];
                    ?>







                        <div class="book-list-item">
                            <img src="./capa-manhwa/<?= $dados['capaManhwa'] ?>" alt="" class="book-list-item-img">
                            <span class="book-list-item-title"><?= text_limiter_caracter($dados["nomeManhwa"], 20, '...') ?>
                            </span>
                            <p class="book-list-item-desc"><?= text_limiter_caracter($str, 120, '...') ?></p>
                            <div class="button-class"><a href="?menu=ver&idManhwa=<?= $dados["idManhwa"] ?>"><button class="book-list-item-button">Ver</button></a>
                            </div>
                        </div>





                    <?php
                    }
                    ?>





                </div>
                <i class="arrow fas fa-chevron-right "></i>
            </div>
        </div>
        </div>
    </div>


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
                        <li><a title="termos-de-uso" href="">Termos de Uso</a></li>
                        <li> | </li>
                        <li><a title="sobre-nos" href="">Sobre Nós</a></li>
                        <li> | </li>
                        <li><a title="Contato" href="">Contato</a></li>
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
    <script src="js/app.js"></script>