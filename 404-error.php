<!doctype html>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta author="https://github.com/SoteloJoaquin">
  <meta name="description" content="...">
  <title>Error - empresa-tabaquería</title>
  <!--Favicon-->
  <link rel="shortcut icon" href="assets/images/favicon.png">
  <!--Google Fonts-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;400;500;600;700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Martel&display=swap" rel="stylesheet">
  <!-- Plugins CSS -->
  <link rel="stylesheet" href="assets/css/plugins.css">
  <!-- Main Style CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<!-- 
  Google tag (gtag.js) 
-->
<body class="home">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!--Preloader-->
  <div id="preloader">
    <div class="loader"></div>
  </div>
  <!--End Preloader-->
  <div class="page-wrapper">
    <!-- START TOP-BAR -->
    <?php include ('add/top-bar.php') ?>
    <!-- END TOP-BAR -->
    <!-- START HEADER + MOBILE DRAWER MENU -->
    <?php include('add/header.php') ?>
    <!-- END HEADER + MOBILE DRAWER MENU -->
    <!--START PAGE CONTENT-->
    <main id="page-content">
    <main id="page-content" class="mb-0">
    <!--404 Error Section-->
    <section class="section error-404-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                    <div class="error-content">
                        <h1 class="title">404</h1>
                        <h2 class="mb-3">Página no encontrada</h2>
                        <p class="mb-4">¡Ups! La página que buscas no existe aún. Estamos trabajando en ello.</p>
                        <a href="index.php" class="btn btn-outline-primary btn-lg rounded-pill"><i class="cp-lg cps cp-home mx-2"></i>De vuelta a casa</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End 404 Error Section-->
    
</main><!--End Page Content-->
      <!-- START FOOTER -->
      <?php include('add/footer.php') ?>
    <!-- END FOOTER -->
    <!-- START BACK TO TOP -->
    <a href="#" class="back-to-top" title="Ir al inicio"><i class="bi bi-arrow-up-circle-fill fs-2"></i></a>
    <!-- END BACK TO TOP --> 
  
  </div><!--page-wrapper-->
  <script src="assets/js/vendor/jquery-min.js"></script>
  <script src="assets/js/vendor/js.cookie.js"></script>
  <!--Including Javascript-->
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
  <!-- Photoswipe Gallery -->
  <script src="assets/js/vendor/photoswipe.min.js"></script>
  <script src="assets/js/vendor/photoswipe.js"></script>
</body>
</html>