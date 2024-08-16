<!doctype html>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta author="https://github.com/SoteloJoaquin">
  <meta name="description" content="...">
  <title>Empresa-Tabaquería</title>
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
<!-- Google tag (gtag.js) -->

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
      <!-- START Homepage Slideshow-->
      <section class="slideshow home-slideshow p-0">
        <div class="slide">
          <div class="blur-up lazyload">
            <img class="blur-up lazyload desktop-hide img-fluid" data-src="assets/images/index/slider-01.webp" src="assets/images/index/slider-01.webp" alt="imagen predeterminada" title="imagen predeterminada" width="1920" height="830" />
            <img class="blur-up lazyload mobile-hide" data-src="assets/images/index/slider-02.webp" src="assets/images/index/slider-02.webp" alt="imagen predeterminada" title="imagen predeterminada" width="1110" height="770" />
            <div class="slideshow-overlay topCenter text-center">
              <div class="slideshow-content">
                <div class="wrap-caption animation style1 my-auto">
                  <h2 class="mega-title">TIENDA ONLINE</h2>
                  <br>
                  <span class="mega-subtitle text-uppercase">ENCONTRA EN UN LUGAR TODO LO QUE BUSCAS PARA ESOS MOMENTOS ÚNICOS</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END Homepage Slideshow-->
      <!-- START Features Section-->
      <section class="section feature-section p-0 position-relative">
        <div class="container">
          <div class="feature-section-in rounded-3">
            <div class="row">
              <div class="col-12 col-sm-12 col-md-8 col-lg-8 d-flex flex-column justify-content-center">
                <div class="feature-content">
                  <h2 class="title mb-3">TIENDA ONLINE</h2>
                  <h3 class="mb-3 fw-semibold">TODOS NUESTROS PRODUCTOS DISPONIBLES</h3>
                  <p class="mt-3">Desde empresa-tabaqueria, seguimos trabajando para poder llegar a todos nuestros cliente de la mejor manera. Por eso, hemos tomado la decisión de darle vida a esta tienda online, para que usted, pueda disfrutar de la mejor calidad en nuestros productos desde cualquier rincón de Argentina. También encontrará beneficios especiales para comerciantes y/o revendedores.</p>
                  <a href="#" class="btn btn-lg rounded-pill btn-primary">IR A LA TIENDA</a>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-4 col-lg-4 d-none align-items-center d-lg-flex d-md-flex">
                <div class="position-absolute">
                  <video class="lazyload me-5 px-3" data-src="https://videos.pexels.com/video-files/6247699/6247699-sd_640_360_24fps.mp4" src="https://videos.pexels.com/video-files/6247699/6247699-sd_640_360_24fps.mp4" alt="video Reinar Ramos Mejía" title="video Reinar Ramos Mejía" width="420" height="440" autoplay muted controls loop></video>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END Features Section-->
      <!-- START BRANCH -->
      <div class="text-center title-branch">
        <h2 class="my-3 title font-black">NUESTRAS SUCURSALES</h2>
        <div class="card-group px-3">
          <div class="card me-2">
            <img src="https://images.stockcake.com/public/8/e/b/8eb5b81d-8743-4c18-b54f-f7d0fb8e625c_large/serene-forest-cabin-stockcake.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title font-black fw-semibold">SUCURSAL 1</h5>
              <p class="card-text font-black">CALLE 1</p>
              <div class="card-footer">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d210147.47497308676!2d-58.59811205222632!3d-34.615430347191214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1723689727487!5m2!1ses!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div><!--card footer-->
            </div><!--card body-->
          </div><!--card-->
          <div class="card me-2">
            <img src="https://images.stockcake.com/public/8/e/b/8eb5b81d-8743-4c18-b54f-f7d0fb8e625c_large/serene-forest-cabin-stockcake.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title font-black fw-semibold">SUCURSAL 2</h5>
              <p class="card-text font-black">CALLE 2</p>
              <div class="card-footer">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d210147.47497308676!2d-58.59811205222632!3d-34.615430347191214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1723689727487!5m2!1ses!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div><!--card footer-->
            </div><!--card body-->
          </div><!--card-->
          <div class="card">
            <img src="https://images.stockcake.com/public/8/e/b/8eb5b81d-8743-4c18-b54f-f7d0fb8e625c_large/serene-forest-cabin-stockcake.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title font-black fw-semibold">SUCURSAL 3</h5>
              <p class="card-text font-black">CALLE 3</p>
              <div class="card-footer">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d210147.47497308676!2d-58.59811205222632!3d-34.615430347191214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1723689727487!5m2!1ses!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div><!--card footer-->
            </div><!--card body-->
          </div><!--card-->
        </div><!--card group-->
      </div>
      <!-- END BRANCH -->
      <!-- START BETWEEN -->
      <div class="between">
        <div class="container">
          <div class="row">
            <div class="text-center">
              <p class="p-0 fw-bold">Nuestros años de experiencia nos posiciona como una de las tabaquerías lideres de Buenos Aires.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- END BETWEEN -->
      <!-- START GALLERY -->
      <div class="gallery-box">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="heading-title text-center">
                <h2 class="title font-black">GALERIA</h2>
                <p class="">ALGUNOS PRODUCTOS QUE PODRÁS ENCONTRAR EN NUESTRAS TIENDAS</p> 
              </div><!--heading title-->
            </div><!--col-->
          </div><!--row-->
          <div class="tz-gallery">
            <div class="row">
              <div class="col-sm-12 col-md-4 col-lg-4">
                <a class="lightbox">
                  <img class="img-fluid" src="https://images.stockcake.com/public/b/9/8/b984a553-2555-4da2-9ff8-5c3b50f3cafd_large/sapling-bursts-forth-stockcake.jpg" alt="...">
                </a>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <a class="lightbox">
                  <img class="img-fluid" src="https://images.stockcake.com/public/a/6/e/a6edbd60-7d2f-4ca0-bad9-11cbfa6904ba_large/resilient-life-blooms-stockcake.jpg" alt="...">
                </a>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <a class="lightbox">
                  <img class="img-fluid" src="https://images.stockcake.com/public/b/9/8/b984a553-2555-4da2-9ff8-5c3b50f3cafd_large/sapling-bursts-forth-stockcake.jpg" alt="...">
                </a>
              </div>
              <div class="col-sm-12 col-md-4 col-lg-4">
                <a class="lightbox">
                  <img class="img-fluid" src="https://images.stockcake.com/public/a/6/e/a6edbd60-7d2f-4ca0-bad9-11cbfa6904ba_large/resilient-life-blooms-stockcake.jpg" alt="...">
                </a>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <a class="lightbox">
                  <img class="img-fluid" src="https://images.stockcake.com/public/b/9/8/b984a553-2555-4da2-9ff8-5c3b50f3cafd_large/sapling-bursts-forth-stockcake.jpg" alt="...">
                </a>
              </div> 
              <div class="col-sm-6 col-md-4 col-lg-4">
                <a class="lightbox">
                  <img class="img-fluid" src="https://images.stockcake.com/public/a/6/e/a6edbd60-7d2f-4ca0-bad9-11cbfa6904ba_large/resilient-life-blooms-stockcake.jpg" alt="...">
                </a>
              </div><!--col-->
            </div><!--row-->
          </div><!--tz gallery-->
        </div><!--container-->
      </div><!--gallery box-->
      <!-- END GALLERY -->
      <!-- START BETWEEN -->
      <div class="between">
        <div class="container">
          <div class="row">
            <div class="text-center">
              <p class="p-0 fw-bold">#empresatabaqueria</p>
            </div>
          </div>
        </div>
      </div>
      <!-- END BETWEEN -->
      <!-- START BRANCH + FORM -->
      <?php include('add/form-branch.php') ?>
      <!-- END BRANCH + FORM -->
       <!-- START FOOTER -->
    <?php include('add/footer.php') ?>
    <!-- END FOOTER -->
    </main>
    <!-- END PAGE CONTENT -->
    <!--Newsletter Popup-->
    <div id="newsletter-modal" class="style1 mfp-with-anim mfp-hide">
      <div class="newsletter-popup d-flex flex-column">
        <div class="newsltr-img"><img class="blur-up lazyload" src="https://images.stockcake.com/public/5/b/9/5b9036e1-8d7c-4a7e-8dc2-65b6fc56c169_large/vibrant-logo-display-stockcake.jpg" data-src="https://images.stockcake.com/public/5/b/9/5b9036e1-8d7c-4a7e-8dc2-65b6fc56c169_large/vibrant-logo-display-stockcake.jpg" alt="" width="300" height="150" /></div>
        <div class="newsltr-text text-center">
          <div class="wraptext">
            <h2>ESCRÍBENOS UN MENSAJE A NUESTRO WHATSAPP</h2>
            <p class="sub-text">¡Mantente informado! Consejos Mensuales, Novedades y Descuento.</p>
            <ul class="social-icons mt-3">
              <li><a href="#" target="_blank"><i class="cpb bi bi-whatsapp"></i></a>+5491122334455</li>
            </ul>
            <p class="checkboxlink">
              <input type="checkbox" id="dontshow" class="form-check-input m-0">
              <label for="dontshow" class="mx-2 align-middle">No volver a mostrar esta ventana</label>
            </p>
          </div><!-- wraptext -->
        </div><!-- newsltr-text text-center -->
      </div><!-- newsletter-popup d-flex flex-column -->
      <button title="Close (Esc)" type="button" class="mfp-close">×</button>
    </div><!-- #/newsletter-modal-->
	  <!--End Newsletter Popup-->

    <div class="modalOverly"></div>

    <!-- Including Jquery -->
    <script src="assets/js/vendor/jquery-min.js"></script>
    <script src="assets/js/vendor/js.cookie.js"></script>
    <!--Including Javascript-->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- Photoswipe Gallery -->
    <script src="assets/js/vendor/photoswipe.min.js"></script>
    <script src="assets/js/vendor/photoswipe.js"></script>

    <div id="gallery" class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
            <button class="pswp__button pswp__button--share" title="Share"></button>
            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
          <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__center"></div>
          </div>
        </div>
      </div>
    </div>
   
    <!-- START BACK TO TOP -->
    <a href="#" class="back-to-top" title="Ir al inicio"><i class="bi bi-arrow-up-circle-fill fs-2"></i></a>
    <!-- END BACK TO TOP --> 

    <!--Newsletter Popup Cookies-->
    <script>
      function newsletter_popup(){
        var cookieSignup="cookieSignup", date=new Date();
        if($.cookie(cookieSignup) !='true' && window.location.href.indexOf("challenge#newsletter-modal") <=-1) {
          setTimeout( function() {
            $.magnificPopup.open( {
              items: {
                src: '#newsletter-modal'
              }
              , type:'inline', removalDelay:300, mainClass: 'mfp-zoom-in'
            }
            );
          }
          , 5000);
        }
        $.magnificPopup.instance.close=function () {
          if($("#dontshow").prop("checked")==true) {
            $.cookie(cookieSignup, 'true', {
              expires: 1, path: '/'
            }
          );
        }
          $.magnificPopup.proto.close.call(this);
        }
      }
      newsletter_popup();
    </script>
    <!--End Newsletter Popup Cookies-->
  </div><!--page-wrapper-->
  <script>
  const app = express();
app.get('/', function(request, response) {
    // Generate a new random nonce value for every response.
    const nonce = crypto.randomBytes(16).toString("base64");
    // Set the strict nonce-based CSP response header
    const csp = `script-src 'nonce-${nonce}' 'strict-dynamic' https:; object-src 'none'; base-uri 'none';`;
    response.set("Content-Security-Policy", csp);
    // Every <script> tag in your application should set the `nonce` attribute to this value.
    response.render(template, { nonce: nonce });
 });
} </script>
</body>
</html>