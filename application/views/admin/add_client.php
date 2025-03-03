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
                            <h5 class="fw-semibold">Add Client</h5>

                        </div>
                        <div class="offcanvas-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="col-form-label">Link</label>
                                                <input class="form-control" name="link" type="text" value="<?= ($tag == 'edit' && isset($row[0]['link'])) ? htmlspecialchars($row[0]['link']) : '' ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="image">Image</label>
                                                <input type="file" class="form-control" name="image" accept="image/png, image/gif, image/jpeg, image/jpg">

                                                <?php if ($tag == 'edit' && !empty($row[0]['image'])): ?>
                                                    <div class="mt-2">
                                                        <img src="<?= base_url('uploads/news/' . $row[0]['image']) ?>" alt="Uploaded Image" width="50">
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                             
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-end">

                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>



    </div>

    <?php include('template/footer.php') ?>