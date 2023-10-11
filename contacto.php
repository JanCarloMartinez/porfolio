<?php
 $pg ="contacto";

if($_POST){
    $nombre =$_POST["txtNombre"];
    $correo =$_POST["txtCorreo"];
    $telefono =$_POST["txtTelefono"];
    $mensaje =$_POST["txtMensaje"];

    // Varios destinatarios
    $para = "2015.jancarlo@gmial.com";
    $titulo = 'Recibiste un mensaje desde la web';

    //mensaje
    $cuerpo ="
    Nombre: $nombre <br>
    Correo: $correo <br>
    Telefono: $telefono <br>
    Mensaje: $mensaje <br>
    ";

    // Para enviar un HTML, se debe de establecer la cabecera Content-type
    $cabeceras = 'MIME-Vercion: 1.0'  . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=UFT-8' . "\r\n";

    // Cabeceras adicionales
    $cabeceras .= 'To: 2015.jancarlo@gmail.com' . "\r\n";
    $cabeceras .= 'Form: 2015.jancarlo@gmail.com' . "\r\n";

    // Enviarlo
    //mail($para, $titulo, $cuerpo, $cabecera);
    header("location: confirmacion-envio.php");
}


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
    <title>Contacto</title>
</head>

<body id="contacto">
    <header>
    <?php include_once "menu.php"; ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-12">
                <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
            </div>
            <div class="col-sm-6 col-12">
                <form action="" method="POST">
                    <div class="mb-3">
                        <input type="text" id="txtNombre" name="txtNombre" placeholder="Nombre"
                            class="form-control shadow" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" id="txtCorreo" name="txtCorreo" placeholder="Correo"
                            class="form-control shadow" required="">
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/Whatsapp"
                            class="form-control shadow" required="">
                    </div>
                    <div class="mb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje"
                            class="form-control shadow" required=""></textarea>
                    </div>
                    <div class="me-auto text-right">
                        <a href="confirmacion-envio.php"><button id="btnEnviar" name="btnEnviar" class="btn px-4">ENVIAR</button></a>
                    </div>
                </form>
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

</html