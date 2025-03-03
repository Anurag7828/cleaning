<footer class="footer-style-three" style="background-image: url(assets/images/background/footer-bg.jpg);">
            <div class="auto-container">
                <div class="widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="logo-widget footer-widget">
                                <figure class="footer-logo"><a href="<?= base_url()?>"><img src="assets/img/logo.png" alt=""></a></figure>
                                <ul class="info-list clearfix">
                                    <li>
                                        <div class="icon-box"><i class="flaticon-pin"></i></div>
                                        <h5>Address</h5>
                                        <p>C-144, narmdapuram Rd, Vidya Nagar, Bhopal, Madhya Pradesh 462026</p>
                                    </li>
                                    <li>
                                        <div class="icon-box"><i class="flaticon-dial-pad"></i></div>
                                        <h5>Phone</h5>
                                        <p><a href="tel:6132456789">(+91) 91797 03389</a></p>
                                    </li>
                                    <li>
                                        <div class="icon-box"><i class="flaticon-mail"></i></div>
                                        <h5>Email</h5>
                                        <p><a href="mailto:enquiry@example.com">info@example.com</a></p>
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
                                        <li><a href="<?= base_url()?>">Term & Condition</a></li>
                                        <li><a href="<?= base_url()?>">Privacy policy</a></li>
                                        <li><a href="<?= base_url()?>">Get A Quote</a></li>
                                      
                                    </ul>
                                </div>
                            </div>
                                    <div class="copyright">
                                        
                                    </div>
                                    <ul class="social-links clearfix">
                                        <li><a href="<?= base_url()?>"><i class="fa-brands fa-facebook"></i></a></li>
                                        <li><a href="<?= base_url()?>"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="<?= base_url()?>"><i class="fa-solid fa-basketball"></i></a></li>
                                        <li><a href="<?= base_url()?>"><i class="fa-brands fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="bottom-inner">
                        <ul class="footer-nav clearfix"> 
                            <li><a href="<?= base_url()?>">© <?= date('Y') ?> - Continental Cleaning & Safety Solutions - All Rights Reserved</a></li>
                            <li><a href="<?= base_url()?>">Developed By - Namami Software</a></li>
                        </ul>
                        <button class="scroll-top-two scroll-to-target" data-target="html">Back to Top <img src="assets/images/icons/icon-9.png" alt=""></button>
                    </div>
                </div>
            </div>
        </footer>