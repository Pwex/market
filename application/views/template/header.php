<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>eCommerce Pwex</title>
        <meta name="keywords" content="Pwex eCommerce" />
        <meta name="description" content="Pwex eCommerce">
        <meta name="author" content="pwex.co">
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico') ?>" type="image/x-icon" />
        <link rel="apple-touch-icon" href="<?php echo base_url('assets/img/apple-touch-icon.png') ?>">
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
        <!-- Vendor CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/vendor/animate/animate.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/vendor/simple-line-icons/css/simple-line-icons.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/vendor/owl.carousel/assets/owl.carousel.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/vendor/owl.carousel/assets/owl.theme.default.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/vendor/magnific-popup/magnific-popup.min.css') ?>">
        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/theme.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/theme-elements.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/theme-blog.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/theme-shop.css') ?>">
        <!-- Current Page CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/vendor/rs-plugin/css/settings.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/vendor/rs-plugin/css/layers.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/vendor/rs-plugin/css/navigation.css') ?>">
        <!-- Skin CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/skins/skin-shop-9.css') ?>">
        <!-- Demo CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/demos/demo-shop-9.css') ?>">
        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css') ?>">
        <!-- Head Libs -->
        <script src="<?php echo base_url('assets/vendor/modernizr/modernizr.min.js') ?>"></script>
    </head>
    <body>
        <div class="body">
            <!-- Menu principal -->
            <header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 145, 'stickySetTop': '-145px', 'stickyChangeLogo': false}">
                <div class="header-body">
                    <div class="header-top">
                        <div class="container">
                            <div class="dropdowns-container">
                                <div class="header-dropdown cur-dropdown">
                                    <a href="#">USD <i class="fa fa-caret-down"></i></a>
                                    <ul class="header-dropdownmenu">
                                        <li><a href="#">EUR</a></li>
                                        <li><a href="#">USD</a></li>
                                    </ul>
                                </div>
                                <div class="compare-dropdown">
                                    <a href="#"><i class="fa fa-retweet"></i> Comparar (2)</a>
                                    <div class="compare-dropdownmenu">
                                        <div class="dropdownmenu-wrapper">
                                            <ul class="compare-products">
                                                <li class="product">
                                                    <a href="#" class="btn-remove" title="Remove Product"><i class="fa fa-times"></i></a>
                                                    <h4 class="product-name"><a href="demo-shop-9-product-details.html">White top</a></h4>
                                                </li>
                                                <li class="product">
                                                    <a href="#" class="btn-remove" title="Remove Product"><i class="fa fa-times"></i></a>
                                                    <h4 class="product-name"><a href="demo-shop-9-product-details.html">Blue Women Shirt</a></h4>
                                                </li>
                                            </ul>
                                            <div class="compare-actions">
                                                <a href="#" class="action-link">Limpiar todo</a>
                                                <a href="#" class="btn btn-primary">Comparar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="top-menu-area">
                                <a href="#">Opciones <i class="fa fa-caret-down"></i></a>
                                <ul class="top-menu">
                                    <li><a href="#">Oferta diaria</a></li>
                                    <li><a href="#">Mi lista de deseos</a></li>
                                    <li><a href="<?php echo base_url('blog') ?>">Blog</a></li>
                                    <?php if (validation_session_open() == true): ?>
                                        <li>
                                            <a href="<?php echo base_url('dashboard') ?>">Mi cuenta</a>
                                        </li>
                                    <?php endif ?>
                                    <li>
                                        <?php if (validation_session_open() == false): ?>
                                            <a href="<?php echo base_url('auth') ?>">Iniciar sesión</a>
                                        <?php else: ?>
                                            <a href="<?php echo base_url('exit') ?>">Cerrar sesión</a>
                                        <?php endif ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="header-container container">
                        <div class="header-row">
                            <div class="header-column">
                                <div class="row">
                                    <div class="header-search">
                                        <a href="#" class="search-toggle"><i class="fa fa-search"></i></a>
                                        <?php echo form_open('search', 'autocomplete="off"') ?>
                                            <div class="header-search-wrapper">
                                                <input type="text" class="form-control" name="q" id="q" placeholder="Buscar...">
                                                <select id="cat" name="cat" required="">
                                                    <option>Categorías</option>
                                                    <?php foreach ($category as $key => $value): ?>
                                                        <option value="<?php echo $value['id_category'] ?>"><?php echo $value['name_category'] ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                    <a href="#" class="mmenu-toggle-btn" title="Toggle menu">
                                    <i class="fa fa-bars"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="header-column header-column-center">
                                <div class="header-logo">
                                    <a href="<?php echo base_url() ?>">
                                        <img alt="Porto" width="140" height="65" src="<?php echo base_url('assets/img/demos/shop/logo-shop-green-plus.png') ?>">
                                    </a>
                                </div>
                            </div>
                            <div class="header-column">
                                <div class="row">
                                    <div class="cart-area">
                                        <div class="custom-block">
                                            <i class="fa fa-phone"></i>
                                            <span><?php echo $information_shop[0]['phone'] ?></span>
                                            <span class="split"></span>
                                            <a href="<?php echo base_url('contact') ?>">CONTÁCTENOS</a>
                                        </div>
                                        <div class="cart-dropdown">
                                            <a href="#" class="cart-dropdown-icon">
                                            <i class="minicart-icon"></i>
                                            <span class="cart-info">
                                            <span class="cart-qty">2</span>
                                            <span class="cart-text">item(s)</span>
                                            </span>
                                            </a>
                                            <div class="cart-dropdownmenu right">
                                                <div class="dropdownmenu-wrapper">
                                                    <div class="cart-products">
                                                        <div class="product product-sm">
                                                            <a href="#" class="btn-remove" title="Remove Product">
                                                            <i class="fa fa-times"></i>
                                                            </a>
                                                            <figure class="product-image-area">
                                                                <a href="demo-shop-9-product-details.html" title="Product Name" class="product-image">
                                                                <img src="<?php echo base_url('assets/img/demos/shop/products/thumbs/cart-product1.jpg') ?>" alt="Product Name">
                                                                </a>
                                                            </figure>
                                                            <div class="product-details-area">
                                                                <h2 class="product-name"><a href="demo-shop-9-product-details.html" title="Product Name">Blue Women Top</a></h2>
                                                                <div class="cart-qty-price">
                                                                    1 X 
                                                                    <span class="product-price">$65.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product product-sm">
                                                            <a href="#" class="btn-remove" title="Remove Product">
                                                            <i class="fa fa-times"></i>
                                                            </a>
                                                            <figure class="product-image-area">
                                                                <a href="demo-shop-9-product-details.html" title="Product Name" class="product-image">
                                                                <img src="<?php echo base_url('assets/img/demos/shop/products/thumbs/cart-product2.jpg') ?>" alt="Product Name">
                                                                </a>
                                                            </figure>
                                                            <div class="product-details-area">
                                                                <h2 class="product-name"><a href="demo-shop-9-product-details.html" title="Product Name">Black Utility Top</a></h2>
                                                                <div class="cart-qty-price">
                                                                    1 X 
                                                                    <span class="product-price">$39.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cart-totals">
                                                        Total: <span>$104.00</span>
                                                    </div>
                                                    <div class="cart-actions">
                                                        <a href="<?php echo base_url('shopping-cart') ?>" class="btn btn-primary">Ver Carro</a>
                                                        <a href="<?php echo base_url('checkout') ?>" class="btn btn-primary">Confimar</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-container header-nav header-nav-center">
                        <div class="container">
                            <div class="header-nav-main">
                                <nav>
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="active">
                                            <a href="<?php echo base_url() ?>">Inicio</a>
                                        </li>
                                        <li>
                                            <a href="#">Aparatologia</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('blog') ?>">Blog</a>
                                        </li>
                                        <li>
                                            <a href="#">Belleza</a>
                                        </li>
                                        <li>
                                            <a href="#">Nutrición</a>
                                        </li>
                                        <li>
                                            <a href="#">Salud</a>
                                        </li>
                                        <li class="">
                                            <a href="<?php echo base_url('contact') ?>">Contáctenos</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Menu principal end -->

            <!-- Menu movil -->
            <div class="mobile-nav">
                <div class="mobile-nav-wrapper">
                    <ul class="mobile-side-menu">
                        <li><a href="demo-shop-9.html">Home</a></li>
                        <li>
                            <span class="mmenu-toggle"></span>
                            <a href="#">Fashion <span class="tip tip-new">New</span></a>
                            <ul>
                                <li>
                                    <span class="mmenu-toggle"></span>
                                    <a href="#">Women</a>
                                    <ul>
                                        <li>
                                            <a href="#">Tops &amp; Blouses</a>
                                        </li>
                                        <li>
                                            <a href="#">Accessories</a>
                                        </li>
                                        <li>
                                            <a href="#">Dresses &amp; Skirts</a>
                                        </li>
                                        <li>
                                            <a href="#">Shoes &amp; Boots</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="mmenu-toggle"></span>
                                    <a href="#">Men</a>
                                    <ul>
                                        <li>
                                            <a href="#">Accessories</a>
                                        </li>
                                        <li>
                                            <a href="#">Watch &amp; Fashion <span class="tip tip-new">New</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Tees, Knits &amp; Polos</a>
                                        </li>
                                        <li>
                                            <a href="#">Pants &amp; Denim</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="mmenu-toggle"></span>
                                    <a href="#">Jewellery <span class="tip tip-hot">Hot</span></a>
                                    <ul>
                                        <li>
                                            <a href="#">Sweaters</a>
                                        </li>
                                        <li>
                                            <a href="#">Heels &amp; Sandals</a>
                                        </li>
                                        <li>
                                            <a href="#">Jeans &amp; Shorts</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="mmenu-toggle"></span>
                                    <a href="#">Kids Fashion</a>
                                    <ul>
                                        <li>
                                            <a href="#">Casual Shoes</a>
                                        </li>
                                        <li>
                                            <a href="#">Spring &amp; Autumn</a>
                                        </li>
                                        <li>
                                            <a href="#">Winter Sneakers</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span class="mmenu-toggle"></span>
                            <a href="#">Pages <span class="tip tip-hot">Hot!</span></a>
                            <ul>
                                <li>
                                    <span class="mmenu-toggle"></span>
                                    <a href="#">Category</a>
                                    <ul>
                                        <li>
                                            <a href="demo-shop-9-category-2col.html">2 Columns</a>
                                        </li>
                                        <li>
                                            <a href="demo-shop-9-category-3col.html">3 Columns</a>
                                        </li>
                                        <li>
                                            <a href="demo-shop-9-category-4col.html">4 Columns</a>
                                        </li>
                                        <li>
                                            <a href="demo-shop-9-category-5col.html">5 Columns</a>
                                        </li>
                                        <li>
                                            <a href="demo-shop-9-category-6col.html">6 Columns</a>
                                        </li>
                                        <li>
                                            <a href="demo-shop-9-category-7col.html">7 Columns</a>
                                        </li>
                                        <li>
                                            <a href="demo-shop-9-category-8col.html">8 Columns</a>
                                        </li>
                                        <li>
                                            <a href="demo-shop-9-category-right-sidebar.html">Right Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="demo-shop-9-category-list.html">Category List</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="mmenu-toggle"></span>
                                    <a href="#">Category Banners</a>
                                    <ul>
                                        <li>
                                            <a href="demo-shop-9-category-banner-boxed-slider.html">Boxed slider</a>
                                        </li>
                                        <li>
                                            <a href="demo-shop-9-category-banner-boxed-image.html">Boxed Image</a>
                                        </li>
                                        <li>
                                            <a href="demo-shop-9-category-banner-fullwidth.html">Fullwidth</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="mmenu-toggle"></span>
                                    <a href="#">Product Details</a>
                                    <ul>
                                        <li>
                                            <a href="demo-shop-9-product-details.html">Product Details 1</a>
                                        </li>
                                        <li>
                                            <a href="demo-shop-9-product-details2.html">Product Details 2</a>
                                        </li>
                                        <li>
                                            <a href="demo-shop-9-product-details3.html">Product Details 3</a>
                                        </li>
                                        <li>
                                            <a href="demo-shop-9-product-details4.html">Product Details 4</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="demo-shop-9-cart.html">Shopping Cart</a>
                                </li>
                                <li>
                                    <a href="demo-shop-9-checkout.html">Checkout</a>
                                </li>
                                <li>
                                    <span class="mmenu-toggle"></span>
                                    <a href="#">Loign &amp; Register</a>
                                    <ul>
                                        <li>
                                            <a href="demo-shop-9-login.html">Login</a>
                                        </li>
                                        <li>
                                            <a href="demo-shop-9-register.html">Register</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="mmenu-toggle"></span>
                                    <a href="#">Dashboard</a>
                                    <ul>
                                        <li>
                                            <a href="demo-shop-9-dashboard.html">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="demo-shop-9-myaccount.html">My Account</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="demo-shop-9-about-us.html">About Us</a>
                        </li>
                        <li>
                            <span class="mmenu-toggle"></span>
                            <a href="#">Blog</a>
                            <ul>
                                <li><a href="demo-shop-9-blog.html">Blog</a></li>
                                <li><a href="demo-shop-9-blog-post.html">Blog Post</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="demo-shop-9-contact-us.html">Contact Us</a>
                        </li>
                        <li>
                            <a href="#">Buy Porto!</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Menu movil end -->
            <div id="mobile-menu-overlay"></div>

