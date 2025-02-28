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
                    <h1>Video Gallery</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Video Gallery</li>
                        
                    </ul>
                </div>
            </div>
        </section>
        <section class="pricing-section mb-4">
            <div class="auto-container">
                <div class="row clearfix">
                <?php

$per_page = 6; // Number of blogs per page
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$start = ($page - 1) * $per_page;
$total_videos = count($video);
$video_paged = array_slice($video, $start, $per_page);
if ($video_paged) {
    foreach ($video_paged as $row) {

        $data = $row['url'];
        // Check if the link contains "youtu.be" format
        if (strpos($data, 'youtu.be') !== false) {
            // Extract video ID from the link
            $video_id = substr($data, strrpos($data, '/') + 1);
            $final = 'https://www.youtube.com/embed/' . $video_id;
        } else {
            // Replace "watch?v=" with "embed/" in the link
            $final = str_replace('watch?v=', 'embed/', $data);
        }

?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                    <iframe src="<?php echo $final; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                    </iframe>
                    </div>
                    <?php } } ?>
                   
                </div>
                <?php
                $total_pages = ceil($total_videos / $per_page);
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

