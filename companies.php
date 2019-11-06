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
        <script type="text/javascript" src="js\misfunciones.js"></script>

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
                                <input type="text" name="search" placeholder="Search...">
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
                            <a href="companies.html" title="">
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
                                        <img src="images\resources\cmp-icon.png" alt="">
                                        <h3>Facebook Inc.</h3>
                                        <h4>Establish Feb, 2004</h4>
                                        <ul>
                                            <li><a href="#" title="" class="follow">Follow</a></li>
                                            <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="company-profile.html" title="" class="view-more-pro">View Profile</a>
                                </div>
                                <!--company_profile_info end-->
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="company_profile_info">
                                    <div class="company-up-info">
                                        <img src="images\resources\cmp-icon1.png" alt="">
                                        <h3>Google Inc.</h3>
                                        <h4>Establish Feb, 2004</h4>
                                        <ul>
                                            <li><a href="#" title="" class="follow">Follow</a></li>
                                            <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="company-profile.html" title="" class="view-more-pro">View Profile</a>
                                </div>
                                <!--company_profile_info end-->
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="company_profile_info">
                                    <div class="company-up-info">
                                        <img src="images\resources\cmp-icon2.png" alt="">
                                        <h3>Pinterest</h3>
                                        <h4>Establish Feb, 2004</h4>
                                        <ul>
                                            <li><a href="#" title="" class="follow">Follow</a></li>
                                            <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="company-profile.html" title="" class="view-more-pro">View Profile</a>
                                </div>
                                <!--company_profile_info end-->
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="company_profile_info">
                                    <div class="company-up-info">
                                        <img src="images\resources\cmp-icon3.png" alt="">
                                        <h3>Microsoft Inc.</h3>
                                        <h4>Establish Feb, 2004</h4>
                                        <ul>
                                            <li><a href="#" title="" class="follow">Follow</a></li>
                                            <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="company-profile.html" title="" class="view-more-pro">View Profile</a>
                                </div>
                                <!--company_profile_info end-->
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="company_profile_info">
                                    <div class="company-up-info">
                                        <img src="images\resources\cmp-icon4.png" alt="">
                                        <h3>Line Inc.</h3>
                                        <h4>Establish Feb, 2004</h4>
                                        <ul>
                                            <li><a href="#" title="" class="follow">Follow</a></li>
                                            <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="company-profile.html" title="" class="view-more-pro">View Profile</a>
                                </div>
                                <!--company_profile_info end-->
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="company_profile_info">
                                    <div class="company-up-info">
                                        <img src="images\resources\cmp-icon5.png" alt="">
                                        <h3>Linked In</h3>
                                        <h4>Establish Feb, 2004</h4>
                                        <ul>
                                            <li><a href="#" title="" class="follow">Follow</a></li>
                                            <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="company-profile.html" title="" class="view-more-pro">View Profile</a>
                                </div>
                                <!--company_profile_info end-->
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="company_profile_info">
                                    <div class="company-up-info">
                                        <img src="images\resources\cmp-icon6.png" alt="">
                                        <h3>Apple Inc.</h3>
                                        <h4>Establish Feb, 2004</h4>
                                        <ul>
                                            <li><a href="#" title="" class="follow">Follow</a></li>
                                            <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="company-profile.html" title="" class="view-more-pro">View Profile</a>
                                </div>
                                <!--company_profile_info end-->
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="company_profile_info">
                                    <div class="company-up-info">
                                        <img src="images\resources\cmp-icon7.png" alt="">
                                        <h3>Samsung Inc.</h3>
                                        <h4>Establish Feb, 2004</h4>
                                        <ul>
                                            <li><a href="#" title="" class="follow">Follow</a></li>
                                            <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="company-profile.html" title="" class="view-more-pro">View Profile</a>
                                </div>
                                <!--company_profile_info end-->
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="company_profile_info">
                                    <div class="company-up-info">
                                        <img src="images\resources\cmp-icon8.png" alt="">
                                        <h3>Oppo</h3>
                                        <h4>Establish Feb, 2004</h4>
                                        <ul>
                                            <li><a href="#" title="" class="follow">Follow</a></li>
                                            <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="company-profile.html" title="" class="view-more-pro">View Profile</a>
                                </div>
                                <!--company_profile_info end-->
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="company_profile_info">
                                    <div class="company-up-info">
                                        <img src="images\resources\cmp-icon9.png" alt="">
                                        <h3>Game loft</h3>
                                        <h4>Establish Feb, 2004</h4>
                                        <ul>
                                            <li><a href="#" title="" class="follow">Follow</a></li>
                                            <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="company-profile.html" title="" class="view-more-pro">View Profile</a>
                                </div>
                                <!--company_profile_info end-->
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="company_profile_info">
                                    <div class="company-up-info">
                                        <img src="images\resources\cmp-icon10.png" alt="">
                                        <h3>Android Inc.</h3>
                                        <h4>Establish Feb, 2004</h4>
                                        <ul>
                                            <li><a href="#" title="" class="follow">Follow</a></li>
                                            <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="company-profile.html" title="" class="view-more-pro">View Profile</a>
                                </div>
                                <!--company_profile_info end-->
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="company_profile_info">
                                    <div class="company-up-info">
                                        <img src="images\resources\cmp-icon11.png" alt="">
                                        <h3>Oracle</h3>
                                        <h4>Establish Feb, 2004</h4>
                                        <ul>
                                            <li><a href="#" title="" class="follow">Follow</a></li>
                                            <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <a href="company-profile.html" title="" class="view-more-pro">View Profile</a>
                                </div>
                                <!--company_profile_info end-->
                            </div>
                        </div>
                    </div>
                    <!--companies-list end-->
                    <div class="process-comm">
                        <div class="spinner">
                            <div class="bounce1"></div>
                            <div class="bounce2"></div>
                            <div class="bounce3"></div>
                        </div>
                    </div>
                    <!--process-comm end-->
                </div>
            </section>
            <!--companies-info end-->
            <footer>
                <div class="footy-sec mn no-margin">
                    <div class="container">
                        <ul>
                            <li><a href="help-center.html" title="">Help Center</a></li>
                            <li><a href="about.html" title="">About</a></li>
                            <li><a href="#" title="">Privacy Policy</a></li>
                            <li><a href="#" title="">Community Guidelines</a></li>
                            <li><a href="#" title="">Cookies Policy</a></li>
                            <li><a href="#" title="">Career</a></li>
                            <li><a href="forum.html" title="">Forum</a></li>
                            <li><a href="#" title="">Language</a></li>
                            <li><a href="#" title="">Copyright Policy</a></li>
                        </ul>
                        <p><img src="images\copy-icon2.png" alt="">Copyright 2019</p>
                        <img class="fl-rgt" src="images\logo2.png" alt="">
                    </div>
                </div>
            </footer>

        </div>
        <!--theme-layout end-->



        <script type="text/javascript" src="js\jquery.min.js"></script>
        <script type="text/javascript" src="js\popper.js"></script>
        <script type="text/javascript" src="js\bootstrap.min.js"></script>
        <script type="text/javascript" src="js\flatpickr.min.js"></script>
        <script type="text/javascript" src="lib\slick\slick.min.js"></script>
        <script type="text/javascript" src="js\script.js"></script>
    </body>

    </html>