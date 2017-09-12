<style type="text/css">
    .msg-error {
        color: #f53628;
        font-size: small;
        font-weight: 600;
        margin-top: 5px;
    }
</style>
<section class="form-section register-form">
    <div class="container">
        <h1 class="h2 heading-primary mb-md mt-lg" style="font-family: 'Open Sans'; font-weight: lighter; font-size: 2em;">Crea una cuenta</h1>
        <div class="featured-box featured-box-primary featured-box-flat featured-box-text-left mt-md">
            <div class="box-content" style="padding: 15px 25px;">
                <?php echo form_open('') ?>
                    <h4 class="heading-primary text-uppercase mb-lg">INFORMACION PERSONAL</h4>
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <div class="form-group">
                                <label class="font-weight-normal">Primer nombre <span class="required">*</span></label>
                                <input type="text" name="name" id="name" class="form-control" value="<?php echo set_value('name') ?>" required="">
                                <span><?php echo form_error('name'); ?></span>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="form-group">
                                <label class="font-weight-normal">Segundo nombre</label>
                                <input type="text" name="second_name" id="second_name" class="form-control" value="<?php echo set_value('second_name') ?>">
                                <span><?php echo form_error('second_name') ?></span>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="form-group">
                                <label class="font-weight-normal">Apellido <span class="required">*</span></label>
                                <input type="text" name="last_name" id="last_name" class="form-control" value="<?php echo set_value('last_name') ?>" required="">
                                <span><?php echo form_error('last_name') ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label class="font-weight-normal">Teléfono <span class="required">*</span></label>
                                <input type="text" name="phone" id="phone" class="form-control" value="<?php echo set_value('phone') ?>" required="">
                                <span><?php echo form_error('phone') ?></span>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label class="font-weight-normal">Movil <span class="required">*</span></label>
                                <input type="text" name="movil" id="movil" class="form-control" value="<?php echo set_value('movil') ?>" required="">
                                <span><?php echo form_error('movil') ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label class="font-weight-normal">Correo electrónico <span class="required">*</span></label>
                                <input type="email" name="email" id="email" class="form-control" value="<?php echo set_value('email') ?>" required="">
                                <span><?php echo form_error('email') ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label class="font-weight-normal">País <span class="required">*</span></label>
                                <?php echo form_dropdown('country', $country, set_value('country'), 'class="form-control" id="country"') ?>
                                <span><?php echo form_error('country') ?></span>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label class="font-weight-normal">Ciudad <span class="required">*</span></label>
                                <?php echo form_dropdown('cities', $cities, set_value('cities'), 'class="form-control" id="cities"') ?>
                                <span><?php echo form_error('cities') ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label class="font-weight-normal">Dirección <span class="required">*</span></label>
                                <input type="text" name="address" id="address" class="form-control" value="<?php echo set_value('address') ?>" required="">
                                <span><?php echo form_error('address') ?></span>
                            </div>
                            <div class="checkbox mb-xlg">
                                <label>
                                    <?php echo form_checkbox('subscribe_to_newsletter', 1, set_value('subscribe_to_newsletter'), 'id="subscribe_to_newsletter" style="margin-top:-0.29em"') ?>
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
                                <input type="password" name="password" id="password" class="form-control" value="<?php echo set_value('password') ?>" required="">
                                <span><?php echo form_error('password') ?></span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="font-weight-normal">Confirmar contraseña <span class="required">*</span></label>
                                <input type="password" name="confirm_password" id="confirm_password" class="form-control" value="<?php echo set_value('confirm_password') ?>" required="">
                                <span><?php echo form_error('confirm_password') ?></span>
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