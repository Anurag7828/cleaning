
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
            <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="line-box">
                <div class="line-1"></div>
                <div class="line-2"></div>
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Delarship Regestration</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= base_url()?>">Home</a></li>
                        <li>Delarship Regestration</li>
                        
                    </ul>
                </div>
            </div>
        </section>

        <section class="myaccount-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <div class="col-lg-12 col-md-12 col-sm-12 register-column">
                        <div class="register-content">
                            <h2>Request a Quote</h2>
                            <div class="form-inner">
                                <form action="<?= base_url('Home/delarship') ?>" method="post">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Company Name</label>
                                            <input type="text" name="company_name" required="">
                                        </div> <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Owner Name</label>
                                            <input type="text" name="owner_name" required="">
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Phone Num</label>
                                            <input type="text" name="phone" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>City</label>
                                            <input type="text" name="city" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Pincode</label>
                                            <input type="text" name="pincode" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Select Country</label>
                                            <div class="select-box">
                                                <select class="selectmenu" id="countryDropdown" name="country">
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






                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Select Business Type</label>
                                            <div class="select-box">
                                                <select class="selectmenu" id="countryDropdown" name="bussiness_type">
                                                    <option value="" disabled selected>Select Business Type</option>
                                                    <option value="Retailer">Retailer</option>
                                                    <option value="Distributor">Distributor</option>
                                                    <option value="Service Provider">Service Provider</option>


                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Message</label>
                                            <textarea name="message"></textarea>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group message-btn">
                                            <button type="submit" class="theme-btn btn-two">Submit</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include('includes/footer.php') ?>


        
</div>

<?php include('includes/footer-links.php') ?>

</body><!-- End of .page_wrapper -->

</html>

