<!--Header-->
<header id="header"><!--class="header-fixed"-->
  <div class="header d-flex align-items-center">
    <div class="container-xl">
      <div class="row">
        <div class="col-2 col-sm-3 col-md-4 d-flex d-lg-none mobile-icons">
          <!--Mobile Toggle-->
          <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
              <i class="icon cps cp-times"></i>
              <i class="icon cps cp-bars"></i>
          </button>
          <!--End Mobile Toggle-->
        </div>
        <div class="col-8 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <!--Desktop Logo-->
            <a class="logo" href="index.php"><img src="https://images.stockcake.com/public/5/b/9/5b9036e1-8d7c-4a7e-8dc2-65b6fc56c169_large/vibrant-logo-display-stockcake.jpg" alt="Logo empresa-tabaquería" title="Logo empresa-tabaquería" style="width: 200px; height: 80px"></a>
            <!--End Desktop Logo-->
        </div>
        <div class="col-4 col-sm-4 col-md-6 col-lg-7 col-xl-7 prs-0 d-none d-lg-block my-auto">
          <!--Desktop Menu-->
          <nav class="grid__item px-5 pr-0" id="AccessibleNav">
            <ul id="siteNav" class="site-nav medium right hidearrow">
              <li class="lvl1"><a href="index.php" class="">Inicio</a></li><!-- borre class="active" -->
              <li class="lvl1"><a href="about-us.php">Nosotros</a></li>
              <li class="lvl1 parent dropdown">
                <a href="branch-offices.php">Sucursales</a>
                <ul class="dropdown">
                  <li><a class="new_center" href="#local-1">sucursal 1</a></li>
                  <li><a class="new_center" href="#local-2" class="site-nav">Sucursal 2</a></li>
                  <li><a class="new_center" href="#local-3" class="site-nav">Sucursal 3</a></li>
                </ul>
              </li>
              <li class="lvl1"><a href="#" target="_blank">Tienda</a></li>
              <li class="lvl1"><a href="contact-us.php">Contacto</a></li>
            </ul>
          </nav>
          <!--End Desktop Menu-->
        </div>
      </div>
    </div>
  </div>
</header>
<!--Header-->
<!--Mobile Drawer Menu-->
<div class="mobile-nav-wrapper" role="navigation">
  <div class="closemobileMenu"><i class="icon cps cp-times pull-right"></i>Cerrar Menu</div>
  <ul id="MobileNav" class="mobile-nav">
    <li class="lvl1"><a href="index.php">Home</a></li>
    <li class="lvl1"><a href="about-us.php">Nosotros</a></li>
    <li class="lvl1 parent">
      <a href="branch-offices.php">Sucursales<i class="cps cp-plus"></i></a>
      <ul class="dropdown">
        <li><a href="#local-1" class="site-nav">Sucursal 1</a></li>
        <li><a href="#local-2" class="site-nav">Sucursal 2</a></li>
        <li><a href="#local-3" class="site-nav">Sucursal 3</a></li>
      </ul>
    </li>
    <li class="lvl1"><a href="#" target="_blank">Tienda</a></li>
    <li class="lvl1"><a href="contact-us.php">Contacto</a></li>
  </ul>
</div>
<!--End Mobile Drawer Menu-->