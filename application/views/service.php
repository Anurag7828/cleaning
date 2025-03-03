<!DOCTYPE html>
<html lang="en">

<head>
<?php include('includes/header-links.php') ?>

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


    <?php include('includes/header.php') ?>
   
    <section class="page-title centred">
            <div class="bg-layer" style="background-image: url(<?= base_url()?>assets/images/background/page-title.jpg);"></div>
            <div class="line-box">
                <div class="line-1"></div>
                <div class="line-2"></div>
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <h1></h1>
                   
                </div>
            </div>
        </section>
        <section class="service-details industries-details">
            <div class="auto-container">
                <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="service-sidebar">
                            <div class="category-widget">
                                <div class="widget-title">
                                    <h3>Other Services</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">
                                    <?php  
                                        foreach ($other as $othercate) { ?> 
                                        <li><a href="<?= base_url('service/'.encryptId($othercate['id'])) ?>"><?= $othercate['heading']?><i class="flaticon-right-chevron"></i></a></li>
                                       <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="contact-widget">
                                <div class="widget-title">
                                    <h3>For Enquiry</h3>
                                </div>
                                <div class="widget-content">
                                   
                                    <ul class="info-box clearfix">
                                    <li>
                                            <div class="icon-box"><i class="flaticon-dial-pad"></i></div>
                                            <h5>Address</h5>
                                            <p><a href="">F-6, Vansh Tower-1, Natraj Society, Ratanpur</a></p>
                                        </li>
                                        <li>
                                            <div class="icon-box"><i class="flaticon-dial-pad"></i></div>
                                            <h5>Phone</h5>
                                            <p><a href="tel:8048269152">(+91) 8048269152</a></p>
                                        </li>
                                        <li>
                                            <div class="icon-box"><i class="flaticon-mail"></i></div>
                                            <h5>Email</h5>
                                            <p><a href="mailto:lunahennah@example.com">info@example.com</a></p>
                                        </li>
                                    </ul>
                                    <div class="btn-box">
                                        <a  href="javascript:void(0);" class="search-box-outer search-toggler theme-btn btn-one"><span>Request A Quote</span></a>
                                    </div>
                                </div>
                            </div>
                      
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="service-details-content">
                            <div class="content-one">
                                
                                <div class="text">
                                    <h4><?= $service[0]['heading']?></h4>
                                    <p><?= $service[0]['description']?></p>
                                  
                                </div>
                            </div>
                           
                        </div>
                   
                        <div class="service-details-content">
                          
                            <div class="content-two">
                               
                                <div class="row clearfix">
                                <?php  
        $serice_category= $this->CommonModal->getRowById('service_category', 'service_id',$service[0]['id'] );
        $sub_category= $this->CommonModal->getRowById('sub_category', 'category',$serice_category[0]['category_id'] );


                                        foreach ($sub_category as $sub_category_row) { ?> 
                                    <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                        <div class="service-block-two">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image"><img src="<?= base_url() ?>uploads/sub_cat/<?= $sub_category_row['image'] ?>" alt="" style="height: 250px;"></figure>
                                                    <h3><a href="<?= base_url()?>sub_category"><?= $sub_category_row['sub_category'] ?></a></h3>
                                                    
                                                </div>
                                                <div class="lower-content">
                                                    <p><?= substr($sub_category_row['description'], 0, 30) . (strlen($sub_category_row['description']) > 30 ? '...' : ''); ?></p>
                                                    <div class="btn-box">
                                                        <a href="<?= base_url() ?>sub_category/<?= encryptId($sub_category_row['id']) ?>"><span>More Details</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    
                                </div>
                              
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

