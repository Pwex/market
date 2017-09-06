<!--Contenido --> 
<div role="main" class="main">
    <!-- Menu principal -->
    <section class="page-header">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="<?php echo base_url() ?>">Inicio</a></li>
                <li><a href="#">Fashion</a></li>
                <li class="active">Black Maxi Dress</li>
            </ul>
        </div>
    </section>
    <!-- Menu principal end -->
    <!-- Contenido de los productos -->
    <div class="cart">
        <div class="container">
            <h1 class="h2 heading-primary mt-lg clearfix">
                <span>Carrito de compras</span>
                <a href="<?php echo base_url('checkout') ?>" class="btn btn-primary pull-right">Pasar por la caja</a>
            </h1>

            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <div class="cart-table-wrap">
                        <table class="cart-table">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Nombre del producto</th>
                                    <th>Precio unitario</th>
                                    <th>Cantidad</th>
                                    <th>Total parcial</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-image-td">
                                        <a href="#" title="Product Name">
                                            <img src="<?php echo base_url('assets/img/demos/shop/products/cart-product1.jpg') ?>" alt="Product Name">
                                        </a>
                                    </td>
                                    <td class="product-name-td">
                                        <h2 class="product-name"><a href="#" title="Product Name">Women Fashion Blouse</a></h2>
                                    </td>
                                    <td>$120.00</td>
                                    <td>
                                        <div class="qty-holder">
                                            <a href="#" class="qty-dec-btn" title="Dec">-</a>
                                            <input type="text" class="qty-input" value="1">
                                            <a href="#" class="qty-inc-btn" title="Inc">+</a>
                                            <a href="#" class="edit-qty"><i class="fa fa-pencil"></i></a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-primary">$120.00</span>
                                    </td>
                                    <td class="product-action-td">
                                        <a href="#" title="Remove product" class="btn-remove"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-image-td">
                                        <a href="#" title="Product Name">
                                            <img src="<?php echo base_url('assets/img/demos/shop/products/cart-product2.jpg') ?>" alt="Product Name">
                                        </a>
                                    </td>
                                    <td class="product-name-td">
                                        <h2 class="product-name"><a href="#" title="Product Name">Black Utility Top</a></h2>
                                    </td>
                                    <td>$49.00</td>
                                    <td>
                                        <div class="qty-holder">
                                            <a href="#" class="qty-dec-btn" title="Dec">-</a>
                                            <input type="text" class="qty-input" value="1">
                                            <a href="#" class="qty-inc-btn" title="Inc">+</a>
                                            <a href="#" class="edit-qty"><i class="fa fa-pencil"></i></a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-primary">$49.00</span>
                                    </td>
                                    <td class="product-action-td">
                                        <a href="#" title="Remove product" class="btn-remove"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="6" class="clearfix">
                                        <button class="btn btn-default hover-primary btn-continue">Seguir comprando</button>
                                        <button class="btn btn-default hover-primary btn-update">Actualizar carrito de compra</button>
                                        <button class="btn btn-default hover-primary btn-clear">Borrar la cesta de la compra</button>
                                    </td>
                                </tr> 
                            </tfoot>    
                        </table>
                    </div>
                </div>
                <aside class="col-md-4 col-lg-3 sidebar shop-sidebar">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" href="#panel-cart-discount">
                                        Código de descuento
                                    </a>
                                </h4>
                            </div>
                            <div id="panel-cart-discount" class="accordion-body collapse">
                                <div class="panel-body">
                                    <p class="mb-sm">Ingrese su código de cupón si tiene uno.</p>
                                    <form action="#">
                                        <div class="form-group">
                                            <input type="text" class="form-control" required="">
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-block" value="Aplicar cupón">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" href="#panel-cart-ship">
                                        ENVÍO E IMPUESTO ESTIMADO
                                    </a>
                                </h4>
                            </div>
                            <div id="panel-cart-ship" class="accordion-body collapse">
                                <div class="panel-body">
                                    <p class="mb-sm">Ingrese su destino para obtener un precio estimado de envío.</p>
                                    <form action="#">
                                        <div class="form-group">
                                            <label>País <span class="required">*</span></label>
                                            <select name="#" class="form-control">
                                                <option value="United States">United States</option>
                                                <option value="United Kingdon">United Kingdon</option>
                                                <option value="China">China</option>
                                                <option value="Russia">Russia</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Estado|Provincia</label>
                                            <select name="#" class="form-control">
                                                <option value="United States">Please select region, state</option>
                                                <option value="Alabama">Alabama</option>
                                                <option value="Alaska">Alaska</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Código postal</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-block" value="Consigue una cotización">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" href="#panel-cart-total">
                                        Totales del carro
                                    </a>
                                </h4>
                            </div>
                            <div id="panel-cart-total" class="accordion-body collapse in">
                                <div class="panel-body">
                                    <table class="totals-table">
                                        <tbody>
                                            <tr>
                                                <td>Total parcial</td>
                                                <td>$159.00</td>
                                            </tr>
                                            <tr>
                                                <td>Gran total</td>
                                                <td>$159.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="totals-table-action">
                                        <a href="#" class="btn btn-primary btn-block">Pasar por la caja</a>
                                        <a href="#" class="btn btn-link btn-block">Salida con varias direcciones</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>

            <div class="crosssell-products">
                <h2 class="h4"><strong>Según tu selección, puedes estar interesado en los siguientes artículos:</strong></h2>
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="product product-sm">
                            <figure class="product-image-area">
                                <a href="#" title="Product Name" class="product-image">
                                    <img src="<?php echo base_url('assets/img/demos/shop/products/cart-product3.jpg') ?>" alt="Product Name">
                                </a>
                            </figure>
                            <div class="product-details-area">
                                <h2 class="product-name"><a href="#" title="Product Name">Jane Dress</a></h2>

                                <div class="product-price-box">
                                    <span class="old-price">$120.00</span>
                                    <span class="product-price">$90.00</span>
                                </div>

                                <a href="#" class="btn btn-default hover-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="product product-sm">
                            <figure class="product-image-area">
                                <a href="#" title="Product Name" class="product-image">
                                    <img src="<?php echo base_url('assets/img/demos/shop/products/cart-product4.jpg') ?>" alt="Product Name">
                                </a>
                            </figure>
                            <div class="product-details-area">
                                <h2 class="product-name"><a href="#" title="Product Name">Jane Dress - S</a></h2>

                                <div class="product-price-box">
                                    <span class="old-price">$100.00</span>
                                    <span class="product-price">$89.00</span>
                                </div>

                                <a href="#" class="btn btn-default hover-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix visible-sm"></div>
                    <div class="col-sm-6 col-md-3">
                        <div class="product product-sm">
                            <figure class="product-image-area">
                                <a href="#" title="Product Name" class="product-image">
                                    <img src="<?php echo base_url('assets/img/demos/shop/products/cart-product1.jpg') ?>" alt="Product Name">
                                </a>
                            </figure>
                            <div class="product-details-area">
                                <h2 class="product-name"><a href="#" title="Product Name">Jane Dress - XL</a></h2>

                                <div class="product-price-box">
                                    <span class="old-price">$100.00</span>
                                    <span class="product-price">$69.00</span>
                                </div>

                                <a href="#" class="btn btn-default hover-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="product product-sm">
                            <figure class="product-image-area">
                                <a href="#" title="Product Name" class="product-image">
                                    <img src="<?php echo base_url('assets/img/demos/shop/products/cart-product2.jpg') ?>" alt="Product Name">
                                </a>
                            </figure>
                            <div class="product-details-area">
                                <h2 class="product-name"><a href="#" title="Product Name">Jane Dress - M</a></h2>

                                <div class="product-price-box">
                                    <span class="old-price">$110.00</span>
                                    <span class="product-price">$79.00</span>
                                </div>

                                <a href="#" class="btn btn-default hover-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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