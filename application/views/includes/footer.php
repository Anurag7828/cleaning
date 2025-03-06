<footer class="footer-style-three" style="background-image: url(<?= base_url()?>assets/images/background/footer-bg.jpg);">
            <div class="auto-container">
                <div class="widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="logo-widget footer-widget">
                                <figure class="footer-logo back-logo"><a href="<?= base_url()?>"><img src="<?= base_url()?>assets/img/logo.png" alt=""></a></figure>
                                <ul class="info-list clearfix">
                                    <li>
                                        <div class="icon-box"><i class="flaticon-pin"></i></div>
                                        <h5>Address</h5>
                                        <p>C-144, narmdapuram Rd, Vidya Nagar, Bhopal, Madhya Pradesh 462026</p>
                                    </li>
                                    <li>
                                        <div class="icon-box"><i class="flaticon-dial-pad"></i></div>
                                        <h5>Phone</h5>
                                        <p><a href="tel:91797 03389">(+91) 91797 03389</a></p>
                                    </li>
                                    <li>
                                        <div class="icon-box"><i class="flaticon-mail"></i></div>
                                        <h5>Email</h5>
                                        <p><a href="mailto:sales@continentalcleaning.in">sales@continentalcleaning.in</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="links-widget footer-widget">
                                <div class="widget-title">
                                    <h3>Company</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="<?= base_url()?>about">About</a></li>
                                        <li><a href="<?= base_url()?>career">Career</a></li>
                                        <li><a href="<?= base_url()?>delarship">Delarship Registration</a></li>
                                        <li><a href="<?= base_url()?>news">News</a></li>
                                        <li><a href="<?= base_url()?>blog">Blog</a></li>
                                        <li><a href="<?= base_url()?>contact">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="links-widget footer-widget">
                                <div class="widget-title">
                                    <h3>Our Category</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <?php
		$category_footer = $this->CommonModal->getAllRowsInOrderWithLimit('category','6', 'id', 'DESC');
                  foreach ($category_footer as $c_f) { ?>
                                        <li><a  href="<?= base_url('category/'.encryptId($c_f['id'])) ?>"><?= $c_f['name'] ?></a></li>
                                       <?php } ?>

                                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="download-widget footer-widget">
                                <div class="widget-content">
                                <div class="links-widget footer-widget">
                                <div class="widget-title">
                                    <h3>Useful Links</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="<?= base_url()?>view_terms">Term & Condition</a></li>
                                        <li><a href="<?= base_url()?>privacy_policy">Privacy policy</a></li>
                                        <li><a href="javascript:void(0);" class="search-box-outer search-toggler">Get A Quote</a></li>
                                      
                                    </ul>
                                </div>
                            </div>
                                    <div class="copyright">
                                        
                                    </div>
                                    <ul class="social-links clearfix">
                                        <li><a href="<?= base_url()?>"><i class="fa-brands fa-facebook"></i></a></li>
                                        <li><a href="<?= base_url()?>"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="<?= base_url()?>"><i class="fa-brands fa-youtube"></i></a></li>
                                        <li><a href="<?= base_url()?>"><i class="fa-brands fa-x-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="bottom-inner">
                        <ul class="footer-nav clearfix"> 
                            <li><a href="<?= base_url()?>admin" target="_blank">© <?= date('Y') ?> - Continental Cleaning & Safety Solutions - All Rights Reserved</a></li>
                            <li><a href="https://namami.co.in/" target="_blank">Developed By - Namami Software</a></li>
                        </ul>
                        <button class="scroll-top-two scroll-to-target" data-target="html">Back to Top <img src="<?= base_url()?>assets/images/icons/icon-9.png" alt=""></button>
                    </div>
                </div>
            </div>
        </footer>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<a href="https://api.whatsapp.com/send?phone=91797 03389&text=I have a query." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>