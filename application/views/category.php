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
                    <h1><?= $categoryById[0]['name']?></h1>
                   
                </div>
            </div>
        </section>
        <section class="service-details industries-details">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="service-details-content">
                            <div class="content-one">
                                
                                <div class="text">
                                    <h4><?= $categoryById[0]['heading']?></h4>
                                    <p><?= $categoryById[0]['description']?></p>
                                  
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="service-sidebar">
                            <div class="category-widget">
                                <div class="widget-title">
                                    <h3>Other Category</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">
                                    <?php  
                                        foreach ($other as $othercate) { ?> 
                                        <li><a href="<?= base_url('category/'.encryptId($othercate['id'])) ?>"><?= $othercate['name']?><i class="flaticon-right-chevron"></i></a></li>
                                       <?php } ?>
                                    </ul>
                                </div>
                            </div>
                      
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                        <div class="service-details-content">
                          
                            <div class="content-two">
                               
                                <div class="row clearfix">
                                <?php  
                                        foreach ($sub_category as $sub_category_row) { ?> 
                                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
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

