<!-- Contenido --> 
<div role="main" class="main">
    <!-- Contenido de los productos -->
    <div class="container" style="margin-top: 3.5em;">
        <div class="row">
            <!-- Barra principal de navegación de productos -->
            <div class="col-md-9 col-md-push-3">
                <!--Boxed Image -->
                    <div class="boxed-banner">
                        <img src="<?php echo base_url('assets/img/demos/shop/banners/category/banner1.png') ?>" alt="Banner">
                        <div class="banner-content">
                            <h2>CATEGORY <strong>BANNER</strong></h2>
                            <p>Set banners and description for any category of your website.</p>
                        </div>
                    </div>
                <!--Boxed Image End -->
                <div class="toolbar mb-none">
                    <div class="sorter">
                        <div class="sort-by">
                            <label>Ordenar por:</label>
                            <select>
                                <option value="Position">Posición</option>
                                <option value="Name">Nombre</option>
                                <option value="Price">Precio</option>
                            </select>
                        </div>
                        <div class="view-mode">
                            <a title="Cuadrícula" id="btn-product-grid" style="cursor: pointer;">
                                <i class="fa fa-th"></i>
                            </a>
                            <a title="Lista" id="btn-product-list" style="cursor: pointer;">
                                <i class="fa fa-list-ul"></i>
                            </a>
                        </div>
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
                        </ul>
                        <div class="limiter">
                            <label>Mostrar:</label>
                            <select>
                                <option value="12">12</option>
                                <option value="24">24</option>
                                <option value="36">36</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- Grid -->
                <ul class="products-grid columns5 hide-addtolinks">
                    <?php for($i = 1; $i <= 30; $i++): ?>
                    <li>
                        <div class="product">
                            <figure class="product-image-area">
                                <a href="demo-shop-9-product-details.html" title="Product Name" class="product-image">
                                    <img src="<?php echo base_url('assets/img/demos/shop/products/product1.jpg') ?>" alt="Product Name">
                                    <img src="<?php echo base_url('assets/img/demos/shop/products/product1-2.jpg') ?>" alt="Product Name" class="product-hover-image">
                                </a>
                                <a href="#" class="product-quickview">
                                    <i class="fa fa-share-square-o"></i><span>Vista rápida</span>
                                </a>
                                <div class="product-label">
                                    <span class="discount">-10%</span>
                                </div>
                                <div class="product-label">
                                    <span class="new">Nuevo</span>
                                </div>
                            </figure>
                            <div class="product-details-area">
                                <h2 class="product-name"><a href="demo-shop-9-product-details.html" title="Product Name">Noa Blouse</a></h2>
                                <div class="product-ratings">
                                    <div class="ratings-box">
                                        <div class="rating" style="width:60%"></div>
                                    </div>
                                </div>
                                <div class="product-price-box">
                                    <span class="old-price">$99.00</span>
                                    <span class="product-price">$89.00</span>
                                </div>
                                <div class="product-actions">
                                    <a href="#" class="addtowishlist" title="Add to Wishlist">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a href="#" class="addtocart" title="Add to Cart">
                                        <i class="fa fa-shopping-cart"></i><span>Añadir a la cesta</span>
                                    </a>
                                    <a href="#" class="comparelink" title="Add to Compare">
                                        <i class="glyphicon glyphicon-signal"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php endfor; ?>
                </ul>
                <!-- Grid End -->
                <!-- List -->
                <ul class="products-list" style="display: none;">
                    <?php for($i = 1; $i <= 30; $i++): ?>
                    <li>
                        <div class="product product-list">
                            <figure class="product-image-area">
                                <a href="demo-shop-9-product-details.html" title="Product Name" class="product-image">
                                    <img src="<?php echo base_url('assets/img/demos/shop/products/product1.jpg') ?>" alt="Product Name">
                                    <img src="<?php echo base_url('assets/img/demos/shop/products/product1-2.jpg') ?>" alt="Product Name" class="product-hover-image">
                                </a>
                                <div class="product-label">
                                    <span class="discount">-10%</span>
                                </div>
                                <div class="product-label">
                                    <span class="new">New</span>
                                </div>
                            </figure>
                            <div class="product-details-area">
                                <h2 class="product-name"><a href="demo-shop-9-product-details.html" title="Product Name">Noa Sheer Blouse</a></h2>
                                <div class="product-ratings">
                                    <div class="ratings-box">
                                        <div class="rating" style="width:60%"></div>
                                    </div>
                                </div>
                                <div class="product-short-desc">
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                                <div class="product-price-box">
                                    <span class="old-price">$99.00</span>
                                    <span class="product-price">$89.00</span>
                                </div>
                                <div class="product-actions">
                                    <a href="#" class="addtocart" title="Add to Cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span>Add to Cart</span>
                                    </a>
                                    <a href="#" class="addtowishlist" title="Add to Wishlist">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a href="#" class="comparelink" title="Add to Compare">
                                        <i class="glyphicon glyphicon-signal"></i>
                                    </a>
                                    <a href="#" class="quickview" title="Quick View">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php endfor; ?>
                </ul>
                <!-- List End -->
                <div class="toolbar-bottom">
                    <div class="toolbar">
                        <div class="sorter">
                            <ul class="pagination">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
                            </ul>
                            <div class="limiter">
                                <label>Mostrar:</label>
                                <select>
                                    <option value="12">12</option>
                                    <option value="24">24</option>
                                    <option value="36">36</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Barra principal de navegación de productos End -->
            <aside class="col-md-3 col-md-pull-9 sidebar shop-sidebar">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" href="#panel-filter-category">
                                Categorias
                                </a>
                            </h4>
                        </div>
                        <div id="panel-filter-category" class="accordion-body collapse in">
                            <div class="panel-body">
                                <ul>
                                    <?php foreach ($category as $key => $value): ?>
                                        <li><a href="<?php echo base_url('category/').$value['id_category'].'/'.url_title(strtolower($value['name_category'])) ?>"><?php echo $value['name_category'] ?></a></li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" href="#panel-filter-price">Precio</a>
                            </h4>
                        </div>
                        <div id="panel-filter-price" class="accordion-body collapse in">
                            <div class="panel-body">
                                <div class="filter-price">
                                    <!-- Configuración del sidebar -->
                                        <div id="price-slider" class="noUi-target noUi-ltr noUi-horizontal"></div>
                                    <!-- Configuración del sidebar End -->
                                    <div class="filter-price-details">
                                        <span></span>
                                            <input type="text" id="price-range-low" class="form-control" placeholder="Min">
                                        <span>-</span>
                                            <input type="text" id="price-range-high" class="form-control" placeholder="Max">
                                            <a href="#" class="btn btn-primary">FILTRAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h4>DESTACADOS</h4>
                <div class="owl-carousel owl-theme" id="owl-carousel-featured">
                    <?php for($i = 1; $i <= 10; $i++): ?>
                        <div class="item" style="min-width: 300px;">
                            <h4>
                                <div class="product product-sm">
                                    <figure class="product-image-area">
                                        <a href="demo-shop-9-product-details.html" title="Product Name" class="product-image">
                                            <img src="<?php echo base_url('assets/img/demos/shop/products/product13.jpg') ?>" alt="Product Name">
                                            <img src="<?php echo base_url('assets/img/demos/shop/products/product13-2.jpg') ?>" alt="Product Name" class="product-hover-image">
                                        </a>
                                    </figure>
                                    <div class="product-details-area">
                                        <h2 class="product-name"><a href="demo-shop-9-product-details.html" title="Product Name">Diamond Ring - S</a></h2>
                                        <div class="product-ratings">
                                            <div class="ratings-box">
                                                <div class="rating" style="width:0%"></div>
                                            </div>
                                        </div>

                                        <div class="product-price-box">
                                            <span class="product-price">$220.00</span>
                                        </div>
                                    </div>
                                </div>
                            </h4>
                        </div>
                    <?php endfor; ?>
                </div>
            </aside>
        </div>
    </div>
    <!-- Contenido de los productos End -->

    <!-- Ventana modal de suscripcion -->
    <div class="newsletter-popup mfp-hide" id="newsletter-popup-form" style="background-image: url(<?php base_url('assets/img/demos/shop/newsletter_popup_bg.jpg') ?>)">
        <div class="newsletter-popup-content">
            <img src="<?php echo base_url('assets/img/demos/shop/logo-shop-green-plus.png') ?>" alt="Logo" class="img-responsive center-block">
            <h2>BE THE FIRST TO KNOW</h2>
            <p>Subscribe to the Porto eCommerce newsletter to receive timely updates from your favorite products.</p>
            <form action="#">
                <div class="input-group">
                    <input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Email address" required>
                    <span class="input-group-btn">
                    <input type="submit" class="btn btn-default" value="Go!">
                    </span>
                </div>
                <!-- End .from-group -->
            </form>
            <div class="newsletter-subscribe">
                <div class="checkbox mb-none">
                    <label>
                    <input type="checkbox" value="1">
                    Don't show this popup again
                    </label>
                </div>
            </div>
        </div>
        <!-- End .newsletter-popup-content -->
    </div>
    <!-- Ventana modal de suscripcion End -->
</div>
<!-- Contenido end -->