<style type="text/css">
    .name-user {
        background-color: #7aa93c;
        color: #fff;
        display: block;
        font-size: small;
        font-weight: lighter;
        padding: 5px 14px;
    }
</style>
<!--Contenido --> 
<div role="main" class="main">
    <!-- Menu de seccion -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Dashboard</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Administración</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Menu de seccion END -->
    <!-- Contenido de los productos -->
    <div class="container" style="margin-top: 2.5em">
        <div class="row">
            <div class="col-md-9 col-md-push-3 my-account">
                <h1 class="h2 heading-primary font-weight-normal">Mi Escritorio</h1>
                <div class="alert alert-success success-msg mb-xl" role="alert">
                    Thank you for registering with Porto - Premium Template.
                </div>
                <div class="alert alert-success mb-xlg" role="alert">
                    Hello, <strong>Porto customer!</strong> From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.
                </div>
                <h2 class="h3 mb-sm"><strong>Account Information</strong></h2>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="panel-box">
                            <div class="panel-box-title">
                                <h3>Contact Information</h3>
                                <a href="#" class="panel-box-edit">Edit</a>
                            </div>
                            <div class="panel-box-content">
                                <p>Name LastName<br>
                                    porto_shop@gmail.com<br>
                                    <a href="#">Change Password</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="panel-box">
                            <div class="panel-box-title">
                                <h3>Newsletters</h3>
                                <a href="#" class="panel-box-edit">Edit</a>
                            </div>
                            <div class="panel-box-content">
                                <p>You are currently not subscribed to any newsletter.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="panel-box">
                            <div class="panel-box-title">
                                <h3>ADDRESS BOOK</h3>
                                <a href="#" class="panel-box-edit">Manage Addresses</a>
                            </div>
                            <div class="panel-box-content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h4 class="h5 heading-text-color font-weight-semibold mb-xs">Default Billing Address</h4>
                                        <address>
                                            You have not set a default billing address.<br>
                                            <a href="#">Edit Address</a>
                                        </address>
                                    </div>
                                    <div class="col-sm-6">
                                        <h4 class="h5 heading-text-color font-weight-semibold mb-xs">Default Shipping Address</h4>
                                        <address>
                                            You have not set a default shipping address.<br>
                                            <a href="#">Edit Address</a>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-md-pull-9">
                <aside class="sidebar">
                    <h4><i class="fa fa-user"></i> Mi cuenta</h4>
                    <?php if (validation_session_open() == true): ?>
                        <?php echo "<span class='name-user'>".$this->session->userdata['user']['name'].' '.$this->session->userdata['user']['last_name']."</span>"; ?>
                    <?php endif ?></span>
                    <ul class="nav nav-list">
                        <li>
                            <a href="#">Mi Perfil</a>
                        </li>
                        <li>
                            <a href="#">Mediciones</a>
                        </li>
                        <li>
                            <a href="#">Mi Programas</a>
                        </li>
                        <li>
                            <a href="#">Pedidos</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('') ?>">Market Wellness</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('exit') ?>">Cerrar sesión</a>
                        </li>
                    </ul>
                </aside>
            </div>
        </div>
    </div>
    <!-- Contenido de los productos End -->
</div>
<!-- Contenido end -->