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
                    <h1><?= $sub_categoryy[0]['sub_category']?></h1>
                   
                </div>
            </div>
        </section>
        <section class="service-details industries-details">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="service-details-content">
                            <div class="content-one">
                                <h2><?= $sub_categoryy[0]['heading']?></h2>
                              
                                <div class="text">
                                
                                    <p><?= $sub_categoryy[0]['description']?></p>
                                </div>
                            </div>
                            <div class="content-two">
                                <h3>Products</h3>
                                <div class="row clearfix">
                                <?php  
                                	$product = $this->CommonModal->getRowById('product', 'sub_category',$sub_categoryy[0]['id']);
                                        foreach ($product as $product_row) { ?> 
                                <div class="col-lg-6 col-md-6 col-sm-12 shop-block">
                                    <div class="shop-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                               
                                                <figure class="image"><img src="<?= base_url() ?>uploads/product/<?= $product_row['image'] ?>" alt="" style="height: 265px;"></figure>
                                                <h5>Rs <?= $product_row['price'] ?></h5>
                                            </div>
                                            <div class="lower-content">
                                                <h4><a href="<?= base_url('product/'.encryptId($product_row['id'])) ?>"><?= $product_row['name'] ?></a></h4>
                                             
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                             
                                </div>
                               
                            </div>
                         
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="service-sidebar">
                            <div class="category-widget">
                                <div class="widget-title">
                                    <h3>Other Sub Category</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix"> 
                                    <?php  
                                        foreach ($other as $othercate) { ?> 
                                        <li><a href="<?= base_url() ?>sub_category/<?= encryptId($othercate['id']) ?>" ><?= $othercate['sub_category']?><i class="flaticon-right-chevron"></i></a></li>
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
                </div>
            </div>
        </section>
        <?php include('includes/footer.php') ?>


        
</div>

<?php include('includes/footer-links.php') ?>

</body><!-- End of .page_wrapper -->

</html>

