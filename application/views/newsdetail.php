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
                    <h1>News Detail</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= base_url()?>">Home</a></li>
                        <li>News</li>
                        <li>News Detail</li>

                        
                    </ul>
                </div>
            </div>
        </section>
        <section class="project-details">
            <div class="auto-container">
            <div class="row clearfix">

            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="upper-box">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 title-column">
                            <div class="title-text">
                                <h2><?= $news[0]['heading']?></h2>
                                <br>
                                <h4>Date :- <?= date('d-m-Y', strtotime($news[0]['date'])) ?></h4>
<br>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 text-column">
                      
                   
                   <img src="<?= base_url() ?>uploads/news/<?= $news[0]['image'] ?>" alt="" style="height: 350px; width:100%;object-fit:cover;">
                  
                
          
                            
                        </div>
                    </div>
                </div>
                <div class="text">
                                <p><?= $news[0]['description']?></p>
                               
                            </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="default-sidebar blog-sidebar">
                        <div class="sidebar-widget category-widget">
                                <div class="widget-title">
                                    <h3>Other News</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix"> 
                                        <?php  foreach ($other as $other_news) { ?>
                                        <li><a href="<?= base_url('newsdetail/'.encryptId($other_news['id'])) ?>"><?= $other_news['heading']?></a></li>
                                        <?php } ?>
                                      
                                    </ul>
                                </div>
                            </div>
                        <div class="sidebar-widget post-widget">
                                <div class="widget-title">
                                    <h3>Latest Blog Post</h3>
                                </div>
                                <div class="post-inner">
                                <?php  foreach ($blog as $other_blog) { ?>
                                    <div class="post">
                                       
                                        <h4><a href="<?= base_url('blogdetail/'.encryptId($other_blog['id'])) ?>"><?= $other_blog['heading']?></a></h4>
                                        <h5><i class="fa-regular fa-calendar"></i><?= $other_blog['date']?></h5>
                                    </div>
                                    <?php } ?>
                                   
                                </div>
                            </div>
                            
                            
                          
                        </div>
                    </div>
               
            </div>
        </section>
        <!-- contact-info-section -->
      
        <?php include('includes/footer.php') ?>


        
</div>

<?php include('includes/footer-links.php') ?>

</body><!-- End of .page_wrapper -->

</html>

