<!DOCTYPE html>
<html lang="en">


<head>

    <?php include('template/header-links.php') ?>

</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <?php include('template/header.php') ?>
        <?php include('template/sidebar.php') ?>

        <div class="page-wrapper">
            <div class="content">

                <div class="row  mb-3">
                    <div class="col-md-12">
                        <div class="offcanvas-header mb-3">
                            <h5 class="fw-semibold">Add New Video</h5>

                        </div>
                        <div class="offcanvas-body">
                            <form action="" method="post">
                                <div>
                                    <div class="row">
                                       
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="col-form-label">Video Url</label>
                                                <input class="form-control" name="url" type="text" placeholder="Enter video Url" value="<?= ($tag == 'edit' && isset($video[0]['url'])) ? htmlspecialchars($video[0]['url']) : '' ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                        

                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-end">

                                    <button type="submit" class="btn btn-primary">ADD</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <?php include('template/footer.php') ?>