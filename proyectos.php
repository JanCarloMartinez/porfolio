<?php
 $pg ="proyectos";

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/Logo JM.ico" />
    <title>Proyectos</title>
</head>

<body id="proyectos">
    <header>
    <?php include_once "menu.php"; ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Los siguientes son algunos de los trabajos que he realizado:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-12 p-sm-4 px-4 py-2">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="images/abmclientes.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 color-gradiente py-3">
                        <h2>ABM CLIENTES</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap
                            y Json.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="sistema/abmclientes" class="btn btn-rojo" target="_blank">Ver online</a>
                        </div>
                        <div class="col-6 link-rojo text-center">
                            <a href="">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12 p-sm-4 px-4 py-2">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="images/abmventas.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 color-gradiente py-3">
                        <h2>SISTEMA DE GESTIÓN DE VENTAS</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC,
                            Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="sistema/login" class="btn btn-rojo" target="_blank">Ver online</a>
                        </div>
                        <div class="col-6 link-rojo text-center">
                            <a href="">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12 p-sm-4 px-4 py-2">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="images/proyecto-integrador.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 color-gradiente py-3">
                        <h2>PROYECTO INTEGRADOR</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS,
                            Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y
                            funcionalidades a fines.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 link-rojo text-center">
                            <a href="">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="container">
        <div class="row mt-5 pb-3">
            <div class="col-12 col-sm-3 text-center text-sm-start">
                <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/nelson-daniel-tarche/" target="_blank" title="Linkedin"><i
                        class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0 vinculos">
                <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE">Sponsor DePC Suite </a>
            </div>
            <div style="font-weight: 400;" class="col-12 col-sm-3 text-sm-start  pt-2 p-sm-0 vinculos">
                <a href="mailto:2015.jancarlo@gmail.com">2015.jancarlo@gmail.com</a>
            </div>
        </div>
    </footer>
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=573203544947" title="Whatsapp" target="_blank"><i
                class="fa-brands fa-whatsapp"></i></a>
    </div>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>