<?php

	$title = 'Contact Us';
	$page ="contact";
   include "includes/header.php";
?>

 <!-- Bread-Crumb style two -->
    <!-- rts breadcrumba area start -->
    <div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- bread crumb inner wrapper -->
                    <div class="breadcrumb-inner text-center">
                        <h1 class="title">Contact Us</h1>
                        <div class="meta">
                        <a href="index.php" class="prev">Home /</a>
                            <a href="#" class="next">Contact Us</a>
                        </div>
                    </div>
                    <!-- bread crumb inner wrapper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumba area end -->
    <!-- Bread-Crumb style two End -->

    <!-- rts contact area start -->
    <div class="rts-contact-area-m rts-section-gap">
        <div class="container">
            <div class="row g-24">
                <!-- single contact area -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-one-inner">
                        <!-- <div class="thumbnail">
                            <img src="assets/images/contact/01.jpg" alt="">
                        </div> -->
                        <div class="content">
                            <!-- <div class="icone">
                                <img src="assets/images/contact/shape/01.svg" alt="">
                            </div> -->
                            <div class="info">
                                <span>Call Us 24/7</span>
                                <a href="tel:+18475555555">
                                    <h5>+584 (25) 21453</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single contact area end -->
                <!-- single contact area -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-one-inner">
                        <!-- <div class="thumbnail">
                            <img src="assets/images/contact/02.jpg" alt="">
                        </div> -->
                        <div class="content">
                            <div class="icone">
                                <img src="assets/images/contact/shape/02.svg" alt="">
                            </div>
                            <div class="info">
                                <span>MAke A Quote</span>
                                <a href="mailto:someone@example.com">
                                    <h5>info@finbiz.com</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single contact area end -->
                <!-- single contact area -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-one-inner">
                        <!-- <div class="thumbnail">
                            <img src="assets/images/contact/03.jpg" alt="">
                        </div> -->
                        <div class="content">
                            <div class="icone">
                                <img src="assets/images/contact/shape/03.svg" alt="">
                            </div>
                            <div class="info">
                                <span>Service Station</span>
                                <a href="#">
                                    <h5>25 Hilton Street.</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single contact area end -->
            </div>
        </div>
    </div>
    <!-- rts contact area end -->
   
    <!-- contact form area strt -->
    <div class="rts-contact-page-form-area contact-2 rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                     <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=640&amp;hl=en&amp;q=148 Rue Saint-Honoré, 75001 Paris, France (3rd Floor Apt 54) Numéro Siret :48325210200015 (siège de l'entreprise)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://capcuttemplate.org/">Capcuttemplate.org</a></div><style>.mapouter{position:relative;text-align:right;width:600px;height:640px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:640px;}.gmap_iframe {width:600px!important;height:640px!important;}</style></div>
                </div>
                <div class="col-lg-6">
                    <div class="mian-wrapper-form">
                        <div class="title-mid-wrapper-home-two" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                            <span class="pre">Get In Touch</span>
                            <h2 class="title">Let’s Get in Touch</h2>
                        </div>
                        <form id="contact" action="#" class="appoinment-form mt--40">
                            <div class="input-half-wrapper">
                                <div class="single-input">
                                    <input type="text" placeholder="Your Name" required>
                                </div>
                                <div class="single-input">
                                    <input type="email" placeholder="Email Address" required>
                                </div>
                            </div>
                            <!-- <select>
                                <option data-display="Select">Select an option</option>
                                <option value="1">Some option</option>
                                <option value="2">Another option</option>
                                <option value="3" disabled>A disabled option</option>
                                <option value="4">Potato</option>
                            </select> -->
                            <!-- <div class="input-half-wrapper mt--25 mb--30">
                                <div class="single-input">
                                    <input placeholder="Select Date" type="text" name="checkIn" id="datepicker" value="" class="calendar" required>
                                </div>
                                <div class="single-input">
                                    <input type="text" id="timepicker" placeholder="Select Date" />
                                </div>
                            </div> -->
                            <textarea class="form-control mb--30 mt--25" id="message" name="message" placeholder="Your message Here" required=""></textarea>
                            <button type="submit" class="rts-btn btn-primary">SUBMIT MESSAGE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact form area end -->

<!--=========================footer =============================================-->
 <!-- ----------footer---------------------------------- -->
 <?php
	$page ="contact";
	include "includes/footer.php";
?>
<!-- ---------------end footer ---------------------------- -->

