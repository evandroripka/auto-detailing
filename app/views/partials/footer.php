<!-- Main content wrapper end -->
</div>

<!-- =================== FOOTER START =================== -->
<footer>
    <div class="container">
        <div class="row gx-5">
            <!-- ========== Company Branding & Social Links ========== -->
            <div class="col-lg-4 col-sm-6">
                <img src="<?= $base ?>/assets/images/logo-brands/logo.png" class="logo-footer" alt="Logo">
                <div class="spacer-20"></div>
                <p>
                    At AutoDetail, we deliver premium car care — from precision hand washes to ceramic coatings —
                    helping your vehicle stay protected, look flawless, and hold its value over time.
                </p>
                <div class="social-icons mb-sm-30">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>

            <!-- ========== Navigation Menus ========== -->
            <div class="col-lg-4 col-sm-12 order-lg-1 order-sm-2">
                <div class="row">
                    <!-- Primary Menu -->
                    <div class="col-lg-5">
                        <div class="widget">
                            <h5>Company</h5>
                            <ul>
                                <li><a href="javascript:void(0)" onclick="scrollToElementById('home-slider')">Home</a></li>
                                <li><a href="javascript:void(0)" onclick="scrollToElementById('about-us')">About Us</a></li>
                                <li><a href="javascript:void(0)" onclick="scrollToElementById('services')">Services</a></li>
                                <li><a href="javascript:void(0)" onclick="scrollToElementById('before-after')">Before & After</a></li>
                                <li><a href="javascript:void(0)" onclick="scrollToElementById('contact-us')">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Service Links -->
                    <div class="col-lg-7">
                        <div class="widget">
                            <h5>Our Services</h5>
                            <ul>
                                <li><a href="#">Exterior Hand Wash & Wax</a></li>
                                <li><a href="#">Interior Deep Cleaning</a></li>
                                <li><a href="#">Paint Correction</a></li>
                                <li><a href="#">Ceramic Coating Protection</a></li>
                                <li><a href="#">Engine Bay Detailing</a></li>
                                <li><a href="#">Headlight Restoration</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ========== Contact Info ========== -->
            <div class="col-lg-4 col-sm-6 order-lg-2 order-sm-1" id="contact-us">
                <div class="widget">
                    <h5>Contact Us</h5>
                    <div class="fw-bold text-white">
                        <i class="icofont-location-pin me-2 id-color"></i>Head Office
                    </div>
                    567 Midland Ave, Staten Island, NY

                    <div class="spacer-20"></div>

                    <div class="fw-bold text-white">
                        <i class="icofont-phone me-2 id-color"></i>Call Us
                    </div>
                    +1 (929) 725-8078

                    <div class="spacer-20"></div>

                    <div class="fw-bold text-white">
                        <i class="icofont-envelope me-2 id-color"></i>Email Us
                    </div>
                    contact@finestdetailingnyc.com
                </div>
            </div>
        </div>
    </div>

    <!-- ========== Subfooter ========== -->
    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="de-flex">
                        <div class="de-flex-col">
                            &copy; 2025 - Finest Auto Detasiling NYC. All Rights Reserved.
                        </div>
                        <div class="de-flex-col">
                            <span>
                                Developed by
                                <a href="https://evandroripka.dev" target="_blank" rel="noopener noreferrer" class="dev-link">
                                    Evandro Ripka
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- =================== FOOTER END =================== -->


<!-- =================== JAVASCRIPT FILES =================== -->
<script src="<?= $base ?>/assets/js/scrollto.js"></script>
<script src="<?= $base ?>/assets/js/plugins.js"></script>
<script src="<?= $base ?>/assets/js/designesia.js"></script>
<script src="<?= $base ?>/assets/js/swiper.js"></script>
<script src="<?= $base ?>/assets/js/custom-swiper-3.js"></script>
<script src="<?= $base ?>/assets/js/jquery.event.move.js"></script>
<script src="<?= $base ?>/assets/js/jquery.twentytwenty.js"></script>

<script>
    // Initialize Before/After comparison plugin after all assets are loaded
    $(window).on("load", function() {
        $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({
            default_offset_pct: 0.5
        });
        $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({
            default_offset_pct: 0.5,
            orientation: 'vertical'
        });
    });
</script>
</body>

</html>