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
                            <h5 class="fw-semibold">Add New Category</h5>

                        </div>
                        <div class="offcanvas-body">
                            <form action="" method="post">
                                <div>
                                    <div class="row">
                                     
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="col-form-label">Name</label>
                                                <input class="form-control" name="name" type="text" value="<?= ($tag == 'edit' && isset($category[0]['name'])) ? htmlspecialchars($category[0]['name']) : '' ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="col-form-label">Description<span class="text-danger"> *</span></label>
                                                <textarea class="form-control editor" name="description" rows="5"><?= ($tag == 'edit' && isset($category[0]['description'])) ? htmlspecialchars($category[0]['description']) : '' ?></textarea>
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