<section class="form-section register-form">
    <div class="container">
        <h1 class="h2 heading-primary font-weight-normal mb-md mt-lg">Crea una cuenta</h1>
        <div class="featured-box featured-box-primary featured-box-flat featured-box-text-left mt-md">
            <div class="box-content">
                <form action="#">
                    <h4 class="heading-primary text-uppercase mb-lg">INFORMACION PERSONAL</h4>
                    <div class="row">
                        <div class="col-sm-4 col-md-3">
                            <div class="form-group">
                                <label class="font-weight-normal">Primer nombre <span class="required">*</span></label>
                                <input type="text" class="form-control" required="">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-3">
                            <div class="form-group">
                                <label class="font-weight-normal">Segundo nombre</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-5">
                            <div class="form-group">
                                <label class="font-weight-normal">Apellido <span class="required">*</span></label>
                                <input type="text" class="form-control" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label class="font-weight-normal">Dirección de correo electrónico <span class="required">*</span></label>
                                <input type="email" class="form-control" required="">
                            </div>
                            <div class="checkbox mb-xlg">
                                <label>
                                <input type="checkbox" value="1" style="margin-top: -0.29em">
                                Suscríbete al boletín
                                </label>
                            </div>
                            <h4 class="heading-primary text-uppercase mb-lg">INFORMACIÓN DE ACCESO</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="font-weight-normal">Contraseña <span class="required">*</span></label>
                                <input type="password" class="form-control" required="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="font-weight-normal">Confirmar contraseña <span class="required">*</span></label>
                                <input type="password" class="form-control" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p class="required mt-lg mb-none">* Campos requeridos</p>
                            <div class="form-action clearfix mt-none">
                                <a href="<?php echo base_url('auth') ?>" class="pull-left"><i class="fa fa-angle-double-left"></i> Regresar</a>
                                <input type="submit" class="btn btn-primary" value="Enviar">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>