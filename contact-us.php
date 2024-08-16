<!doctype html>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta author="https://github.com/SoteloJoaquin">
  <meta name="description" content="...">
  <title>Contacto - empresa tabaquería</title>
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
      <!--Page Heading-->
      <div class="page-banner img-page-banner">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1>CONTACTO</h1>
              <p class="sort-title">ESTAMOS PARA AYUDARTE</p>
            </div>
          </div>
        </div>
      </div>
      <!--End Page Heading-->
      <!--Breadcrums-->
      <div class="breadcrumbs">
        <div class="container">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Inicio</a> <span><i class="cps cp-angle-right"></i></span></li>
              <li class="breadcrumb-item active" aria-current="page">Contacto</li>
            </ol>
          </nav>
        </div>
      </div>
      <!--End Breadcrums-->
      <!-- START FORM-CONTACT -->
      <div class="row row-cols-1 row-cols-md-2 g-4 p-3">
		<div class="col"><!--inicio form-->
			<div class="card p-3 h-100">
				<h2 class="text-center font-black fw-semibold mt-5">ESCRIBINOS</h2>
				<h6 class="text-center px-5 txt-h6">ENVIANOS TU MENSAJE Y UNA PERSONA DE NUESTRO STAFF SE PONDRÁ EN CONTACTO A LA BREVEDAD.</h6>
				<form action="add/contact-form.php" method="POST" class="mt-2 text-center">
					<div class="row">
						<div class="col-10 mx-auto">
							<div class="form-group mb-2">
								<input type="text" name="name" id="name" placeholder="Nombre" required class="col-12 p-2" data-error="Por favor ingrese su nombre"><div class="help-block with-errors"></div>
							</div><!--form-group-->
						</div><!--col-10-->
						<div class="col-10 mx-auto">
							<div class="form-group mb-2">
								<input type="email" name="email" id="email" placeholder="Correo electronico" required class="col-12 p-2" data-error="Por favor ingrese su correo electrónico"><div class="help-block with-errors"></div> 
							</div><!--form-group-->
						</div><!--col-10-->
						<div class="col-10 mx-auto">
							<div class="form-group mb-2">
								<input type="tel" name="phone" id="phone" placeholder="Número de celular" required class="col-12 p-2" data-error="Por favor ingrese su Número de celular"><div class="help-block with-errors"></div> 
							</div><!--form-group-->
						</div><!--col-10-->
						<div class="col-10 mx-auto">
							<div class="form-group mb-2">
								<input type="text" name="subject" id="subject" placeholder="Asunto" required class="col-12 p-2" data-error="Por favor ingrese el nombre del asunto"><div class="help-block with-errors"></div> 
							</div><!--form-group-->
						</div><!--col-10-->
						<div class="col-10 mx-auto">
							<div class="form-group">
								<textarea name="message" id="message" placeholder="Ingrese su mensaje" rows="4" data-error="Escriba su mensaje" maxlength="250" required class="col-12 p-2"></textarea><div class="help-block with-errors"></div>
							</div><!--form-group-->
							<!--<div>
								<input type="checkbox" name="" id="" checked>
								<label for="">Suscribite al newsletter</label>
							</div> !--checkbox-->
							<div class="submit-button text-center mb-5">
								<button class="btn btn-common mt-2 mb-2" name="consult" id="submit" type="submit">ENVIAR</button>
								<div id="msgSubmit" class="h3 text-center hidden"></div>
								<div class="clearfix"></div>
									<?php
                                       if(isset($_GET['ok'])) {
                                        echo "<h6>!SU MENSAJE FUE ENVIADO CORRECTAMENTE!</h6>";
                                       }
                                       ?>
							</div><!--submit-button-->
						</div><!--col-10-->
					</div><!--row-->
				</form>
			</div><!-- card-->
		</div><!-- col form -->
		<div class="col"><!-- sucursal 1 -->
			<div class="card h-100">
				<div class="card-body">
					<div class="card">
						<h3 class="card-header back-black text-center fs-4">Sucursal 1</h3>
						<h5 class="back-black text-center fs-6">Calle 1</h5>
						<p class="card-text mt-2 ms-3">Horarios de atención<br> Lunes a sabados:&nbsp;&nbsp;09:00hs a 20:00hs</p>
						<ul class="list-group list-group-flush">
							<li class="list-group-item text-start">
                <a href="#" target="_blank"><i class="bi bi-whatsapp icon-wp">&nbsp;+5491122334455</i></a>
              </li>
							<li class="list-group-item text-start">
                <a href="#" target="_blank"><i class="bi bi-facebook icon-fb">&nbsp;facebook</i></a>
              </li>
							<li class="list-group-item text-start">
                <a href="#" target="_blank"><i class="bi bi-instagram icon-ig">&nbsp;Instagram</i></a>
              </li>
						</ul>
					</div><!--card-->
				</div><!-- card body -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d210147.47497308676!2d-58.59811205222632!3d-34.615430347191214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1723689727487!5m2!1ses!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="card-img-top"></iframe>
			</div><!-- card -->
		</div><!-- col -->
		<div class="col"><!-- sucursal 2 -->
			<div class="card h-100">
				<div class="card-body">
					<div class="card">
            <h3 class="card-header back-black text-center fs-4">Sucursal 2</h3>
            <h5 class="back-black text-center fs-6">Calle 2</h5>
            <p class="card-text mt-2 ms-3">Horarios de atención<br> Lunes a viernes:&nbsp;&nbsp;09:00hs a 20:00hs<br>Sábados:&nbsp;&nbsp;10:00hs a 20:00hs</p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item text-start">
                <a href="#" target="_blank"><i class="bi bi-whatsapp icon-wp">&nbsp;+5491123452345</i></a>
              </li>
              <li class="list-group-item text-start">
                <a href="#" target="_blank"><i class="bi bi-facebook icon-fb">&nbsp;facebook</i></a>
              </li>
              <li class="list-group-item text-start">
                <a href="#" target="_blank"><i class="bi bi-instagram icon-ig">&nbsp;Instagram</i></a>
              </li>
            </ul>
          </div><!--card-->
				</div><!-- card body -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d210147.47497308676!2d-58.59811205222632!3d-34.615430347191214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1723689727487!5m2!1ses!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="card-img-top"></iframe>
			</div><!-- card -->
		</div><!-- col -->
		<div class="col"><!-- ciudad jardin -->
			<div class="card h-100">
				<div class="card-body">
          <div class="card">
            <h3 class="card-header back-black text-center fs-4">Sucursal 3</h3>
            <h5 class="back-black text-center fs-6">Calle 3</h5>
            <p class="card-text mt-2 ms-3">Horarios de atención<br> Lunes a sabados:&nbsp;&nbsp;10:00hs a 15:00hs&nbsp;y&nbsp;16:00hs a 20:00hs<br>Sábados:&nbsp;&nbsp;10:00hs a 20:00hs</p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item text-start">
                <a href="#" target="_blank"><i class="bi bi-whatsapp icon-wp">&nbsp;+5491123452345</i></a>
              </li>
              <li class="list-group-item text-start">
                <a href="#" target="_blank"><i class="bi bi-facebook icon-fb">&nbsp;facebook</i></a>
              </li>
              <li class="list-group-item text-start">
                <a href="#" target="_blank"><i class="bi bi-instagram icon-ig">&nbsp;Instagram</i></a>
              </li>
            </ul>
          </div><!--card-->
				</div><!-- card body -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d210147.47497308676!2d-58.59811205222632!3d-34.615430347191214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1723689727487!5m2!1ses!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="card-img-top"></iframe>
			</div><!-- card -->
		</div><!-- col -->
	</div><!-- row row-cols-1 row-cols-md-2 g-4 -->
    </main>
    <!--End Page Content-->
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