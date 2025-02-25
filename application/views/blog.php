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
            <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="line-box">
                <div class="line-1"></div>
                <div class="line-2"></div>
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Our Blog</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= base_url()?>">Home</a></li>
                        <li>Blog</li>
                        
                    </ul>
                </div>
            </div>
        </section>
        <section class="blog-grid">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="assets/images/news/news-1.jpg" alt=""></figure>
                                   
                                    <div class="view-btn"><a href="assets/images/news/news-1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                </div>
                                <div class="lower-content">
                                    <ul class="post-info clearfix">
                                        <li><i class="fa-regular fa-calendar"></i>14.10.2022</li>
                                        <li><i class="fa-regular fa-user"></i><a href="<?= base_url()?>blogdetail">Lillian Grace</a></li>
                                    </ul>
                                    <h3><a href="<?= base_url()?>blogdetail">Industry’s Imperatives For Sustainability in...</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="assets/images/news/news-2.jpg" alt=""></figure>
                                 
                                    <div class="view-btn"><a href="assets/images/news/news-2.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                </div>
                                <div class="lower-content">
                                    <ul class="post-info clearfix">
                                        <li><i class="fa-regular fa-calendar"></i>28.09.2022</li>
                                        <li><i class="fa-regular fa-user"></i><a href="<?= base_url()?>blogdetail">Oliver Jack</a></li>
                                    </ul>
                                    <h3><a href="<?= base_url()?>blogdetail">Digital Manufacturing Week 2020 – Leading the Way</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="assets/images/news/news-3.jpg" alt=""></figure>
                                 
                                    <div class="view-btn"><a href="assets/images/news/news-3.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                                </div>
                                <div class="lower-content">
                                    <ul class="post-info clearfix">
                                        <li><i class="fa-regular fa-calendar"></i>06.09.2022</li>
                                        <li><i class="fa-regular fa-user"></i><a href="<?= base_url()?>blogdetail">Jacob Harry</a></li>
                                    </ul>
                                    <h3><a href="<?= base_url()?>blogdetail">Building Back a Sustainable Manufacturing Sector</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="pagination-wrapper centred">
                    <ul class="pagination clearfix">
                        <li><a href="<?= base_url()?>"><i class="flaticon-left-chevron"></i></a></li>
                        <li><a href="<?= base_url()?>" class="current">1</a></li>
                        <li><a href="<?= base_url()?>">2</a></li>
                        <li><a href="<?= base_url()?>"><i class="flaticon-right-chevron"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <?php include('includes/footer.php') ?>


        
</div>

<?php include('includes/footer-links.php') ?>

</body><!-- End of .page_wrapper -->

</html>

