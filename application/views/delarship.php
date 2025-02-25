
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
                        <li><a href="index.html">Home</a></li>
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
                            <h2>Register as New Delarship Regestration</h2>
                            <div class="form-inner">
                                <form action="http://st.ourhtmldemo.com/new/Machion/my-account.html" method="post">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>First Name</label>
                                            <input type="text" name="fname" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Last Name</label>
                                            <input type="text" name="lname" required="">
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
                                            <label>Password</label>
                                            <input type="password" name="password" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" name="cpassword" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group message-btn">
                                            <button type="submit" class="theme-btn btn-two">Register</button>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <div class="custom-controls-stacked">
                                                <label class="custom-control material-checkbox">
                                                    <input type="checkbox" class="material-control-input">
                                                    <span class="material-control-indicator"></span>
                                                    <span class="description">I agree to all the privacy policy, terms &amp; conditions.</span>
                                                </label>
                                            </div>
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

