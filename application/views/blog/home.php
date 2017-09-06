<!--Contenido --> 
<div role="main" class="main">
    <!-- Menu de seccion -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Medium Image</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Menu de seccion END -->
    <!-- Contenido de los productos -->
    <div class="container" style="margin-top: 3.5em">
        <div class="row">
            <div class="col-md-9">
                <div class="blog-posts">
                    <?php for($i = 1; $i <= 6; $i++): ?>
                        <article class="post post-medium">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="post-image">
                                        <div class="owl-carousel owl-theme owl-loaded owl-drag owl-carousel-init" data-plugin-options="{'items':1}">
                                            <img class="img-responsive" src="<?php echo base_url('assets/img/blog/blog-image-2.jpg') ?>" alt="">
                                            <img class="img-responsive" src="<?php echo base_url('assets/img/blog/blog-image-2.jpg') ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="post-content">
                                        <h2>
                                            <a href="<?php echo base_url('publication') ?>">Class aptent taciti sociosqu ad litora torquent</a>
                                        </h2>
                                        <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="post-meta">
                                        <span><i class="fa fa-calendar"></i> 10 de enero de 2017 </span>
                                        <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                        <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">Noticias</a> </span>
                                        <span><i class="fa fa-comments"></i> <a href="#">12 Comentarios</a></span>
                                        <a href="<?php echo base_url('publication') ?>" class="btn btn-xs btn-primary pull-right">Lee mas...</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php endfor; ?>
                    <ul class="pagination pagination-lg pull-right">
                        <li><a href="#">«</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <aside class="sidebar">
                    <form>
                        <div class="input-group input-group-lg">
                            <input class="form-control" placeholder="Search..." name="s" id="s" type="text">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <hr>                
                    <h4 class="heading-primary">Categories</h4>
                    <ul class="nav nav-list mb-xlg">
                        <li><a href="#">Design (2)</a></li>
                        <li class="active">
                            <a href="#">Photos (4)</a>
                            <ul>
                                <li><a href="#">Animals</a></li>
                                <li class="active"><a href="#">Business</a></li>
                                <li><a href="#">Sports</a></li>
                                <li><a href="#">People</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Videos (3)</a></li>
                        <li><a href="#">Lifestyle (2)</a></li>
                        <li><a href="#">Technology (1)</a></li>
                    </ul>
                    <div class="tabs mb-xlg">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#popularPosts" data-toggle="tab" aria-expanded="true"><i class="fa fa-star"></i> Popular</a></li>
                            <li class=""><a href="#recentPosts" data-toggle="tab" aria-expanded="false">Recent</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="popularPosts">
                                <ul class="simple-post-list">
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="blog-post.html">
                                                    <img src="img/blog/blog-thumb-1.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
                                            <div class="post-meta">
                                                 Jan 10, 2017
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="blog-post.html">
                                                    <img src="img/blog/blog-thumb-2.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Vitae Nibh Un Odiosters</a>
                                            <div class="post-meta">
                                                 Jan 10, 2017
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="blog-post.html">
                                                    <img src="img/blog/blog-thumb-3.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Odiosters Nullam Vitae</a>
                                            <div class="post-meta">
                                                 Jan 10, 2017
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane" id="recentPosts">
                                <ul class="simple-post-list">
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="blog-post.html">
                                                    <img src="img/blog/blog-thumb-2.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Vitae Nibh Un Odiosters</a>
                                            <div class="post-meta">
                                                 Jan 10, 2017
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="blog-post.html">
                                                    <img src="img/blog/blog-thumb-3.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Odiosters Nullam Vitae</a>
                                            <div class="post-meta">
                                                 Jan 10, 2017
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="blog-post.html">
                                                    <img src="img/blog/blog-thumb-1.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
                                            <div class="post-meta">
                                                 Jan 10, 2017
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h4 class="heading-primary">About Us</h4>
                    <p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. </p>
                </aside>
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