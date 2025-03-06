<!DOCTYPE html>
<html lang="en">

<head>
<?php include('includes/header-links.php') ?>

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


    <?php include('includes/header.php') ?>

        <!-- banner-section -->
        <section class="banner-section">
    <div class="line-box">
        <div class="line-1"></div>
        <div class="line-2"></div>
    </div>
    <div class="banner-carousel owl-theme owl-carousel">
        <?php if (!empty($slider)) : ?>
            <?php foreach ($slider as $slide) : ?>
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url(<?= base_url('uploads/slider/' . $slide['image']) ?>)"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h2>
                                <span><?= $slide['heading'] ?></span>
                               
                            </h2>
                        </div> 
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>

        <!-- banner-section end -->


        <!-- about-section -->
        <section class="about-style-two">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box">
                            <figure class="image image-1"><img src="assets/img/about-1.png" alt=""></figure>
                     
                           
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class=" sec-pad">
                            <div class="about-carousel owl-carousel owl-theme owl-dots-none">
                                <div class="content-box">
                                    <div class="sec-title">
                                        <span class="sub-title">About Us</span>
                                        <h2>Continental Cleaning And Safety Solutions
</h2>
                                    </div>
                                    
                                    <div class="text">
                                        <p>Continental Cleaning And Safety Solutions - Retail Trader Of Ride On Scrubber Dryer, Scrubber Drier And Walk Behind Scrubber Dryer Since 2020 In Bhopal, Madhya Pradesh.</p>
                                  
                                        <a href="<?= base_url()?>about" class="theme-btn btn-two"><span>More Details</span></a>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->

        <section class="funfact-section bg-color-1">
            <span class="big-text">CCASS</span>
            <div class="outer-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-engineer"></i></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="3500">0</span><span>+</span>
                                </div>
                                <div class="text">
                                    <h3>Satisfied customers</h3>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-engineer"></i></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="32">0</span><span>+</span>
                                </div>
                                <div class="text">
                                    <h3>Serving countries</h3>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-engineer"></i></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="10">0</span><span>+</span>
                                </div>
                                <div class="text">
                                    <h3>Experienced employees</h3>
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-engineer"></i></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="20">0</span><span>+</span>
                                </div>
                                <div class="text">
                                    <h3>Years of Supporting a cleaner nation</h3>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class=" video-section team-section">
        <div class="bg-layer" style="background-image: url(assets/images/background/video-bg.jpg);"></div>
            <div class="auto-container">
                <div class="cate-box">
                <div class="tabs-box">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-12 col-sm-12 btn-column">
                            <div class="tab-btn-box">
                                <ul class="tab-btns tab-buttons clearfix">
                                <?php $i=0;
                                 if ($categorylimit) {
                        foreach ($categorylimit as $c_info) {
$i++;
                            ?>
                                    <li class="tab-btn <?= ($i == '1' ) ? 'active-btn' : '' ?>" data-tab="#tab-<?= $c_info['id']?>"><?= $c_info['name']?></li>
                                    <?php } } ?>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-12 col-sm-12 content-column">
                            <div class="tabs-content">
                            <?php $i=0;
                                 if ($categorylimit) {
                        foreach ($categorylimit as $c_info) {
$i++;
                            ?>
                                <div class="tab <?= ($i == '1' ) ? 'active-tab' : '' ?>" id="tab-<?= $c_info['id']?>">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-6 col-sm-12 team-block">
                                        <div class="service-details-content">
                            <div class="content-one">
                               
                                <div class="image-box">
                                    <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
	
        <?php 
        	$sub_caat = $this->CommonModal->getRowById('sub_category','category', $c_info['id']);
            foreach ($sub_caat as $sc_info) {?>
                                        <figure class="image"> <h2><?= $sc_info['sub_category'] ?></h2><img src="<?= base_url() ?>uploads/sub_cat/<?= $sc_info['image'] ?>" alt="" style="height: 350px; object-fit: contain;"></figure>
                                        <?php }?>
                                     
                                        
                                    </div>
                                </div>
                               
                            </div></div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <?php } } ?>
                               
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <section class="case-section">
            <div class="auto-container">
                <div class="sec-title">
                    <span class="sub-title">Our Products</span>
                    <h2>Explore Our New Product</h2>
                </div>
            </div>
            <div class="outer-container border-top">
                <div class="case-carousel owl-carousel owl-theme">
                <?php if ($product) {
                        foreach ($product as $prod_info) {

                            ?>
                    <div class="case-block-one">
                        <div class="inner-box">
                        <div class="upper-content">
                        <h5>
                                    <?php       $c = $this->CommonModal->getRowById('category','id',$prod_info['category']);?>
                                    <?= $c[0]['name']?></h5>
                            </div>
                            <div class="image-box">
                                <figure class="image"><img src="<?= base_url() ?>uploads/product/<?= $prod_info['image'] ?>" alt="" style="height:300px"></figure>
                                <div class="view-btn"><a href="<?= base_url() ?>uploads/product/<?= $prod_info['image'] ?>"  class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                            </div>
                            <div class="lower-content centred">
                                <h3><a href="<?= base_url('product/'.encryptId($prod_info['id'])) ?>"><?= $prod_info['name'] ?></a></h3>
                            </div>
                        </div>
                    </div>
                    <?php } }?>
                    
                </div>
            </div>
        </section>
        <section class="news-style-two bg-color-2 border-top border-bottom">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title">
                                <span class="sub-title">News & Updates</span>
                                <h2>Find the Latest News</h2>
                                <div class="link"><a href="<?= base_url()?>news"><span>View All News</span></a></div>
                            </div>
                          
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                        <div class="inner-content">
                            <div class="bxslider">
                           <?php foreach ($news as $news_info) {

                            ?>
                                <div class="slider-content">
                                    <div class="news-block-two">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><a href="<?= base_url('newsdetail/'.encryptId($news_info['id'])) ?>"><img src="<?= base_url() ?>uploads/news/<?= $news_info['image'] ?>" alt=""></a></figure>
                                               
                                            </div>
                                            <div class="content-box">
                                                <ul class="post-info clearfix">
                                                    <li><i class="fa-regular fa-calendar"></i><?= date('d-m-Y', strtotime($news_info['date'])) ?></li>
                                                  
                                                </ul>
                                                <h3><a href="<?= base_url('newsdetail/'.encryptId($news_info['id'])) ?>"><?= $news_info['heading']?></a></h3>
                                                <div class="link">
                                                    <a href="<?= base_url('newsdetail/'.encryptId($news_info['id'])) ?>"><span>Read More</span></a>
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
        </section>
   
        <section class="industry-section">
            <div class="industry-tab">
            <section class="news-section pt-5">
                <div class="tabs-box">
                <div class="upper-box2">
                <div class="auto-container">
                <div class="tab-btn-box">
                            <ul class="tab-btns tab-buttons clearfix">
                            <div class="sec-title">
                            <span class="sub-title">Serving Area</span>
                            <h2>Industries We Serve</h2>
                        </div>
                            </ul>
                           
                        </div>
                        </div>
                        </div>
                        </div>
                        </section>
                <div class="auto-container">
                

                    <div class="p-tabs-content">
                        <div class="p-tab active-tab" >
                            <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
                            <?php
                                      
                                      foreach ($indusrty as $industry_info) {
              
                                          ?>
                                <div class="content-inner">
                                    <div class="row clearfix">
                                 
                                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                            <div class="content-box">
                                                <div class="sec-title">
                                                    <span class="sub-title">Industry</span>
                                                    <h2><?= $industry_info['name']?></h2>
                                                </div>
                                                <div class="inner-box">
                                                  
                                                    <p><?= $industry_info['desc']?></p>
                                                   
                                                   
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                            <div class="image-box">
                                                <figure class="image"><img src="<?= base_url() ?>uploads/blog/<?= $industry_info['image'] ?>" alt="" style="height:400px"></figure>
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
        </section>
       


        <!-- clients-section -->
        <section class="clients-section bg-color-1">
            <div class="auto-container">
                <div class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                <?php if ($client) {
                        foreach ($client as $client_info) {

                            ?>
                    <figure class="clients-logo"><a href="<?= $client_info['link']?>" target="_blank"><img src="<?= base_url() ?>uploads/client/<?= $client_info['image'] ?>" style="height:90px" ></a></figure>
                    <?php } } ?>
                 
                </div>
            </div>
        </section>
   
        <section class="news-section sec-pad">
            <div class="tabs-box">
                <div class="upper-box">
                    <div class="auto-container">
                        
                        <div class="tab-btn-box">
                            <ul class="tab-btns tab-buttons clearfix">
                            <div class="sec-title">
                            <span class="sub-title">Blog</span>
                            <h2>Latest From Our Blog</h2>
                        </div>
                            </ul>
                            <div class="btn-box">
                                <a href="#"><span>View All Post</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabs-content">
                    <div class="auto-container">
                        <div class="tab active-tab" >
                            <div class="row clearfix">
                           <?php if ($blog) {
                        foreach ($blog as $row) {

                            ?>
                            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                                <div class="news-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="<?= base_url() ?>uploads/blog/<?= $row['image'] ?>"
                                                    alt="" style="height: 325px;"></figure>

                                            <div class="view-btn"><a href="<?= base_url() ?>uploads/blog/<?= $row['image'] ?>"
                                                    class="lightbox-image" data-fancybox="gallery"><i
                                                        class="flaticon-zoom-in"></i></a></div>
                                        </div>
                                        <div class="lower-content">
                                            <ul class="post-info clearfix">
                                                <li><i class="fa-regular fa-calendar"></i>
                                                    <?= date("d M Y", strtotime($row['date'])) ?></li>
                                                <li><i class="fa-regular fa-user"></i><a
                                                        href="<?= base_url('blogdetail/'.encryptId($row['id'])) ?>"><?= $row['add_by'] ?></a></li>
                                            </ul>
                                            <h3><a href="<?= base_url('blogdetail/'.encryptId($row['id'])) ?>"><?= $row['heading'] ?></a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } ?>
                                
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </section>
        <!-- news-section end -->
        <?php include('includes/footer.php') ?>


        
    </div>

    <?php include('includes/footer-links.php') ?>

</body><!-- End of .page_wrapper -->

</html>
