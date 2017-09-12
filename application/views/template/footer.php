<footer id="footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-ribbon">
                            <span>Estar en contacto</span>
                        </div>
                        <div class="col-md-3">
                            <h4>Mi cuenta</h4>
                            <ul class="links">
                                <li>
                                    <i class="fa fa-caret-right text-color-primary"></i>
                                    <a href="demo-shop-9-about-us.html">Sobre nosotros</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right text-color-primary"></i>
                                    <a href="demo-shop-9-contact-us.html">Contáctenos</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right text-color-primary"></i>
                                    <a href="demo-shop-9-myaccount.html">Mi cuenta</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right text-color-primary"></i>
                                    <a href="#">Historial de pedidos</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right text-color-primary"></i>
                                    <a href="#">Búsqueda Avanzada</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <div class="contact-details">
                                <h4>Información de Contacto</h4>
                                <ul class="contact">
                                    <li>
                                        <p><i class="fa fa-map-marker"></i> <strong>Dirección:</strong><br> <?php echo $information_shop[0]['address'] ?></p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-phone"></i> <strong>Teléfono:</strong><br> <?php echo $information_shop[0]['phone'] ?></p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-mobile-phone"></i> <strong>Celular:</strong><br> <?php echo $information_shop[0]['movil'] ?></p>
                                    </li>

                                    <li>
                                        <p><i class="fa fa-envelope-o"></i> <strong>Correo electrónico:</strong><br> <a href="mailto:<?php echo $information_shop[0]['email'] ?>"><?php echo $information_shop[0]['email'] ?></a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h4>Main Features</h4>
                            <ul class="features">
                                <li>
                                    <i class="fa fa-check text-color-primary"></i>
                                    <a href="#">Super Fast Template</a>
                                </li>
                                <li>
                                    <i class="fa fa-check text-color-primary"></i>
                                    <a href="#">1st Seller Template</a>
                                </li>
                                <li>
                                    <i class="fa fa-check text-color-primary"></i>
                                    <a href="#">19 Unique Shop Layouts</a>
                                </li>
                                <li>
                                    <i class="fa fa-check text-color-primary"></i>
                                    <a href="#">Powerful Template Features</a>
                                </li>
                                <li>
                                    <i class="fa fa-check text-color-primary"></i>
                                    <a href="#">Mobile &amp; Retina Optimized</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <div class="newsletter">
                                <h4>SE EL PRIMERO EN SABERLO</h4>
                                <p class="newsletter-info">Suscríbase al boletín informativo de Pwex eCommerce para recibir actualizaciones oportunas de sus productos favoritos todos los días.</p>
                                <div class="alert alert-success hidden" id="newsletterSuccess">
                                    <strong>¡Éxito!</strong> Te han agregado a nuestra lista de correo electrónico.
                                </div>
                                <div class="alert alert-danger hidden" id="newsletterError"></div>
                                <p>Introduzca su dirección de correo electrónico:</p>
                                <form id="newsletterForm" action="../php/newsletter-subscribe.php" method="POST">
                                    <div class="input-group">
                                        <input class="form-control" placeholder="Correo electrónico" name="newsletterEmail" id="newsletterEmail" type="text">
                                        <span class="input-group-btn">
                                        <button class="btn btn-primary" type="submit">Enviar</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        <a href="index.html" class="logo">
                        <img alt="Porto Website Template" class="img-responsive" src="<?php echo base_url('assets/img/demos/shop/logo-footer-white.png') ?>">
                        </a>
                        <ul class="social-icons">
                            <li class="social-icons-facebook">
                                <a href="<?php echo $information_shop[0]['facebook'] ?>" target="_blank" title="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="social-icons-twitter">
                                <a href="<?php echo $information_shop[0]['twitter'] ?>" target="_blank" title="Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="social-icons-linkedin">
                                <a href="<?php echo $information_shop[0]['linkedin'] ?>" target="_blank" title="Linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                        <img alt="Payments" src="<?php echo base_url('assets/img/demos/shop/payments.png') ?>" class="footer-payment">
                        <p class="copyright-text"><?php echo $information_shop[0]['copyright'] ?></p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- Vendor -->
        <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendor/jquery.appear/jquery.appear.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendor/jquery.easing/jquery.easing.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendor/jquery-cookie/jquery-cookie.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendor/common/common.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendor/jquery.validation/jquery.validation.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendor/jquery.gmap/jquery.gmap.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendor/jquery.lazyload/jquery.lazyload.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendor/isotope/jquery.isotope.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendor/owl.carousel/owl.carousel.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendor/magnific-popup/jquery.magnific-popup.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendor/vide/vide.min.js') ?>"></script>
        <!-- Theme Base, Components and Settings -->
        <script src="<?php echo base_url('assets/js/theme.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') ?>"></script>
        <!-- Current Page Vendor and Views -->
        <script src="<?php echo base_url('assets/js/views/view.contact.js') ?>"></script>
        
        <?php if ($this->uri->segment(1) == '' or $this->uri->segment(1) == 'search'): ?>   
            <script src="<?php echo base_url('assets/vendor/nouislider/nouislider.min.js') ?>"></script>
        <?php endif ?>
        
        <?php if ($this->uri->segment(1) == 'product'): ?>   
            <script src="<?php echo base_url('assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.js') ?>"></script>
            <script src="<?php echo base_url('assets/vendor/elevatezoom/jquery.elevateZoom-3.0.8.min.js') ?>"></script>
        <?php endif ?>

        <!-- Demo -->
        <script src="<?php echo base_url('assets/js/demos/demo-shop-9.js') ?>"></script>
        <!-- Theme Custom -->
        <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
        <!-- Theme Initialization Files -->
        <script src="<?php echo base_url('assets/js/theme.init.js') ?>"></script>
        
        <script src="<?php echo base_url('assets/js/examples/examples.carousels.js') ?>"></script>


        <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
            <script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            
                ga('create', 'UA-12345678-1', 'auto');
                ga('send', 'pageview');
            </script>
             -->
    </body>
</html>