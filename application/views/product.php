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
                           <?php
                            $c = $this->CommonModal->getRowById('category','id',$product[0]['category']);
                            $s_c = $this->CommonModal->getRowById('sub_category','id',$product[0]['sub_category']);

                           ?>
                                <h6>Category :- <?= $c[0]['name']?></h6>
                                <h6>Sub Category :- <?= $s_c[0]['sub_category']?></h6>
                                <p><?= strip_tags(substr($product[0]['description'], 0, 820))?></p>
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
                                    <?php
$phone = '+919179703389';
$productUrl = base_url() . 'product/' . encryptId($product[0]['id']);
$message = urlencode("I have a query related to " . $productUrl); // Combine text and URL before encoding
$whatsappUrl = "https://api.whatsapp.com/send?phone=$phone&text=$message";
?>
<a href="<?= $whatsappUrl ?>" target="_blank" class="theme-btn btn-two">WhatsApp</a>
                                    </div>
                                    <div class="cart-box">
                                        <button type="button" class="theme-btn btn-two search-box-outer search-toggler">Request A Quotes</button>
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
               <?php
                $spec = $this->CommonModal->getRowById('specification','product_id',$product[0]['id']);
                foreach ($spec as $spec_info) {
                ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-three wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                             
                                <h3><a href="#"><?= $spec_info['title']?></a></h3>
                                <p><?= $spec_info['spec']?></p>
                               
                            </div>
                        </div>
                    </div>
                  <?php } ?>
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
                <?php
                $pro = $this->CommonModal->getRowById('product','category',$product[0]['category']);
                foreach ($pro as $pro_info) {
                ?>
                    <div class="case-block-one">
                        <div class="inner-box">
                          
                            <div class="image-box">
                                <figure class="image"><img src="<?= base_url() ?>uploads/product/<?= $pro_info['image'] ?>" alt="" style="height:300px"></figure>
                                <div class="view-btn"><a href="<?= base_url() ?>uploads/product/<?= $pro_info['image'] ?>" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a></div>
                            </div>
                            <div class="lower-content centred">
                                <h3><a href="<?= base_url('product/'.encryptId($pro_info['id'])) ?>"><?= $pro_info['name'] ?></a></h3>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                   
                </div>
            </div>
        </section>
        <?php include('includes/footer.php') ?>


        
</div>

<?php include('includes/footer-links.php') ?>

</body><!-- End of .page_wrapper -->

</html>

