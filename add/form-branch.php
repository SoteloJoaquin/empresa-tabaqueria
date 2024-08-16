  <!-- START FORM INFO -->
<section class="contact-form-section section pt-0 mt-3">
  <div class="contact-inner">
    <div class="formFeilds contact-form form-vertical">
      <div class="section-title text-center mb-4">
        <h2 class="title text-uppercase mt-2 mb-2 text-center">Contacto</h2>
        <p class="text-center">Estamos para ayudarlo</p>
      </div><!-- section-title text-center mb-4 -->
      <div class="row row-cols-1 row-cols-md-4 g-4 mx-auto">
        <div class="col new-col-one">
          <div class="card h-100">
            <div class="card-body">
              <form action="add/consult.php" name="contactus" method="post" id="contact-form" class="contact-form">	
                <div class="row">
                  <div class="mb-2">
                    <div class="form-group">
                      <input type="text" id="ContactFormName" name="name" class="form-control" placeholder="Nombre" value="" required/>
                      <span class="error_msg" id="name_error"></span>
                    </div><!-- form-group -->
                  </div><!-- mb-2 -->
                  <div class="mb-2">                               
                    <div class="form-group">
                      <input type="email" id="ContactFormEmail" name="email" class="form-control" placeholder="Correo Electrónico" value="" required/>
                      <span class="error_msg" id="email_error"></span>
                    </div>
                  </div>
                </div><!-- row -->
                <div class="row">
                  <div class="mb-2">
                    <div class="form-group">
                      <input class="form-control" type="tel" id="ContactFormPhone" name="phone" pattern="[0-9\-]*" placeholder="Número de celular" value="" required/>
                    </div>
                  </div>
                  <div class="mb-2">
                    <div class="form-group">
                      <input type="text" id="ContactSubject" name="subject" class="form-control" placeholder="Asunto" value="" required/>
                      <span class="error_msg" id="subject_error"></span>
                    </div><!-- form-group -->
                  </div><!-- mb-2 -->
                </div><!-- row -->
                <div class="row">
                  <div class="mb-3">
                    <div class="form-group">
                      <textarea id="ContactFormMessage" name="message" class="form-control" rows="4" placeholder="Ingrese su mensaje" required></textarea>
                      <span class="error_msg" id="message_error"></span>
                    </div><!-- form-group -->
                  </div><!-- mb-3 --> 
                </div><!-- row -->
                <div class="row">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group mailsendbtn mb-0 w-100 text-center">	
                      <input class="btn btn-primary rounded mb-2" type="submit" name="contactus" value="Enviar" />
                      <div class="loading"><img class="img-fluid" src="assets/images/ajax-loader.gif" alt="loading"></div>
                      <?php
                       if(isset($_GET['ok'])) {
                        echo "<h6>!SU MENSAJE FUE ENVIADO CORRECTAMENTE!</h6>";
                       }
                       ?>
                    </div><!-- form-group mailsendbtn mb-0 w-100 text-center -->
                  </div><!-- col-12 col-sm-12 col-md-12 col-lg-12 -->
                </div><!-- row -->
              </form>
              <div class="response-msg"></div>
            </div><!-- card-body -->
          </div><!-- card h-100 -->
        </div><!-- col new-col-one -->
        <div class="col new-col">
          <div class="card h-100">
            <div class="card-body new-card-body">
              <div class="branch-general">
                <div class="branch-inner">
                  <div class="branch-title text-center">
                    <h3 class="title">Sucursal 1</h3>
                  </div>
                  <div class="branch-bx text-center"> 
                    <h2 class="branch-type"><small class="branch-address">Calle 1</small></h2>
                  </div>
                  <p class="text text-center">Horarios de atención<br> Lunes a sábados:&nbsp;&nbsp;09:00hs a 20:00hs<br>&nbsp;&nbsp;</p>
                  <ul class="list-group list-group-flush branch-features">
                    <li class="list-group-item text-start">
                      <a href="#" target="_blank"><i class="bi bi-whatsapp icon-wp">&nbsp;+5491122334455</i></a>
                    </li>
                    <li class="list-group-item text-start">
                      <a href="#" target="_blank"><i class=" bi bi-facebook icon-fb">&nbsp;facebook</i></a>
                    </li>
                    <li class="list-group-item text-start">
                      <a href="#" target="_blank"><i class="bi bi-instagram icon-ig">&nbsp;Instagram</i></a>
                    </li>
                  </ul>
                </div><!-- branch-inner -->
              </div><!-- branch-general -->
            </div><!-- card-body new-card-body -->
          </div><!-- card h-100 -->
        </div><!-- col new-col -->
        <div class="col new-col">
          <div class="card h-100">
            <div class="card-body new-card-body">
              <div class="branch-general">
                <div class="branch-inner">
                  <div class="branch-title text-center">
                    <h3 class="title">Sucursal 2</h3>
                  </div>
                  <div class="branch-bx text-center"> 
                    <h2 class="branch-type"><small class="branch-address">Calle 2</small></h2>
                  </div>
                  <p class="text text-center">Horarios de atención<br> Lunes a viernes:&nbsp;&nbsp;09:00hs a 20:00hs<br>Sábados:&nbsp;&nbsp;10:00hs a 20:00hs</p>
                  <ul class="list-group list-group-flush branch-features">
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
                </div><!-- branch-inner -->
              </div><!-- branch-general -->
            </div><!-- card-body new-card-body -->
          </div><!-- card h-100 -->
        </div><!-- col new-col -->
        <div class="col new-col">
          <div class="card h-100">
            <div class="card-body new-card-body">
              <div class="branch-general">
                <div class="branch-inner">
                  <div class="branch-title text-center">
                    <h3 class="title">Sucursal 3</h3>
                  </div>
                  <div class="branch-bx text-center"> 
                    <h2 class="branch-type"><small class="branch-address">Calle 3</small></h2>
                  </div>
                  <p class="text text-center">Horarios de atención<br> Lunes a sabados:&nbsp;&nbsp;10:00hs a 15:00hs&nbsp;y&nbsp;16:00hs a 20:00hs<br>Sábados:&nbsp;&nbsp;10:00hs a 20:00hs</p>
                  <ul class="list-group list-group-flush branch-features">
                    <li class="list-group-item text-start">
                      <a href="#" target="_blank"><i class="bi bi-whatsapp icon-wp">&nbsp;+5491167896789</i></a>
                    </li>
                    <li class="list-group-item text-start">
                      <a href="#" target="_blank"><i class="bi bi-facebook icon-fb">&nbsp;facebook</i></a>
                    </li>
                    <li class="list-group-item text-start">
                      <a href="#" target="_blank"><i class="bi bi-instagram icon-ig">&nbsp;Instagram</i></a>
                    </li>
                  </ul>
                </div><!-- branch-inner -->
              </div><!-- branch-general -->
            </div><!-- card-body new-card-body -->
          </div><!-- card h-100 -->
        </div><!-- col new-col -->
      </div><!-- row row-cols-1 row-cols-md-4 g-4 mx-auto -->
    </div><!-- formFeilds contact-form form-vertical -->
  </div><!-- contact-inner -->
</section>
<!-- END FORM INFO -->
