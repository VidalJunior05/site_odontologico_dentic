<?php include('config.php'); ?>
<!DOCTYPE hml>
<html lang="pt-br">
    <head>
        <title>Grupo Odontológicao Dentic</title>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
        <meta name="author" content="Grupo Odontológico Dentic"/>
        <meta name="description" content="Grupo Odontológico Dentic- Localizado em São Pualo - SP"/>
        <meta name="keywords" content="dentista,cirurgiã,tratamentos,odontologia"/>
        <meta name="robots" content="index,follow"/>
        <meta name="format-detection" content="telephone=no"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
        <meta property="og:title" content="Grupo Odontológico Dentic"/>
        <meta property="og:site_name" content="Grupo Odontológico Dentic"/>
        <meta property="og:description" content="Grupo Odontológico Dentic- Localizado em São Paulo - SP"/>
        <meta property="og:url" content="https://ik.imagekit.io/zycp4d8fc4b/logo_Z7pzTggw6c.png?updatedAt=1629842011806"/>
        <meta property="og:image" content="https://ik.imagekit.io/zycp4d8fc4b/logo_Z7pzTggw6c.png?updatedAt=1629842011806">
        <meta property="og:image:type" content="image/png">
        <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/slick.css"/>
        <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/style.css"/>
        <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/font-awesome.min.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com"/>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet"/>
        <link rel="icon" type="image/x-icon" href="<?php echo INCLUDE_PATH; ?>imagens/icon-logo.ico"/>
        
    </head>
    <body>
    <header>
            <div class="center">
                <div class="logo">
                    <a href="<?php echo INCLUDE_PATH; ?>home"><img src="<?php echo INCLUDE_PATH; ?>imagens/logo.png" alt="Logo do Grupo Dentic"/></a>
                </div>
                <nav class="menu-desktop">
                    <ul>
                        <li><a class="active" href="<?php echo INCLUDE_PATH; ?>home">Home</a></li>
                        <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                        <li><a href="<?php echo INCLUDE_PATH; ?>tratamentos">Tratamentos</a></li>
                        <li><a href="<?php echo INCLUDE_PATH; ?>news">News</a></li>
                        <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                    </ul>
                </nav>
                <nav class="menu-mobile">
                    <div class="button-menu-mobile">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </div>
                    <ul>
                        <li><a class="active" href="<?php echo INCLUDE_PATH; ?>home">Home</a></li>
                        <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                        <li><a href="<?php echo INCLUDE_PATH; ?>tratamentos">Tratamentos</a></li>
                        <li><a href="<?php echo INCLUDE_PATH; ?>news">News</a></li>
                        <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <?php 
            $url = isset($_GET['url']) ? $_GET['url'] : 'home';
           if(file_exists('pages/'.$url.'.php')){
                include('pages/'.$url.'.php');
           }else{
               $pagina404 = true;
               include('pages/404.php');
           }
        ?>
        <footer>
            <div class="container-footer">
                <div class="item-footer-single order-item1-footer">
                    <figure>
                        <a href="<?php echo INCLUDE_PATH; ?>home"><img src="<?php echo INCLUDE_PATH; ?>imagens/logo.png" alt="Logo do Grupo Dentic"/></a>
                        <p>O Grupo Dentic nasceu com o intuito de restaurar belos sorrisos e cuidar da saúde bucal, 
                        e atentando-se ao bem-estar de seus pacientes com toda a comodidade e o conforto que cada um precisa e merece.</p>
                    </figure>
                </div>
                <div class="item-footer-single order-item2-footer">
                    <h2 class="title-footer">Links</h2>
                    <ul>
                        <li><a href="<?php echo INCLUDE_PATH; ?>Home">Home</a></li>
                        <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                        <li><a href="<?php echo INCLUDE_PATH; ?>tratamentos">Tratamentos</a></li>
                        <li><a href="<?php echo INCLUDE_PATH; ?>news">News</a></li>
                        <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                    </ul>
                </div>
                <div class="item-footer-single order-item3-footer">
                    <h2 class="title-footer">News Posts</h2>
                    <div class="item">
                        <div class="hover-effect">
                            <img src="<?php echo INCLUDE_PATH; ?>imagens/footer01.jpg" alt="Odontologia Estética"/>
                            <div class="overlay">
                                <div class="block-text-overlay">
                                    <h3>Odontologia<br/>Estética</h3>
                                    <a class="btn-efect-footer" href="#" target="_blank">Veja mais</a>
                                </div>
                            </div>
                        </div>
                        <div class="hover-effect">
                            <img src="<?php echo INCLUDE_PATH; ?>imagens/footer02.jpg" alt="Clareamento Dental"/>
                            <div class="overlay">
                                <div class="block-text-overlay">
                                    <h3>Clareamento<br/>Dental</h3>
                                    <a class="btn-efect-footer" href="#" target="_blank">Veja mais</a>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="item-footer-single order-item4-footer">
                    <h2 class="title-footer">Contato</h2>
                    <p class="text-contact">Aqui estão alguns de nossos contatos, vocês podem nos alcançar das seguintes maneiras:</p>
                    <div class="icons-footer">
                        <a href="#" target="_blank">
                            <div class="icon-single"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                            <a class="telephone-footer" href="tel:+1-303-499-7111">+55 (88) 9090-9090</a>
                        </a>
                    </div>
                    <div class="icons-footer">
                        <a href="#" target="_blank">
                            <div class="icon-single"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                            <span>Av. Parque da Princesa,São Paulo-SP</span>
                        </a>
                    </div>
                    <div class="icons-footer">
                        <a href="#" target="_blank">
                            <div class="icon-single"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                            <span>info_odonto@contato.com</span>
                        </a>
                    </div>
                    <div class="social-medias">
                        <a href="#" target="_blank">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <span class="back-to-top"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></span> 
        </footer>  
        <script src="<?php echo INCLUDE_PATH; ?>https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="<?php echo INCLUDE_PATH; ?>js/slick.js"></script>
        <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
    </body>     
</html>