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
                            <h5 class="fw-semibold">Add New Testimonials</h5>

                        </div>
                        <div class="offcanvas-body">
                            <form action="" method="post">
                                <div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="col-form-label">Name</label>
                                                <input class="form-control" name="name" type="text" value="<?= ($tag == 'edit' && isset($testimonials[0]['name'])) ? htmlspecialchars($testimonials[0]['name']) : '' ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="col-form-label">Contact</label>
                                                <input class="form-control" name="contact" type="text" value="<?= ($tag == 'edit' && isset($testimonials[0]['contact'])) ? htmlspecialchars($testimonials[0]['contact']) : '' ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="col-form-label">Email</label>
                                                <input class="form-control" name="email" type="text" value="<?= ($tag == 'edit' && isset($testimonials[0]['email'])) ? htmlspecialchars($testimonials[0]['email']) : '' ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="col-form-label">Feedback<span class="text-danger"> *</span></label>
                                                <textarea class="form-control" name="feedback" rows="5"><?= ($tag == 'edit' && isset($testimonials[0]['feedback'])) ? htmlspecialchars($testimonials[0]['feedback']) : '' ?></textarea>
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