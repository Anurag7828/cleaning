<!DOCTYPE html>
<html lang="en">

<head>
<?php include('includes/header-links.php') ?>

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


    <?php include('includes/header.php') ?>
    <style>
    .selectmenu{
        display: none !important;
    }
    .nice-select{
        display: block !important;
    }
  </style>
    <section class="page-title centred">
            <div class="bg-layer" style="background-image: url(<?= base_url()?>assets/images/background/page-title.jpg);"></div>
            <div class="line-box">
                <div class="line-1"></div>
                <div class="line-2"></div>
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Contact Us</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= base_url()?>">Home</a></li>
                        <li>Contact</li>
                        
                    </ul>
                </div>
            </div>
        </section>

        <!-- contact-info-section -->
        <section class="contact-info-section centred">
            <div class="auto-container">
                <div class="title-box">
                    <div class="icon-box"><i class="flaticon-headphones"></i></div>
                    <h2>Need Support? Talk with Team</h2>
                    <h3>Toll Free: <a href="tel:6132456789">(+91) 91797 03389</a></h3>
                </div>
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                            <div class="info-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-pin"></i></div>
                                    <h3>Headquarters</h3>
                                    <p>F-6, Vansh Tower-1, Natraj Society, Ratanpur Road, 11 Mill, City, Bhopal-462026, Madhya Pradesh, India</p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                            <div class="info-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-mail"></i></div>
                                    <h3>Customer support</h3>
                                    <p><span>Call Us :</span> <a href="mailto:91797 03389">91797 03389</a><br /><span>Mail Us:</span> <a href="mailto:sales@continentalcleaning.in">sales@continentalcleaning.in</a></p>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                            <div class="info-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-clock"></i></div>
                                    <h3>Off. Hours</h3>
                                    <p>Mon - Satday : 08.00 am to 08.45 pm <br />Sunday : Closed. </p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-info-section end -->



        <!-- contact-style-two -->
        <section class="contact-style-two">
           
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title">
                                <span class="sub-title">Send a Message</span>
                                <h2>Feel Free to Say Hello or Send Your Questions</h2>
                                <p>Complete the enquiry form & we will be in touch as soon as possible.</p>
                            </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58676.86962497054!2d77.37071240361756!3d23.195576494555763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c432374fbdc99%3A0x82aa62269e3f077f!2sContinental%20Cleaning%20%26%20Safety%20Solutions!5e0!3m2!1sen!2sin!4v1740462755830!5m2!1sen!2sin" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                      
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 form-column" >
                        <div class="form-inner">
                            <form method="post" action="" style="margin-top:50px;">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Your Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email Address" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="contact" placeholder="Contact" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="city" placeholder="City" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="pincode" placeholder="Pin Code" required>
                                </div>
                                <div class="form-group">
                                    <div class="select-box">
                                        <select class="selectmenu" name="country">
                                        <option value="" disabled selected>Select Country</option>
            <option value="United States">United States</option>
            <option value="Canada">Canada</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="Australia">Australia</option>
            <option value="India" selected>India</option>
            <option value="Germany">Germany</option>
            <option value="France">France</option>
            <option value="Italy">Italy</option>
            <option value="Spain">Spain</option>
            <option value="Japan">Japan</option>
            <option value="China">China</option>
            <option value="Brazil">Brazil</option>
            <option value="South Africa">South Africa</option>
            <option value="Mexico">Mexico</option>
            <option value="Russia">Russia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="select-box">
                                        <select class="selectmenu" name="customer_type">
                                        <option value="" disabled selected>Select Customer Type</option>
            <option value="Existing Customer">Existing Customer</option>
            <option value="New Customer">New Customer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="select-box">
                                        <select class="selectmenu" name="customer_segment">
                                        <option value="" disabled selected>Select Customer Segment</option>
            <option value="Residential">Residential</option>
            <option value="Corporate">Corporate</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" placeholder="Your Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="theme-btn btn-two"><span>Send Message</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-style-two end -->
       
        <?php include('includes/footer.php') ?>


        
</div>

<?php include('includes/footer-links.php') ?>

</body><!-- End of .page_wrapper -->

</html>

