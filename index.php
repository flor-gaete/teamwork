<?php

include("conexion/conexion.php");
session_start(); 
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>TEAMWORK</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" type="text/css" href="css\animate.css">
    <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css\line-awesome.css">
    <link rel="stylesheet" type="text/css" href="css\line-awesome-font-awesome.min.css">
    <link href="vendor\fontawesome-free\css\all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css\font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css\jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="lib\slick\slick.css">
    <link rel="stylesheet" type="text/css" href="lib\slick\slick-theme.css">
    <link rel="stylesheet" type="text/css" href="css\style.css">
    <link rel="stylesheet" type="text/css" href="css\responsive.css">
</head>

<body oncontextmenu="return false;">

    <div class="wrapper">
        <header>
            <div class="container">
                <div class="header-data">
                    <div class="logo">
                        <a href="index.php" title=""><img src="images\cm-logo.png" alt=""></a>
                    </div>
                    <!--logo end-->
                    <div class="search-bar">
                        <form>
                            <input type="text" name="search" placeholder="Buscar...">
                            <button type="submit"><i class="la la-search"></i></button>
                        </form>
                    </div>
                    <!--search-bar end-->
                    <nav>
                        <?php  

                    
                    if ((isset($_SESSION['nombreUsuario']))==false){
                            echo '<ul>
                            <li>
                                <a href="companies.php" title="">
                                    <span><img src="images\icon2.png" alt=""></span> Categorías
                                </a>
                            </li>
                            <li>
                            <a href="companies.php" title="">
                                <span><img src="images\icon2.png" alt=""></span> ¿Quienes somos?
                            </a>
                        </li>
                            
                            <li>
                            <a href="sign-in.php" title="">
                                <span><img src="images\icon3.png" alt=""></span> Login
                            </a>
                        </li>

                        <li>
                                <a href="sign-in.php" title="">
                                    <span><img src="images\icon3.png" alt=""></span> Registrarse
                                </a>
                            </li>
                        </ul> ' ;

                    }else {
                        echo'
                        <ul>
                            <li>
                                <a href="companies.php" title="">
                                    <span><img src="images\icon2.png" alt=""></span> Categorías
                                </a>
                            </li>
                            <li>
                            <a href="companies.php" title="">
                                <span><img src="images\icon2.png" alt=""></span> ¿Quienes somos?
                            </a>
                        </li>
                            <div class="user-account">
                            <div class="user-info">
                                <img src="images\resources\user.png" alt="">
                                <a href="#" title="" id="username">'.$_SESSION['nombreUsuario'].'</a>
                                <i class="la la-sort-down"></i>
                            </div>
                            <div class="user-account-settingss">
                                <ul class="us-links">
                                   
                                </ul>
                                <h3  class="tc"><a href="perfil.php" title="">Mi Perfil</a>

                                <h3 class="tc"><a href="profile-account-setting.html" title="">Configuración Cuenta</a></h3>

                                <h3 class="tc"><a href="sign-in.php" title="">Cerrar Sesión</a></h3>
                            </div>
                        </div> 
                        </ul>' ;

                    }
                      ?>

                    </nav>
                </div>
            </div>
        </header>
        <!--header end-->
        <main>
            <div class="main-section">
               
                   
                        

                            <div class="main-ws-sec">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                        </li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="images/header.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/anuncio3.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/blog.png" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>


                                <!--right-sidebar end-->
                            </div>
                        </div>
                    </div>
                    <!-- main-section-data end-->
                </div>
            </div>
            <section class="companies-info">
                <div class="container">
                    <div class="company-title">
                        <h3>Categorias</h3>
                    </div>
                    <!--company-title end-->
                    <div class="companies-list">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="company_profile_info">
                                    <div class="company-up-info">
                                        <img src="images\arquitectura.jpg" alt="">
                                        <h3>Arquitectura</h3>
                                        <h4>Los mejores arquitectos y sus propuestas...</h4>
                                        <ul>
                                            <li><a href="#" title="" class="follow">Follow</a></li>
                                            <li><a href="#" title="" class="message-us"><i
                                                        class="fa fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="company-profile.html" title="" class="view-more-pro">Ver Proyecto</a>
                                </div>
                                <!--company_profile_info end-->
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="company_profile_info">
                                    <div class="company-up-info">
                                        <img src="images\educacion.jpg" alt="">
                                        <h3>Educación</h3>
                                        <h4>Encuentra ideas innovadoras para tus clases...</h4>
                                        <ul>
                                            <li><a href="#" title="" class="follow">Follow</a></li>
                                            <li><a href="#" title="" class="message-us"><i
                                                        class="fa fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="company-profile.html" title="" class="view-more-pro">Ver Proyecto</a>
                                </div>
                                <!--company_profile_info end-->
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="company_profile_info">
                                    <div class="company-up-info">
                                        <img src="images\desarrollador.jpg" alt="">
                                        <h3>Desarrollo Web</h3>
                                        <br>
                                        <h4>¿Quieres innovar?</h4>
                                        <ul>
                                            <li><a href="#" title="" class="follow">Follow</a></li>
                                            <li><a href="#" title="" class="message-us"><i
                                                        class="fa fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="company-profile.html" title="" class="view-more-pro">Ver Proyecto</a>
                                </div>
                                <!--company_profile_info end-->
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="company_profile_info">
                                    <div class="company-up-info">
                                        <img src="images\anuncio5.jpg" alt="">
                                        <h3>Diseño gráfico</h3>
                                        <br>
                                        <h4>.</h4>
                                        <ul>
                                            <li><a href="#" title="" class="follow">Follow</a></li>
                                            <li><a href="#" title="" class="message-us"><i
                                                        class="fa fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="company-profile.html" title="" class="view-more-pro">Ver Proyecto</a>
                                </div>
                                <!--company_profile_info end-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </main>

        <br>

        <footer>
            <div class="footy-sec mn no-margin">
                <div class="container">
                    <ul>
                        <li><a href="help-center.html" title="">Help Center</a></li>
                        <li><a href="about.html" title="">About</a></li>
                        <li><a href="#" title="">Privacy Policy</a></li>
                        <li><a href="#" title="">Cookies Policy</a></li>
                        <li><a href="#" title="">Language</a></li>
                        <p><img src="images\copy-icon2.png" alt="">Copyright 2019</p>
                        <img class="fl-rgt" src="images\logo.svg" alt="">
                    </ul>
                </div>
            </div>

        </footer>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/popper.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>
        <script type="text/javascript" src="lib/slick/slick.min.js"></script>
        <script type="text/javascript" src="js/scrollbar.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/misfunciones.js"></script>


</body>

</html>