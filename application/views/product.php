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
                    <h1><?= $product[0]['name']?></h1>
                    
                </div>
            </div>
        </section>
        <section class="shop-details">
            <div class="auto-container">
                <div class="shop-details-content">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 carousel-column">
                            <div class="bxslider">
                            <div class="slider-content">
                                    <figure class="image-box"><a href="<?= base_url() ?>uploads/product/<?= $product[0]['image'] ?>" class="lightbox-image" data-fancybox="gallery"><img src="<?= base_url() ?>uploads/product/<?= $product[0]['image'] ?>" alt=""></a></figure>
                                    <div class="slider-pager">
                                        <ul class="thumb-box">
                                            <li>
                                                <a class="active" data-slide-index="0" href="#"><figure><img src="<?= base_url() ?>uploads/product/<?= $product[0]['image'] ?>" alt=""></figure></a>
                                            </li>
                                            <li>
                                                <a data-slide-index="1" href="#"><figure><img src="<?= base_url() ?>uploads/product/<?= $product[0]['image1'] ?>" alt=""></figure></a>
                                            </li>
                                            <li>
                                                <a data-slide-index="2" href="#"><figure><img src="<?= base_url() ?>uploads/product/<?= $product[0]['image2'] ?>" alt=""></figure></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="slider-content">
                                    <figure class="image-box"><a href="<?= base_url() ?>uploads/product/<?= $produc[0]['image1'] ?>" class="lightbox-image" data-fancybox="gallery"><img src="<?= base_url() ?>uploads/product/<?= $product[0]['image1'] ?>" alt=""></a></figure>
                                    <div class="slider-pager">
                                        <ul class="thumb-box">
                                        <li>
                                                <a class="active" data-slide-index="0" href="#"><figure><img src="<?= base_url() ?>uploads/product/<?= $product[0]['image'] ?>" alt=""></figure></a>
                                            </li>
                                            <li>
                                                <a data-slide-index="1" href="#"><figure><img src="<?= base_url() ?>uploads/product/<?= $product[0]['image1'] ?>" alt=""></figure></a>
                                            </li>
                                            <li>
                                                <a data-slide-index="2" href="#"><figure><img src="<?= base_url() ?>uploads/product/<?= $product[0]['image2'] ?>" alt=""></figure></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="slider-content">
                                    <figure class="image-box"><a href="<?= base_url() ?>uploads/product/<?= $produc[0]['image2'] ?>" class="lightbox-image" data-fancybox="gallery"><img src="<?= base_url() ?>uploads/product/<?= $product[0]['image2'] ?>" alt=""></a></figure>
                                    <div class="slider-pager">
                                        <ul class="thumb-box">
                                        <li>
                                                <a class="active" data-slide-index="0" href="#"><figure><img src="<?= base_url() ?>uploads/product/<?= $product[0]['image'] ?>" alt=""></figure></a>
                                            </li>
                                            <li>
                                                <a data-slide-index="1" href="#"><figure><img src="<?= base_url() ?>uploads/product/<?= $product[0]['image1'] ?>" alt=""></figure></a>
                                            </li>
                                            <li>
                                                <a data-slide-index="2" href="#"><figure><img src="<?= base_url() ?>uploads/product/<?= $product[0]['image2'] ?>" alt=""></figure></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                            <h3>RS <?= $product[0]['price']?></h3>
                                <h6>Category :- <?= $product[0]['category']?></h6>
                                <h6>Sub Category :- <?= $product[0]['sub_category']?></h6>
                                <p><?= $product[0]['description']?></p>
                                <section class="downloads-section">
            <div class="auto-container">
                <div class="row align-items-center">
                   
                    <div class="col-lg-12 col-md-12 col-sm-12 download-column mb-4">
                        <div class="download-inner">
                            <ul class="download-list clearfix">
                                <li>
                                   <a href="<?= base_url()?>uploads/brochures/<?=$product[0]['brochure_pdf'] ?>"><div class="icon-box"><i class="flaticon-pdf"></i></div>
                                    <button type="button">Brochure</button></a> 
                                </li>
                                <li>
                                <a href="<?=$product[0]['video_url'] ?>"> <div class="icon-box"><i class="flaticon-play-button"></i></div>
                                    <button type="button">Watch Video</button></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                                <div class="othre-options clearfix">
                                   
                                   
                                    <div class="cart-box">
                                        <button type="button" class="theme-btn btn-two">Whatapps</button>
                                    </div>
                                    <div class="cart-box">
                                        <button type="button" class="theme-btn btn-two">Request A Quotes</button>
                                    </div>
                                   
                                </div>
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
        </section>
        <section class="service-style-three service-page-2 bg-color-2 border-bottom sec-pad">
            <div class="auto-container">
            <div class="sec-title centred">
                    
                    <h2>Specification</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-three wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h6>Grinding</h6>
                                <div class="icon-box"><i class="flaticon-machinery"></i></div>
                                <h3><a href="service-details.html">Centerless Grinding</a></h3>
                                <p>Relief pitcher grass umpire dest forkball bullpen suicide squeeze club endures pains.</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-three wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h6>Cutting</h6>
                                <div class="icon-box"><i class="flaticon-laser"></i></div>
                                <h3><a href="service-details.html">Laser & Plasma</a></h3>
                                <p>A faith in simple dream an great insistence of defining moments take a trivial example.</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-three wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h6>Welding</h6>
                                <div class="icon-box"><i class="flaticon-tube-bending"></i></div>
                                <h3><a href="service-details.html">Metal & Tungsten</a></h3>
                                <p>Expound the actual teachings of the great explorers of the truth the master-builder.</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-three wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h6>Bending</h6>
                                <div class="icon-box"><i class="flaticon-tube-bending"></i></div>
                                <h3><a href="service-details.html">Three-Point Bending</a></h3>
                                <p>Expound the actual teachings of the great explorers of the truth the master-builder.</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-three wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h6>Assembly</h6>
                                <div class="icon-box"><i class="flaticon-picker"></i></div>
                                <h3><a href="service-details.html">Spot Weld Assembly</a></h3>
                                <p>Relief pitcher grass umpire dest forkball bullpen suicide squeeze club endures pains.</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-three wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h6>Production</h6>
                                <div class="icon-box"><i class="flaticon-industry"></i></div>
                                <h3><a href="service-details.html">Mass Production</a></h3>
                                <p>A faith in simple dream an great insistence of defining moments take a trivial example.</p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="case-section">
            <div class="auto-container">
                <div class="sec-title">
                    <span class="sub-title">Related Products</span>
                    <h2>Explore Our Related Product</h2>
                </div>
            </div>
            <div class="outer-container border-top">
                <div class="case-carousel owl-carousel owl-theme">
                    <div class="case-block-one">
                        <div class="inner-box">
                            <div class="upper-content">
                                <h5>Construction & Engineering</h5>
                            </div>
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/case/case-1.jpg" alt=""></figure>
                                <div class="view-btn"><a href="assets/images/case/case-1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                            </div>
                            <div class="lower-content centred">
                                <h3><a href="#">Pipeline System</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="case-block-one">
                        <div class="inner-box">
                            <div class="upper-content">
                                <h5>Technology</h5>
                            </div>
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/case/case-2.jpg" alt=" "></figure>
                                <div class="view-btn"><a href="assets/images/case/case-2.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                            </div>
                            <div class="lower-content centred">
                                <h3><a href="#">Sheet Metal Bending</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="case-block-one">
                        <div class="inner-box">
                            <div class="upper-content">
                                <h5>Mechanical</h5>
                            </div>
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/case/case-3.jpg" alt=""></figure>
                                <div class="view-btn"><a href="assets/images/case/case-3.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                            </div>
                            <div class="lower-content centred">
                                <h3><a href="#">Van Drilling Service</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="case-block-one">
                        <div class="inner-box">
                            <div class="upper-content">
                                <h5>Material, Mechanical</h5>
                            </div>
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/case/case-4.jpg" alt=""></figure>
                                <div class="view-btn"><a href="assets/images/case/case-4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                            </div>
                            <div class="lower-content centred">
                                <h3><a href="#">Steel Springs</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="case-block-one">
                        <div class="inner-box">
                            <div class="upper-content">
                                <h5>Construction & Engineering</h5>
                            </div>
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/case/case-1.jpg" alt=""></figure>
                                <div class="view-btn"><a href="assets/images/case/case-1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                            </div>
                            <div class="lower-content centred">
                                <h3><a href="#">Pipeline System</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="case-block-one">
                        <div class="inner-box">
                            <div class="upper-content">
                                <h5>Technology</h5>
                            </div>
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/case/case-2.jpg" alt=""></figure>
                                <div class="view-btn"><a href="assets/images/case/case-2.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                            </div>
                            <div class="lower-content centred">
                                <h3><a href="#">Sheet Metal Bending</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="case-block-one">
                        <div class="inner-box">
                            <div class="upper-content">
                                <h5>Mechanical</h5>
                            </div>
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/case/case-3.jpg" alt=""></figure>
                                <div class="view-btn"><a href="assets/images/case/case-3.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                            </div>
                            <div class="lower-content centred">
                                <h3><a href="#">Van Drilling Service</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="case-block-one">
                        <div class="inner-box">
                            <div class="upper-content">
                                <h5>Material, Mechanical</h5>
                            </div>
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/case/case-4.jpg" alt=""></figure>
                                <div class="view-btn"><a href="assets/images/case/case-4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                            </div>
                            <div class="lower-content centred">
                                <h3><a href="#">Steel Springs</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="case-block-one">
                        <div class="inner-box">
                            <div class="upper-content">
                                <h5>Construction & Engineering</h5>
                            </div>
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/case/case-1.jpg" alt=""></figure>
                                <div class="view-btn"><a href="assets/images/case/case-1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                            </div>
                            <div class="lower-content centred">
                                <h3><a href="#">Pipeline System</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="case-block-one">
                        <div class="inner-box">
                            <div class="upper-content">
                                <h5>Technology</h5>
                            </div>
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/case/case-2.jpg" alt=""></figure>
                                <div class="view-btn"><a href="assets/images/case/case-2.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                            </div>
                            <div class="lower-content centred">
                                <h3><a href="#">Sheet Metal Bending</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="case-block-one">
                        <div class="inner-box">
                            <div class="upper-content">
                                <h5>Mechanical</h5>
                            </div>
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/case/case-3.jpg" alt=""></figure>
                                <div class="view-btn"><a href="assets/images/case/case-3.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                            </div>
                            <div class="lower-content centred">
                                <h3><a href="#">Van Drilling Service</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="case-block-one">
                        <div class="inner-box">
                            <div class="upper-content">
                                <h5>Material, Mechanical</h5>
                            </div>
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/case/case-4.jpg" alt=""></figure>
                                <div class="view-btn"><a href="assets/images/case/case-4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                            </div>
                            <div class="lower-content centred">
                                <h3><a href="#">Steel Springs</a></h3>
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

