<!DOCTYPE html>
<html lang="en">

<head>
<?php include('includes/header-links.php') ?>

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


    <?php include('includes/header.php') ?>

        <section class="sidebar-page-container blog-details">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="blog-details-content">
                            <span class="big-text">to your success read our blog</span>
                            <div class="content-one">
                                <div class="upper-box">
                                    <div class="title-box">
                                      
                                      
                                        <h2><?= $blog[0]['heading']?></h2>
                                    </div>
                                    <ul class="post-info clearfix">
                                        <li><i class="fa-regular fa-calendar"></i><?= date("d M Y", strtotime($blog[0]['date'])) ?></li>
                                        <li><i class="fa-regular fa-user"></i><a href="#"><?= $blog[0]['add_by']?></a></li>
                                     
                                    </ul>
                                </div>
                                <figure class="image-box"><img src="<?= base_url() ?>uploads/blog/<?= $blog[0]['image'] ?>" alt="" style="height: 425px;"></figure>
                                <div class="text">
                                    <p><?= $blog[0]['description']?></p>
                                    
                                </div>
                            </div>
                           
                            <div class="post-nav">
                               
                                <div class="btn-box">
                                    <a href="<?= base_url()?>blog"><span>Back to Blog Post</span></a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="default-sidebar blog-sidebar">
                        <div class="sidebar-widget post-widget">
                                <div class="widget-title">
                                    <h3>Other Blog Post</h3>
                                </div>
                                <div class="post-inner">
                                    <?php
                                foreach ($other as $row) {

?>
                                    <div class="post">
                                       
                                        <h4><a href="#"><?= $row['heading']?></a></h4>
                                        <h5><i class="fa-regular fa-calendar"></i><?= date("d M Y", strtotime($row['date'])) ?></h5>
                                    </div>
                                    <?php } ?>
                                    
                                </div>
                            </div>
                            <div class="sidebar-widget category-widget">
                                <div class="widget-title">
                                    <h3>Latest News</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix"> 
                                        <li><a href="#">All Post<span>30</span></a></li>
                                        <li><a href="#">Innovations<span>03</span></a></li>
                                        <li><a href="#">Manufacturing<span>05</span></a></li>
                                        <li><a href="#">Materials<span>10</span></a></li>
                                        <li><a href="#">Smart Factory<span>08</span></a></li>
                                        <li><a href="#">Technology<span>04</span></a></li>
                                    </ul>
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

