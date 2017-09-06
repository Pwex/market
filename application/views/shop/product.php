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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-view">
                    <div class="product-essential">
                        <div class="row">
                            <div class="product-img-box col-sm-4">
                                <div class="product-img-box-wrapper">
                                    <div class="product-img-wrapper">
                                        <img id="product-zoom" src="<?php echo base_url('assets/img/demos/shop/products/single/product1.jpg') ?>" data-zoom-image="<?php echo base_url('assets/img/demos/shop/products/single/product1.jpg') ?>" alt="Product main image">
                                    </div>
                                    <a href="#" class="product-img-zoom" title="Zoom">
                                    <span class="glyphicon glyphicon-search"></span>
                                    </a>
                                </div>

                                <div class="owl-carousel owl-theme" id="productGalleryThumbs">
                                    <?php for($i = 1; $i <= 10; $i++): ?>
                                    <div class="item">
                                        <h4>
                                            <a href="#" data-image="<?php echo base_url('assets/img/demos/shop/products/single/product1.jpg') ?>" data-zoom-image="<?php echo base_url('assets/img/demos/shop/products/single/product1.jpg') ?>" class="product-gallery-item">
                                                <img src="<?php echo base_url('assets/img/demos/shop/products/single/thumbs/product1.jpg') ?>" alt="product">
                                            </a>
                                        </h4>
                                    </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                            <div class="product-details-box col-sm-8">
                                <div class="tabs product-tabs">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#product-desc" data-toggle="tab">Description</a>
                                        </li>
                                        <li>
                                            <a href="#product-add" data-toggle="tab">Additional</a>
                                        </li>
                                        <li>
                                            <a href="#product-tags" data-toggle="tab">Tags</a>
                                        </li>
                                        <li>
                                            <a href="#product-reviews" data-toggle="tab">Reviews</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="product-desc" class="tab-pane active">
                                            <h1 class="product-name" style="margin-top: 0">
                                                Black Maxi Dress
                                            </h1>
                                            <div class="product-rating-container">
                                                <div class="product-ratings">
                                                    <div class="ratings-box">
                                                        <div class="rating" style="width:60%"></div>
                                                    </div>
                                                </div>
                                                <div class="review-link">
                                                    <a href="#" class="review-link-in" rel="nofollow"> <span class="count">1</span> customer review</a> | 
                                                    <a href="#" class="write-review-link" rel="nofollow">Add a review</a>
                                                </div>
                                            </div>
                                            <div class="product-short-desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                            <div class="product-detail-info">
                                                <div class="product-price-box">
                                                    <span class="old-price">$99.00</span>
                                                    <span class="product-price">$89.00</span>
                                                </div>
                                                <p class="availability">
                                                    <span class="font-weight-semibold">Availability:</span>
                                                    In Stock
                                                </p>
                                                <p class="email-to-friend"><a href="#">Email to a Friend</a></p>
                                            </div>
                                            <div class="product-actions">
                                                <div class="product-detail-qty">
                                                    <input type="text" value="1" class="vertical-spinner form-control" id="product-vqty">
                                                </div>
                                                <a href="<?php echo base_url('shopping-cart') ?>" class="addtocart" title="Add to Cart">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <span>Añadir a la cesta</span>
                                                </a>
                                                
                                                <div class="actions-right">
                                                    <a href="#" class="addtowishlist" title="Add to Wishlist">
                                                        <i class="fa fa-heart"></i>
                                                    </a>
                                                    <a href="#" class="comparelink" title="Add to Compare">
                                                        <i class="glyphicon glyphicon-signal"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="product-add" class="tab-pane">
                                            <table class="product-table">
                                                <tbody>
                                                    <tr>
                                                        <td class="table-label">Color</td>
                                                        <td>Black</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="table-label">Size</td>
                                                        <td>16mx24mx18m</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="product-tags" class="tab-pane">
                                            <div class="product-tags-area">
                                                <form action="#">
                                                    <div class="form-group">
                                                        <label>Add Your Tags:</label>
                                                        <div class="clearfix">
                                                            <input type="text" class="form-control pull-left" required="">
                                                            <input type="submit" class="btn btn-primary" value="Add Tags">
                                                        </div>
                                                    </div>
                                                </form>
                                                <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                                            </div>
                                        </div>
                                        <div id="product-reviews" class="tab-pane">
                                            <div class="collateral-box">
                                                <ul class="list-unstyled">
                                                    <li>Be the first to review this product</li>
                                                </ul>
                                            </div>
                                            <div class="add-product-review">
                                                <h3 class="text-uppercase heading-text-color font-weight-semibold">WRITE YOUR OWN REVIEW</h3>
                                                <p>How do you rate this product? *</p>
                                                <form action="#">
                                                    <table class="ratings-table">
                                                        <thead>
                                                            <tr>
                                                                <th>&nbsp;</th>
                                                                <th>1 star</th>
                                                                <th>2 stars</th>
                                                                <th>3 stars</th>
                                                                <th>4 stars</th>
                                                                <th>5 stars</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Quality</td>
                                                                <td>
                                                                    <input type="radio" name="ratings[1]" id="Quality_1" value="1" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="ratings[1]" id="Quality_2" value="2" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="ratings[1]" id="Quality_3" value="3" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="ratings[1]" id="Quality_4" value="4" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="ratings[1]" id="Quality_5" value="5" class="radio">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Value</td>
                                                                <td>
                                                                    <input type="radio" name="value[1]" id="Value_1" value="1" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="value[1]" id="Value_2" value="2" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="value[1]" id="Value_3" value="3" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="value[1]" id="Value_4" value="4" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="value[1]" id="Value_5" value="5" class="radio">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Price</td>
                                                                <td>
                                                                    <input type="radio" name="price[1]" id="Price_1" value="1" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="price[1]" id="Price_2" value="2" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="price[1]" id="Price_3" value="3" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="price[1]" id="Price_4" value="4" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="price[1]" id="Price_5" value="5" class="radio">
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="form-group">
                                                        <label>Nickname<span class="required">*</span></label>
                                                        <input type="text" class="form-control" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Summary of Your Review<span class="required">*</span></label>
                                                        <input type="text" class="form-control" required="">
                                                    </div>
                                                    <div class="form-group mb-xlg">
                                                        <label>Review<span class="required">*</span></label>
                                                        <textarea cols="5" rows="6" class="form-control"></textarea>
                                                    </div>
                                                    <div class="text-right">
                                                        <input type="submit" class="btn btn-primary" value="Submit Review">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="slider-title">
                    <span class="inline-title">TAMBIÉN COMPRADO</span>
                    <span class="line"></span>
                </h2>
                <div class="owl-carousel owl-theme owl-loaded owl-drag owl-carousel-init" data-plugin-options="{'items':4, 'margin':20, 'nav':true, 'dots': false, 'loop': false}" id="owl-carousel-featured">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: 0s; width: 1089px;">
                            <div class="owl-item active" style="width: 197.625px; margin-right: 20px;">
                                <div class="product">
                                    <figure class="product-image-area">
                                        <a href="#" title="Product Name" class="product-image">
                                        <img src="<?php echo base_url('assets/img/demos/shop/products/product1.jpg') ?>" alt="Product Name">
                                        <img src="<?php echo base_url('assets/img/demos/shop/products/product1-2.jpg') ?>" alt="Product Name" class="product-hover-image">
                                        </a>
                                        <a href="#" class="product-quickview">
                                        <i class="fa fa-share-square-o"></i>
                                        <span>Quick View</span>
                                        </a>
                                        <div class="product-label"><span class="discount">-10%</span></div>
                                        <div class="product-label"><span class="new">New</span></div>
                                    </figure>
                                    <div class="product-details-area">
                                        <h2 class="product-name"><a href="#" title="Product Name">Noa Sheer Blouse</a></h2>
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
                                            <i class="fa fa-shopping-cart"></i>
                                            <span>Add to Cart</span>
                                            </a>
                                            <a href="#" class="comparelink" title="Add to Compare">
                                            <i class="glyphicon glyphicon-signal"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 197.625px; margin-right: 20px;">
                                <div class="product">
                                    <figure class="product-image-area">
                                        <a href="#" title="Product Name" class="product-image">
                                        <img src="<?php echo base_url('assets/img/demos/shop/products/product2.jpg') ?>" alt="Product Name">
                                        <img src="<?php echo base_url('assets/img/demos/shop/products/product2-2.jpg') ?>" alt="Product Name" class="product-hover-image">
                                        </a>
                                        <a href="#" class="product-quickview">
                                        <i class="fa fa-share-square-o"></i>
                                        <span>Quick View</span>
                                        </a>
                                        <div class="product-label"><span class="discount">-25%</span></div>
                                    </figure>
                                    <div class="product-details-area">
                                        <h2 class="product-name"><a href="#" title="Product Name">Women Fashion Blouse</a></h2>
                                        <div class="product-ratings">
                                            <div class="ratings-box">
                                                <div class="rating" style="width:0%"></div>
                                            </div>
                                        </div>
                                        <div class="product-price-box">
                                            <span class="old-price">$120.00</span>
                                            <span class="product-price">$90.00</span>
                                        </div>
                                        <div class="product-actions">
                                            <a href="#" class="addtowishlist" title="Add to Wishlist">
                                            <i class="fa fa-heart"></i>
                                            </a>
                                            <a href="#" class="addtocart" title="Add to Cart">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span>Add to Cart</span>
                                            </a>
                                            <a href="#" class="comparelink" title="Add to Compare">
                                            <i class="glyphicon glyphicon-signal"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 197.625px; margin-right: 20px;">
                                <div class="product">
                                    <figure class="product-image-area">
                                        <a href="#" title="Product Name" class="product-image">
                                        <img src="<?php echo base_url('assets/img/demos/shop/products/product3.jpg') ?>" alt="Product Name">
                                        </a>
                                        <a href="#" class="product-quickview">
                                        <i class="fa fa-share-square-o"></i>
                                        <span>Quick View</span>
                                        </a>
                                    </figure>
                                    <div class="product-details-area">
                                        <h2 class="product-name"><a href="#" title="Product Name">Fashion Dress</a></h2>
                                        <div class="product-ratings">
                                            <div class="ratings-box">
                                                <div class="rating" style="width:60%"></div>
                                            </div>
                                        </div>
                                        <div class="product-price-box">
                                            <span class="product-price">$70.00</span>
                                        </div>
                                        <div class="product-actions">
                                            <a href="#" class="addtowishlist" title="Add to Wishlist">
                                            <i class="fa fa-heart"></i>
                                            </a>
                                            <a href="#" class="addtocart" title="Add to Cart">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span>Add to Cart</span>
                                            </a>
                                            <a href="#" class="comparelink" title="Add to Compare">
                                            <i class="glyphicon glyphicon-signal"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 197.625px; margin-right: 20px;">
                                <div class="product">
                                    <figure class="product-image-area">
                                        <a href="#" title="Product Name" class="product-image">
                                        <img src="<?php echo base_url('assets/img/demos/shop/products/product4.jpg') ?>" alt="Product Name">
                                        </a>
                                        <a href="#" class="product-quickview">
                                        <i class="fa fa-share-square-o"></i>
                                        <span>Quick View</span>
                                        </a>
                                        <div class="product-label"><span class="discount">-20%</span></div>
                                    </figure>
                                    <div class="product-details-area">
                                        <h2 class="product-name"><a href="#" title="Product Name">Fashion Sweater</a></h2>
                                        <div class="product-ratings">
                                            <div class="ratings-box">
                                                <div class="rating" style="width:80%"></div>
                                            </div>
                                        </div>
                                        <div class="product-price-box">
                                            <span class="old-price">$100.00</span>
                                            <span class="product-price">$90.00</span>
                                        </div>
                                        <div class="product-actions">
                                            <a href="#" class="addtowishlist" title="Add to Wishlist">
                                            <i class="fa fa-heart"></i>
                                            </a>
                                            <a href="#" class="addtocart" title="Add to Cart">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span>Add to Cart</span>
                                            </a>
                                            <a href="#" class="comparelink" title="Add to Compare">
                                            <i class="glyphicon glyphicon-signal"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 197.625px; margin-right: 20px;">
                                <div class="product">
                                    <figure class="product-image-area">
                                        <a href="#" title="Product Name" class="product-image">
                                        <img src="<?php echo base_url('assets/img/demos/shop/products/product11.jpg') ?>" alt="Product Name">
                                        </a>
                                        <a href="#" class="product-quickview">
                                        <i class="fa fa-share-square-o"></i>
                                        <span>Quick View</span>
                                        </a>
                                    </figure>
                                    <div class="product-details-area">
                                        <h2 class="product-name"><a href="#" title="Product Name">Woman Shee Blouse</a></h2>
                                        <div class="product-ratings">
                                            <div class="ratings-box">
                                                <div class="rating" style="width:0%"></div>
                                            </div>
                                        </div>
                                        <div class="product-price-box">
                                            <span class="product-price">$70.00</span>
                                        </div>
                                        <div class="product-actions">
                                            <a href="#" class="addtowishlist" title="Add to Wishlist">
                                            <i class="fa fa-heart"></i>
                                            </a>
                                            <a href="#" class="addtocart" title="Add to Cart">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span>Add to Cart</span>
                                            </a>
                                            <a href="#" class="comparelink" title="Add to Compare">
                                            <i class="glyphicon glyphicon-signal"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav">
                        <div class="owl-prev"></div>
                        <div class="owl-next"></div>
                    </div>
                    <div class="owl-dots"></div>
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