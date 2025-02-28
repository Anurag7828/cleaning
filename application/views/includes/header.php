 <!-- preloader -->
  <style>
    .selectmenu{
        display: block !important;
    }
    .nice-select{
        display: none !important;
    }
  </style>
 <!-- <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="m" class="letters-loading">
                                m
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="c" class="letters-loading">
                                c
                            </span>
                            <span data-text-preloader="h" class="letters-loading">
                                h
                            </span>
                            <span data-text-preloader="i" class="letters-loading">
                                i
                            </span>
                            <span data-text-preloader="o" class="letters-loading">
                                o
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                                n
                            </span>
                        </div>
                    </div>  
                </div>
            </div>
        </div> -->
        <!-- preloader end -->


        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box clearfix">
                    <figure class="logo-box pull-left"><a href="<?= base_url() ?>"><img src="assets/imges/logo.png" alt=""></a></figure>
                    <div class="close-search pull-right"><i class="fa-solid fa-xmark"></i></div>
                </div>
                <div class="overlay-layer"></div>
                <section class="myaccount-section">
            <div class="auto-container">
                <div class="row clearfix">
                   
                    <div class="col-lg-12 col-md-12 col-sm-12 register-column">
                        <div class="register-content">
                            <h2>Request a Quote</h2>
                            <div class="form-inner">
                                <form action="<?= base_url('Home/contact')?>" method="post">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Full Name</label>
                                            <input type="text" name="name" required="">
                                        </div>
                                       
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Phone Num</label>
                                            <input type="text" name="contact" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>City</label>
                                            <input type="text" name="city" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Pincode</label>
                                            <input type="text" name="pincode" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
    <label>Select Country</label>
    <div class="select-box">
        <select class="selectmenu" id="countryDropdown" name="country">
        <option value="" disabled selected>Select Country</option>
            <option value="United States">United States</option>
            <option value="Canada">Canada</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="Australia">Australia</option>
            <option value="India" selected>India</option>
            <option value="Germany">Germany</option>
            <option value="France">France</option>
            <option value="Italy">Italy</option>
            <option value="Spain">Spain</option>
            <option value="Japan">Japan</option>
            <option value="China">China</option>
            <option value="Brazil">Brazil</option>
            <option value="South Africa">South Africa</option>
            <option value="Mexico">Mexico</option>
            <option value="Russia">Russia</option>
        </select>
    </div>
</div>





                                        
<div class="col-lg-6 col-md-6 col-sm-12 form-group">
    <label>Select Customer Type</label>
    <div class="select-box">
        <select class="selectmenu" id="countryDropdown" name="customer_type">
        <option value="" disabled selected>Select Customer Type</option>
            <option value="Existing Customer">Existing Customer</option>
            <option value="New Customer">New Customer</option>
            
        </select>
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 form-group">
    <label>Select Customer Segment</label>
    <div class="select-box">
        <select class="selectmenu" id="countryDropdown" name="customer_segment">
        <option value="" disabled selected>Select Customer Segment</option>
            <option value="Residential">Residential</option>
            <option value="Corporate">Corporate</option>
            
        </select>
    </div>
</div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Message</label>
                                            <textarea name="message" ></textarea>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group message-btn">
                                            <button type="submit" class="theme-btn btn-two">Submit</button>
                                        </div>
                                       
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            </div>
        </div>


        <!-- main header -->
        <header class="main-header">
            <!-- header-top -->
            <div class="header-top">
                <div class="outer-container">
                    <ul class="social-links clearfix">
                        <li><h5>Social Connect</h5></li>
                        <li><a href="<?= base_url() ?>"><i class="fa-brands fa-facebook"></i></a></li>
                      
                        <li><a href="<?= base_url() ?>"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="<?= base_url() ?>"><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a href="<?= base_url() ?>"><i class=" fa fa-phone"></i></a></li>
                        <li><a href="<?= base_url() ?>"><i class="fa-solid fa-envelope"></i></a></li>

                    </ul>
                    <div class="text">
                        <h5> CIN - U36999TZ1992PLC0036782</h5>
                    </div>
                    <ul class="links-list clearfix">
                        <li><a href="<?= base_url() ?>news">News & Media</a></li>
                        <li><a href="<?= base_url() ?>delarship">Dealership Registration</a></li>
                       
                        <li><a href="<?= base_url() ?>career">Career</a></li>
                    </ul>
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="outer-container">
                    <div class="outer-box">
                        <div class="menu-left-content">
                            <figure class="logo-box"><a href="<?= base_url() ?>"><img src="assets/imges/logo.png" alt=""></a></figure>
                         
                        </div>
                        <div class="menu-area clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class=""><a href="<?= base_url() ?>">Home</a>  </li>  
                                        <li class=""><a href="<?= base_url() ?>about">About</a>  </li>  

                                        <li class="dropdown"><a href="<?= base_url() ?>">Products</a>
                                            <ul>
                                               
                                                <li class="dropdown"><a href="<?= base_url() ?>category">Ride On Scrubber Dryer</a>
                                                    <ul>
                                                        <li ><a href="<?= base_url()?>sub_category">Charnock Twintec Cable Scrubber Drier</a></li>
                                                        <li><a href="<?= base_url()?>product">Charnock Twintec Cable Scrubber Drier</a></li>

                                                      
                                                    </ul>
                                                </li>
                                               
                                            </ul>
                                        </li>
                                        <li><a href="<?= base_url()?>video">Video Gallery</a></li>

                                        <li><a href="<?= base_url()?>blog">Blog</a></li>
                                        
                                        <li><a href="<?= base_url()?>contact">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-right-content">
                           
                            <div class="btn-box">
                                <div class="icon-box"><i class="flaticon-estimation"></i></div>
                                <a href="javascript:void(0);" class="search-box-outer search-toggler">Get a quote<i class="flaticon-right-chevron"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-container">
                    <div class="outer-box">
                        <div class="menu-left-content">
                            <figure class="logo-box"><a href="<?= base_url() ?>"><img src="assets/imges/logo.png" alt=""></a></figure>
                            
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="menu-right-content">
                           
                            <div class="btn-box">
                                <div class="icon-box"><i class="flaticon-estimation"></i></div>
                                <a  href="javascript:void(0);" class="search-box-outer search-toggler">Get a quote<i class="flaticon-right-chevron"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="<?= base_url() ?>"><img src="assets/imges/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>C-144, narmdapuram Rd, Vidya Nagar, Bhopal, Madhya Pradesh 462026</li>
                        <li><a href="tel:+8801682648101">+91 91797 03389</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                       
                        <li><a href="<?= base_url() ?>"><span class="fab fa-facebook-square"></span></a></li>
                 
                        <li><a href="<?= base_url() ?>"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="<?= base_url() ?>"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->
