<!-- Start Footer -->
<footer class="bg-dark default-padding text-light" style="background: #EF7504;">
    <div class="container">
        <div class="row">

            <div class="equal-height col-md-4 col-sm-6 item">
                <div class="f-item about">
                    <h4 class="widget-title">About</h4>
                    <p>
                        Crimson Hawk Limited is more than just a marketing agency - we are storytellers, strategists, and solution providers. Our mission is to transform your brand into a market leader through innovative, data-driven marketing strategies that deliver measurable results.
                    </p>
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/hawklimited/"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="https://x.com/HAWKLIMITED1"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/crimson-hawk-limited/"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/hawk.limited/"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="https://www.google.com/search?q=hawk+limited&oq=hawk+limited+&gs_lcrp=EgZjaHJvbWUyCggAEEUYFhgeGDkyCAgBEAAYFhgeMggIAhAAGBYYHjIOCAMQLhgWGB4YxwEY0QMyCAgEEAAYFhgeMgYIBRBFGDwyBggGEEUYPDIGCAcQRRg80gEINDM5MGowajeoAgCwAgA&sourceid=chrome&ie=UTF-8"><i class="fab fa-google"></i></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/@CrimsonHawkLimited"><i class="fab fa-youtube"></i></a>
                        </li>
                    </ul>

                </div>
            </div>

            <div class="equal-height col-md-2 col-sm-6 item">
                <div class="f-item link">
                    <h4 class="widget-title">Services</h4>
                    <ul>
                        <li><a href="service.php?id=lead">Lead Generation</a></li>
                        <li><a href="service.php?id=outdoor">Movable Billboards</a></li>
                        <li><a href="service.php?id=workshops">Digital Marketing Training</a></li>
                        <li><a href="service.php?id=social">Social Media Management</a></li>
                        <li><a href="service.php?id=sales">Sales Team</a></li>
                    </ul>

                </div>
            </div>

            <div class="equal-height col-md-3 col-sm-6 item">
                <div class="f-item recent-post">
                    <h4 class="widget-title">Recent Post</h4>

                    <div class="single">
                        <div class="content">
                            <a href="single.php?id=1">How Can I Build a Strong Online Presence for My Business?</a>
                            <ul class="meta">
                                <li>
                                    <i class="ti-calendar"></i> 23 Dec, 2024
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="single">
                        <div class="content">
                            <a href="single.php?id=3">What is the Difference Between Organic and Paid Marketing?</a>
                            <ul class="meta">
                                <li>
                                    <i class="ti-calendar"></i> 27 Dec, 2024
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>

            <div class="equal-height col-md-3 col-sm-6 item">
                <div class="f-item contact">
                    <h4 class="widget-title">Contact Us</h4>
                    <ul>
                        <li>
                            <h5>Address</h5>
                            <span>Fourth Parklands Avenue, Parklands Nairobi.</span>
                        </li>
                        <li>
                            <h5>Phone</h5>
                            <span>+254708864076</span>
                        </li>
                        <li>
                            <h5>Email</h5>
                            <span>marketing@crimsonhawkltd.co.ke</span>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="footer-bottom text-center">
                <div class="col-md-12 text-center">
                    <p>
                        Copyright &copy; <?= date('Y') ?> All rights reserved. Crimson Hawk Limited
                    </p>
                </div>
            </div>

        </div>
    </div>
</footer>
<!-- End Footer-->


<style>
    .IconImg {
        width: 60px;
        margin: 1em 0px;
    }

    .ServiceIcon {
        width: 40px;
    }

    .MyItem1 {
        height: 40em;
    }

    .MyItem2 {
        height: 46em;
    }

    .MyUl li {
        list-style: inside;
        margin: 5px 0px;
    }

    .MyUl li a {
        color: #03492F;
        font-weight: 700;
    }

    .MyUl li a:hover {
        color: #EF7504;
    }

    .CaptionArea {
        display: flex;
        align-items: baseline;
    }

    .CaptionArea p {
        width: 90%;
        text-align: left;
    }

    .CaptionArea img {
        width: 15px;
    }

    .panel-body {
        background: #03492F;
    }

    .panel-body p {
        color: #FFFFFF;
    }

    .contact-box h2,
    .contact-box p {
        color: #03492F;
    }

    .BlogImg {
        height: 20em;
        width: 100%;
        object-fit: cover;
    }

    .MyAboutShadow::after {
        background: #000000 none repeat scroll 0 0 !important;
        opacity: 0.75 !important;
    }

    .TeamImg {
        height: 20em;
        width: 100%;
        object-fit: cover;
    }

    .MyBtn {
        background-color: #03492F;
        color: #FFFFFF !important;
        border: 2px solid #cccccc;
        font-weight: 700;
    }

    .sidebar-item.social-sidebar li.google a {
        background: #DB4437 none repeat scroll 0 0;
    }

    .sidebar-item.social-sidebar li.youtube a {
        background: #FF0000 none repeat scroll 0 0;
    }

    .sidebar-item.social-sidebar li.instagram a {
        background: #d62976 none repeat scroll 0 0;
    }

    .BlogThumb {
        width: 100%;
        height: 32em;
        object-fit: cover;
    }

    .CounterArea {
        display: flex;
    }

    @media screen and (max-width:600px) {
        .CounterArea {
            justify-content: center;
            align-items: center;
        }
    }
</style>

<!-- jQuery Frameworks
    ============================================= -->
<script src="assets/js/jquery-1.12.4.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/equal-height.min.js"></script>
<script src="assets/js/jquery.appear.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/modernizr.custom.13711.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/progress-bar.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/count-to.js"></script>
<script src="assets/js/bootsnav.js"></script>
<script src="assets/js/main.js"></script>

</body>

</html>