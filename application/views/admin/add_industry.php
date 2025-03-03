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
                            <h5 class="fw-semibold">Add New Industry Service Area</h5>

                        </div>
                        <div class="offcanvas-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="col-form-label">Industry Name</label>
                                                <input class="form-control" name="name" type="text" value="<?= ($tag == 'edit' && isset($row[0]['name'])) ? htmlspecialchars($row[0]['name']) : '' ?>" required>
                                            </div>
                                        </div>
                                        

                                    

                                        <!-- Image Input -->

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="image">Image</label>
                                                <input type="file" class="form-control" name="image" accept="image/png, image/gif, image/jpeg, image/jpg">

                                                <?php if ($tag == 'edit' && !empty($row[0]['image'])): ?>
                                                    <div class="mt-2">
                                                        <img src="<?= base_url('uploads/blog/' . $row[0]['image']) ?>" alt="Uploaded Image" width="50">
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="col-form-label">Description<span class="text-danger"> *</span></label>
                                            <textarea class="form-control editor" name="desc" rows="5"><?= ($tag == 'edit' && isset($row[0]['desc'])) ? htmlspecialchars($row[0]['desc']) : '' ?></textarea>
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