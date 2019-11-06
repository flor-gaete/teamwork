<?php
session_start();
include 'conexion/conexion.php';

error_reporting(E_ERROR);

if(isset($_SESSION['usuario']))
{
  header("Location: sign-in.php");
}
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="lib\slick\slick.css">
    <link rel="stylesheet" type="text/css" href="lib\slick\slick-theme.css">
    <link rel="stylesheet" type="text/css" href="css\style.css">
    <link rel="stylesheet" type="text/css" href="css\responsive.css">
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body class="sign-in" oncontextmenu="return false;">

    <div class="wrapper">

        <div class="sign-in-page">
            <div class="signin-popup">
                <div class="signin-pop">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="cmp-info">
                                <div class="cm-logo">
                                    <img src="images\logo.svg" alt="">
                                    <p>TeamWork, es una plataforma global independiente y una red social donde las
                                        empresas y los profesionales independientes se conectan y colaboran de forma
                                        remota</p>
                                </div>
                                <!--logo-->
                                <img src="images\cm-main-img.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="login-sec">
                                <ul class="sign-control">
                                    <li data-tab="tab-1" class="current"><a href="" title="">Iniciar Sesión</a></li>
                                    <li data-tab="tab-2"><a href="sign-in.php" title="">Regístrate</a></li>
                                </ul>
                            <div class="sign_in_sec current" id="tab-1">
                                    <h3>Iniciar Sesión</h3>
                                    <form action="" method="">
                                        <div class="row">
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="text" id="user" placeholder="Usuario"
                                                        required="required">
                                                    <i class="la la-user"></i>
                                                </div>
                                                <!--sn-field end-->
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="password" id="password" placeholder="Contraseña"
                                                        required="required">
                                                    <i class="la la-lock"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="checky-sec">
                                                    <div class="fgt-sec">
                                                        <input type="checkbox" name="cc" id="c1">
                                                        <label for="c1">
                                                            <span></span>
                                                        </label>
                                                        <small>Recuérdame</small>
                                             <br>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                            <br>
                                            <a href="#" title="">Se te olvidó tu contraseña?</a>
                                            <div class="col-lg-12 no-pdd">
                                                <button type="button" id="btnIniciarSesion">Ingresar</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!--login-resources end-->
                                </div>
                                <!--sign_in_sec end-->
                                <div class="sign_in_sec" id="tab-2">
                                    <div class="dff-tab current" id="tab-3">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="text" name="nombre" placeholder="Nombre Completo"
                                                            value="<?php echo $_POST['nombre']; ?>" required>
                                                        <i class="la la-user"></i>
                                                    </div>
                                                </div>
                                                <!-- </div> -->
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="text" name="email" placeholder="Email"
                                                            value="<?php echo $_POST['email']; ?>" required>
                                                        <i class="la la-user"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="text" name="usuario" class="form-control"
                                                            placeholder="Usuario"
                                                            value="<?php echo $_POST['usuario']; ?>" required>
                                                        <i class="la la-user"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="password" name="contrasena" placeholder="Password"
                                                            required>
                                                        <i class="la la-lock"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input type="password" name="repcontrasena"
                                                            placeholder="Repita Password" required>
                                                        <i class="la la-lock"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="checky-sec st2">
                                                        <div class="fgt-sec">
                                                            <input type="checkbox" name="cc" id="c2">
                                                            <label for="c2">
                                                                <span></span>
                                                            </label>
                                                            <small>Si, entiendo y acepto los Términos y
                                                                condiciones</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <button type="submit" name="registrar">Registrarme</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footy-sec">
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
                    <p><img src="images\copy-icon.png" alt="">Copyright 2019</p>
                </div>
            </div>
        </div>

    </div>
    <?php
    if(isset($_POST['registrar'])) {
      
      $nombre = $conn->quote($_POST['nombre']);
      $email = $conn->quote($_POST['email']);
      $usuario = $conn->quote($_POST['usuario']);
      $password= $conn->quote(md5($_POST['contrasena']));
      $reppassword = $conn->quote(md5($_POST['repcontrasena']));

      $comprobarusuario = $conn->query("SELECT nombre_usuario FROM usuario WHERE nombre_usuario = $usuario");

      $comprobaremail = $conn->query("SELECT email_usuario FROM usuario WHERE email_usuario = $email");

      if($comprobarusuario->rowCount() >= 1) { ?>

    <br>

    <script>
    alert('El nombre de usuario está en uso, por favor escoja otro')
    </script>

    <?php exit; }  

        if($comprobaremail->rowCount() >= 1) { ?>

    <br>

    <script>
    alert('El email ya está en uso por favor escoja otro o verifique si tiene una cuenta')
    </script>

    <?php exit; } 

        if($password != $reppassword) { ?>

    <br>
    <script>
    alert('Las contraseñas no coinciden')
    </script>


    <?php exit; } 

      $insertar = $conn->query("INSERT INTO usuario (nombre_usuario,email_usuario,password_usuario,fecha_reg) values ($nombre,$email,$password,now())");

      if($insertar !== FALSE) { ?>

    <br>

    <script>
    alert('Felicidades se ha registrado correctamente Inicie Sesión')
    </script>
    
    <?php
        // header("Refresh: 2; url = sign-in.php");
        }
      }
    ?>
    </div>
    </div>
    <script>
        $('#btnIniciarSesion').click(function () {
            let user = $('#user').val();
            let pwd = $('#password').val();
            let parametros = {
                usuario: user,
                password: pwd
            }
            $.ajax({
                type: "POST",
                url: "validarUsuario.php",
                data: parametros,
                success: function (res) {
                    console.log(res)
                    if (res == true) {
                        window.location.href = 'perfil.php'
                    } else {
                        alert('El usuario o contraseña son incorrectos')
                    }

                },
                beforeSend: function () {}
            });
        })
    </script>

    <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/iCheck/icheck.min.js"></script>
    <script type="text/javascript" src="js\jquery.min.js"></script>
    <script type="text/javascript" src="js\popper.js"></script>
    <script type="text/javascript" src="js\bootstrap.min.js"></script>
    <script type="text/javascript" src="lib\slick\slick.min.js"></script>
    <script type="text/javascript" src="js\script.js"></script>
</body>

</html>