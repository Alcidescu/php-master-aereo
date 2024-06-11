<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Logistica</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/Imagenes que se pueden ocupar/airport-MMAA.png" rel="icon">
  <link href="assets/Imagenes que se pueden ocupar/protesis.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style4.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.3.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <?php
  error_reporting(0);
  session_start();
  session_destroy();
  header('Locaction: Logistica.php');
  // Código que puede generar un error
  if (isset($_SESSION['usuario'])) {
    $logueado = true;
  } else {
    $logueado = false;
  }
  ?>
  <!-- ======= Header ======= -->
  <header id="header" style="background: black;" class="fixed-top ">
  <div class="container d-flex align-items-center justify-content-lg-between">

    <h1 class="logo me-auto me-lg-0"><a href="Logistica.php">MMAA<span>.</span></a></h1>

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="nav-link scrollto" href="index-pagos.php">Comprar boletos</a></li>
        <?php if ($logueado) { ?>
          <li><a class="nav-link scrollto" href="cerrar.php">Cerrar Sesión</a></li>
        <?php } else { ?>
          <li><a class="nav-link scrollto" href="Login.php">Iniciar Sesión</a></li>
        <?php } ?>
        <li><a class="nav-link scrollto" href=""></a></li>
        <?php if (!$logueado) { ?>
          <li><a class="nav-link scrollto" href="Formulario_vuelos.php">Crear vuelos</a></li>
        <?php } else{ ?>
        <?php } ?>
      </ul>
    </nav>

  </div>
</header>
  <!-- ======= Hero Section ======= -->

  <section id="hero" class="d-flex align-items-center justify-content-center">
    <!--     -->
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>BIEVENIDO</h1>
          <h2>ESTE ES EL APARTADO ADMINISTRATIVO, ELIGE LA OPCIÓN QUE DESEES REALIZAR</h2>
        </div>
      </div>
      
      <main id="main">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
       <!--  
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
              </div>
              <div class="col-md-12">
              </div>
              <div class="col-md-12">
                <p style="color: white;">Copyright &copy; 2021 Todos los derechos reservador Aeropuerto Internacional de
                  Acapulco

                  | Devoloped: <em>Armando David Camacho Merino</em></p>
              </div>
            </div>
          </div>
        </footer>
        -->

        <!-- Vendor JS Files -->
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/purecounter/purecounter.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

</body>

</html>