<?php include 'inc/header.php'; ?>

<body>
    <div class="page-wrapper">

        <div class="preloader"></div>

        <?php include 'inc/nav.php'; ?>

        <section class="page-title">
            <div class="outer-container">
                <div class="image">
                    <img src="/images/24.jpg" alt="">
                </div>
            </div>
        </section>


        <section class="page-breadcrumb">
            <div class="image-layer" style="background-image:url(/images/1.png)"></div>
            <div class="container">
                <div class="clearfix">
                    <div class="pull-left">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="pull-right">
                        <ul class="breadcrumbs">
                            <li class="left-curves"></li>
                            <li class="right-curves"></li>
                            <li><a href="/">Home -</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <section class="contact-page-section" style="background-image:url(/images/25.jpg)">
            <div class="pattern-layer" style="background-image:url(/images/pattern-13.png)"></div>
            <div class="container">
                <div class="row">

                    <div class="info-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">

                            <div class="section-title">
                                <h2>Get in Touch</h2>
                                <p class="text">Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            </div>
                            <div class="row">

                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <div class="contact-address">
                                        <div class="inner">
                                            <div class="icon-box">
                                                <span class="icon flaticon-map-pin-marked"></span>
                                            </div>
                                            <h4>Address</h4>
                                            <p class="text">29 Union Square West <br> New York, NY 10003, USA</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <div class="contact-address">
                                        <div class="inner">
                                            <div class="icon-box">
                                                <span class="icon flaticon-phone-call"></span>
                                            </div>
                                            <h4>Address</h4>
                                            <p class="text">+1 (857) 325-4879 <br> +1 (685) 218-7845</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <div class="contact-address">
                                        <div class="inner">
                                            <div class="icon-box">
                                                <span class="icon flaticon-clock"></span>
                                            </div>
                                            <h4>Opening Hours</h4>
                                            <p class="text">Moday to Friday: 8am to 7pm Saturday: 10am to 5pm Sunday: 10am to 2pm</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <div class="contact-address">
                                        <div class="inner">
                                            <div class="icon-box">
                                                <span class="icon flaticon-letter"></span>
                                            </div>
                                            <h4>Mail</h4>
                                            <p class="text">enquires@lungeimzentrum.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="title-box">
                                <div class="title">Need emergency?</div>
                                <h3>Drop us a Line</h3>
                            </div>

                            <div class="contact-form">
                                <form method="post" action="sendemail.php" id="contact-form">
                                    <div class="form-group">
                                        <span class="icon flaticon-user-2"></span>
                                        <input type="text" name="username" placeholder="Enter your name " required="">
                                    </div>
                                    <div class="form-group">
                                        <span class="icon flaticon-send"></span>
                                        <input type="email" name="email" placeholder="Your mail " required="">
                                    </div>
                                    <div class="form-group">
                                        <span class="icon flaticon-phone"></span>
                                        <input type="text" name="phone" placeholder="Phone Number " required="">
                                    </div>
                                    <div class="form-group comment-group">
                                        <span class="icon icon-comments"></span>
                                        <textarea name="message" placeholder="Write your message "></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="theme-btn submit-btn" type="submit" name="submit-form">Submit Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="map-section" id="map-location">

            <div class="map-outer">
                <div class="google-map" id="contact-google-map" data-map-lat="44.231172" data-map-lng="-76.485954" data-icon-path="images/icons/map-marker.png" data-map-title="Alabama, USA" data-map-zoom="12" data-markers="{
                	&quot;marker-1&quot;: [42.231172, -84.485954, &quot;<h4>Branch Office</h4><p>4/99 Alabama, USA</p>&quot;],
                    &quot;marker-2&quot;: [44.231172, -76.485954, &quot;<h4>Branch Office</h4><p>4/99 Alabama, USA</p>&quot;],
                    &quot;marker-3&quot;: [40.880550, -78.393705, &quot;<h4>Branch Office</h4><p>4/99 Pennsylvania, USA</p>&quot;]
                }">
                </div>
            </div>
        </section>


        <!-- <section class="sponsors-section">
            <div class="container">
                <div class="sponsors-outer">

                    <ul class="sponsors-carousel owl-carousel owl-theme">
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="/images/1_1.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="/images/2.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="/images/3.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="/images/4.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="/images/5.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="/images/1_1.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="/images/2.png" alt=""></a></figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="/images/3.png" alt=""></a></figure>
                        </li>
                    </ul>
                </div>
            </div>
        </section> -->


        <section class="fullwidth-section-two">
            <div class="outer-container">
                <div class="clearfix">

                    <div class="left-column" style="background-image:url(/images/5.jpg)">
                        <div class="inner-column">
                            <h2>Abonnieren Sie unsere <br> Newsletter</h2>

                            <div class="subscribe-form">
                                <form method="post" action="contact.html">
                                    <div class="form-group">
                                        <input type="email" name="email" value="" placeholder="Enter your mail here"
                                            required="">
                                        <button type="submit" class="theme-btn subscribe-btn"><span
                                                class="icon icon-envelope3"></span> Abonnieren</button>
                                    </div>
                                </form>
                            </div>

                            <p class="text">***Wir versprechen, kein Spam!</p>
                        </div>
                    </div>

                    <div class="right-column" style="background-image:url(/images/6.jpg)">
                        <div class="inner-column">

                            <a href="tel:+490800336655" class="phone">
                                <span class="icon-box flaticon-24-hours"></span>
                                <span class="title">Medizinische Notfallversorgung</span><strong>0800336655</strong>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php include 'inc/footer.php'; ?>
    </div>


    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon icon-chevron-up"></span></div>

    <div class="xs-sidebar-group info-group">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">
                        <span class="icon icon-cross"></span>
                    </a>
                </div>
                <div class="sidebar-textwidget">

                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo">
                                <a href="/"><img src="/images/logo-2.png" alt=""></a>
                            </div>
                            <div class="content-box">
                                <h2>About Us</h2>
                                <p class="text">We must explain to you how all seds this mistakens idea off denouncing pleasures and praising pain was born and I will give you a completed accounts off the system and expound.</p>
                                <a href="#" class="theme-btn btn-style-one"><i>Consultation</i></a>
                            </div>
                            <div class="contact-info">
                                <h2>Contact Info</h2>
                                <ul class="list-style-one">
                                    <li><span class="icon flaticon-map-1"></span>Rock St 12, Newyork City, USA</li>
                                    <li><span class="icon flaticon-telephone"></span>(000) 000-000-0000</li>
                                    <li><span class="icon flaticon-letter"></span>enquires@lungeimzentrum.com</li>
                                    <li><span class="icon flaticon-clock-2"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
                                </ul>
                            </div>

                            <ul class="social-box">
                                <li class="facebook"><a href="#" class="icon icon-facebook"></a></li>
                                <li class="twitter"><a href="#" class="icon icon-twitter"></a></li>
                                <li class="linkedin"><a href="#" class="icon icon-linkedin"></a></li>
                                <li class="instagram"><a href="#" class="icon icon-instagram"></a></li>
                                <li class="youtube"><a href="#" class="icon icon-youtube"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="xs-sidebar-group cart-group">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading media">
                    <div class="media-body">
                        <a href="#" class="close-side-widget">
                            <span class="icon icon-cross"></span>
                        </a>
                    </div>
                </div>
                <div class="xs-empty-content">

                    <div class="cart-product">
                        <div class="inner">
                            <div class="cross-icon"><span class="icon icon-close"></span></div>
                            <div class="image"><img src="/images/treatment-one.jpg" alt=""></div>
                            <h3><a href="shop-single.html">Treatment One</a></h3>
                            <div class="quantity-text">Quantity 1</div>
                            <div class="price">$39.00</div>
                        </div>
                    </div>

                    <div class="cart-product">
                        <div class="inner">
                            <div class="cross-icon"><span class="icon icon-close"></span></div>
                            <div class="image"><img src="/images/treatment-two.jpg" alt=""></div>
                            <h3><a href="shop-single.html">Treatment Two</a></h3>
                            <div class="quantity-text">Quantity 1</div>
                            <div class="price">$69.00</div>
                        </div>
                    </div>

                    <div class="cart-product">
                        <div class="inner">
                            <div class="cross-icon"><span class="icon icon-close"></span></div>
                            <div class="image"><img src="/images/treatment-three.jpg" alt=""></div>
                            <h3><a href="shop-single.html">Treatment Three</a></h3>
                            <div class="quantity-text">Quantity 1</div>
                            <div class="price">$99.00</div>
                        </div>
                    </div>
                    <p class="xs-btn-wraper">
                        <a class="btn btn-style-three" href="#">Return To Shop</a>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="zoom-anim-dialog mfp-hide modal-searchPanel" id="modal-popup-2">
        <div class="xs-search-panel">
            <form action="#" method="POST" class="xs-search-group">
                <input type="search" class="form-control" name="search" id="search" placeholder="Search">
                <button type="submit" class="search-button"><i class="icon icon-search"></i></button>
            </form>
        </div>
    </div>


    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="/js/jquery.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/jquery-ui.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.fancybox.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/js/owl.js"></script>
    <script src="/js/paroller.js"></script>
    <script src="/js/wow.js"></script>
    <script src="/js/validate.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/nav-tool.js"></script>
    <script src="/js/jquery-ui.js"></script>
    <script src="/js/appear.js"></script>
    <script src="/js/script.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcaOOcFcQ0hoTqANKZYz-0ii-J0aUoHjk"></script>
    <script src="/js/gmaps.js"></script>
    <script src="/js/map-script.js"></script>


</body>

</html>