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
                    <h1>News & Update</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>News</li>
                        
                    </ul>
                </div>
            </div>
        </section>
        <section class="pricing-section sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                <?php

$per_page = 6; // Number of blogs per page
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$start = ($page - 1) * $per_page;
$total_news = count($news);
$news_paged = array_slice($news, $start, $per_page);
if ($news_paged) {
    foreach ($news_paged as $row) {

        ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="pricing-table">
                                <div class="table-header">
                                    <h3><?= strip_tags(substr($row['heading'], 0, 10)); ?></h3>
                                   
                                </div>
                                <div class="table-content">
                                    <figure class="image-box"><img src="<?= base_url() ?>uploads/news/<?= $row['image'] ?>" alt="" style="height: 300px;"></figure>
                                 
                                    <ul class="feature-list clearfix">
                                    <p><?= strip_tags(substr($row['description'], 0, 30)); ?>...</p>

                                    </ul>
                                </div>
                                <div class="table-footer">
                                    <a href="<?= base_url('newsdetail/'.encryptId($row['id'])) ?>"><span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }
                    } ?>
                 
                </div>
                <?php
                $total_pages = ceil($total_news / $per_page);
                $current_page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
                ?>
                <div class="pagination-wrapper centred">
                    <ul class="pagination clearfix">
                        <?php if ($current_page > 1) { ?>
                            <li><a href="?page=<?= $current_page - 1 ?>"><i class="flaticon-left-chevron"></i></a></li>
                        <?php } ?>

                        <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
                            <li><a href="?page=<?= $i ?>"
                                    class="<?= ($current_page == $i) ? 'current' : '' ?>"><?= $i ?></a></li>
                        <?php } ?>

                        <?php if ($current_page < $total_pages) { ?>
                            <li><a href="?page=<?= $current_page + 1 ?>"><i class="flaticon-right-chevron"></i></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </section>
        <?php include('includes/footer.php') ?>


        
</div>

<?php include('includes/footer-links.php') ?>

</body><!-- End of .page_wrapper -->

</html>

