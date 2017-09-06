<section class="form-section">
    <div class="container">
        <h1 class="h2 heading-primary font-weight-normal mb-md mt-lg">Ingresar o Crear una cuenta</h1>
        <div class="featured-box featured-box-primary featured-box-flat featured-box-text-left mt-md">
            <div class="box-content">
                <form action="#">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-content">
                                <h3 class="heading-text-color font-weight-normal">Nuevos clientes</h3>
                                <p>Al crear una cuenta en nuestra tienda, podrá desplazarse más rápidamente por el proceso de pago, almacenar varias direcciones de envío, ver y realizar un seguimiento de sus pedidos en su cuenta y mucho más.</p>
                            </div>
                            <div class="form-action clearfix">
                                <a href="<?php echo base_url('account') ?>" class="btn btn-primary">Crea una cuenta</a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-content">
                                <h3 class="heading-text-color font-weight-normal">Clientes Registrados</h3>
                                <p>Si tienes una cuenta con nosotros, inicia sesión.</p>
                                <div class="form-group">
                                    <label class="font-weight-normal">Dirección de correo electrónico <span class="required">*</span></label>
                                    <input type="email" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-normal">Contraseña <span class="required">*</span></label>
                                    <input type="password" class="form-control" required="">
                                </div>
                                <p class="required">* Campos requeridos</p>
                            </div>
                            <div class="form-action clearfix">
                                <a href="#" class="pull-left">¿Olvidaste tu contraseña?</a>
                                <input type="submit" class="btn btn-primary" value="Enviar">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>