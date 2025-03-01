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
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li>Blog</li>

                    </ul>
                </div>
            </div>
        </section>
        <section class="blog-grid">
            <div class="auto-container">
                <div class="row clearfix">
                    <?php

                    $per_page = 6; // Number of blogs per page
                    $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
                    $start = ($page - 1) * $per_page;
                    $total_blogs = count($blog);
                    $blog_paged = array_slice($blog, $start, $per_page);
                    if ($blog_paged) {
                        foreach ($blog_paged as $row) {

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
                <?php
                $total_pages = ceil($total_blogs / $per_page);
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