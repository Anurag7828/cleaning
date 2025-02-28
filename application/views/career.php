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
                    <h1>Job Openings</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Career</li>
                        
                    </ul>
                </div>
            </div>
        </section>
        <section class="checkout-page-section mb-4">
        <div class="auto-container">
        <div class="payment-method">
                    <h3>Openings</h3>
                    <ul class="accordion-box">
                    <?php

$i = 1;

if ($career) {

    foreach ($career as $row) {
?>
                        <li class="accordion block active-block">
                            <div class="acc-btn active">
                                <div class="icon-outer"><i class="fa-solid fa-angle-down"></i></div>
                                <h4><?= $i ?>. <?= $row['title']?></h4>
                            </div>
                            <div class="acc-content current">
                                <div class="payment-info">
                                    <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                                        <h5>Company Name :-</h5><p><?= $row['company_name']?></p>

                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column mb-4">
                                            <h5>Location :-</h5><p><?= $row['location']?></p>
                                        </div>
                                    
                                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                                        <h5>Date Opened :-</h5><p><?= $row['opened_date']?></p>

                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                                        <h5>Last Date  :-</h5><p><?= $row['last_date']?></p>

                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 column mb-4">
                                        <h5>Required Experince :-</h5><p><?= $row['experience']?></p>

                                        </div>
                                       
                                        <div class="col-lg-12 col-md-6 col-sm-12 column mb-4">
                                        <h5>Job Description :-</h5><p><?= $row['desc']?></p>

                                        </div>
                                        
                                        <div class="col-lg-12 col-md-6 col-sm-12 column mb-4">
                                        <h5>Requirement :-</h5><p><?= $row['requirement']?></p>

                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column mb-4">
                                        <h5>Send Resume :-</h5><p><?= $row['company_email']?></p>

                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 column">
                                            <div class="field-input message-btn">
                                                <a href="<?= base_url('apply/' . encryptId($row['id'])); ?>" class="theme-btn btn-two">Apply</a>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </li>
                       <?php } } ?>
                    </ul>
                </div>
            </div>
        </section>
        <?php include('includes/footer.php') ?>


        
</div>

<?php include('includes/footer-links.php') ?>

</body><!-- End of .page_wrapper -->

</html>

