<section class="form-section" style="font-family: 'Open Sans';">
    <div class="container">
        <h1 class="h2 heading-primary mb-md mt-lg" style="font-family: 'Open Sans'; font-weight: lighter; font-size: 2.5em;">Ingresar o Crear una cuenta</h1>
        <div class="featured-box featured-box-primary featured-box-flat featured-box-text-left mt-md">
            <div class="box-content" style="padding: 15px 25px;">
                <?php echo form_open('validation/access') ?>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-content">
                                <?php if ($this->uri->segment(1) == 'access' and $this->uri->segment(2) == 'denied'): ?>
                                    <!-- Mensaje de error de acceso a la aplicación -->
                                    <div class="alert alert-warning alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <strong>Control de acceso,</strong> los datos ingresado son incorrectos.
                                    </div>
                                    <!-- Mensaje de error de acceso a la aplicación End -->
                                <?php endif ?>
                                <h3 class="heading-text-color" style="font-family: 'Open Sans'; font-weight: lighter; font-size: 2em;">Clientes Registrados</h3>
                                <p>Si tienes una cuenta con nosotros, inicia sesión.</p>
                                <div class="form-group">
                                    <label class="font-weight-normal">Dirección de correo electrónico <span class="required">*</span></label>
                                    <input type="email" name="email" id="email" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-normal">Contraseña <span class="required">*</span></label>
                                    <input type="password" name="password" id="password" class="form-control" required="">
                                </div>
                                <p class="required">* Campos requeridos</p>
                            </div>
                            <div class="form-action clearfix">
                                <a href="<?php echo base_url('reset-key') ?>" class="pull-left">¿Olvidaste tu contraseña?</a>
                                <input type="submit" class="btn btn-primary" value="Enviar">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-content">
                                <h3 class="heading-text-color" style="font-family: 'Open Sans'; font-weight: lighter; font-size: 2em;">Nuevos clientes</h3>
                                <p>Al crear una cuenta en nuestra tienda, podrá desplazarse más rápidamente por el proceso de pago, almacenar varias direcciones de envío, ver y realizar un seguimiento de sus pedidos en su cuenta y mucho más.</p>
                            </div>
                            <div class="form-action clearfix">
                                <a href="<?php echo base_url('account') ?>" class="btn btn-primary">Crea una cuenta</a>
                            </div>
                        </div>
                    </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</section>
<div>