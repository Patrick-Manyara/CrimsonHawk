<?php include_once 'header.php'; ?>

<!-- Start Breadcrumb-->
<div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/blog5.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>Contact Us</h1>
                <ul class="breadcrumb">
                    <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li class="active">Contact</li>
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


            <!-- Start Faq -->
            <div class="col-md-6 faq-area">
                <div class="heading">
                    <h2>Answer & Questions</h2>
                </div>
                <div class="acd-items acd-arrow">
                    <div class="panel-group symb" id="accordion">

                        <!-- Single Item -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#ac1">
                                        What is digital marketing, and why is it important for my business?
                                    </a>
                                </h4>
                            </div>
                            <div id="ac1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>
                                        Digital marketing involves promoting your business online using various digital channels such as social media, search engines, websites, email, and more. It is important because it helps you reach a wider audience, build brand awareness, engage with customers, and drive sales. In today's digital world, having an online presence is essential to staying competitive and growing your business.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#ac2">
                                        How can social media marketing benefit my business?
                                    </a>
                                </h4>
                            </div>
                            <div id="ac2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        Social media marketing allows your business to connect with your audience on platforms like Facebook, Instagram, LinkedIn, and Twitter. It helps increase brand visibility, build relationships with customers, and drive traffic to your website. Additionally, social media ads allow you to target specific demographics, ensuring your content reaches the right people.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#ac3">
                                        How long does it take to see results from digital marketing?
                                    </a>
                                </h4>
                            </div>
                            <div id="ac3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        The timeline for results depends on the type of digital marketing strategy you use. For example, paid advertising like Google Ads or social media ads can yield quick results, while strategies like Search Engine Optimization (SEO) and content marketing take longer to show significant impact. On average, most businesses start seeing noticeable results within 3-6 months of consistent effort.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#ac4">
                                        How do you measure the success of a digital marketing campaign?
                                    </a>
                                </h4>
                            </div>
                            <div id="ac4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        We measure the success of a campaign using key performance indicators (KPIs) such as website traffic, conversion rates, social media engagement, click-through rates (CTR), and return on investment (ROI). Regular reporting and analysis help us understand what's working and make data-driven decisions to optimize the campaign for better performance.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                    </div>
                </div>
            </div>
            <!-- End Faq -->

            <!-- Start Contact Info -->
            <div class="col-md-6 contact-forms">
                <div class="contact-box">
                    <div class="icon">
                        <i class="ti-email"></i>
                    </div>
                    <h2>Let's lalk about your idea</h2>
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.856189862141!2d36.81575757496576!3d-1.25830749872972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f171b74f9ba57%3A0x11a8c077b37bd655!2sDiamond%20Plaza%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1735812151633!5m2!1sen!2ske"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- End Google Maps -->
<?php include_once 'footer.php'; ?>