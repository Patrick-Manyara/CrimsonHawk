<?php include_once 'header.php'; ?>

<!-- Start Breadcrumb-->
<div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/bg_3.png);background-position:top;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>Contact Us</h1>
                <ul class="breadcrumb">
                    <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li class="active">Contacts</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Contact Area -->
<div class="contact-area default-padding">
    <div class="container">
        <div class="row">

            <!-- Start Contact Info -->
            <div class="col-md-12 contact-forms">
                <div class="contact-box">
                    <div class="icon">
                        <i class="ti-email"></i>
                    </div>
                    <h2>Let's talk about your idea</h2>
                    <p>
                        Let's collaborate to turn your vision into reality with tailored marketing strategies that deliver real results.
                    </p>
                    <form action="assets/mail/contact.php" method="POST" class="contact-form">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <button type="submit" name="submit" id="submit">
                                    Send Message <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-md-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Contact Info -->

        </div>
    </div>
</div>
<!-- End Contact Area -->

<!-- Start Google Maps-->
<div class="maps-area">
    <div class="container-full">
        <div class="row">
            <div class="google-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.856189862141!2d36.81575757496576!3d-1.25830749872972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f171b74f9ba57%3A0x11a8c077b37bd655!2sDiamond%20Plaza%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1735812151633!5m2!1sen!2ske" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- End Google Maps -->
<?php include_once 'footer.php'; ?>