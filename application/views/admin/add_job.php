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
                            <h5 class="fw-semibold">Add New Job</h5>

                        </div>
                        <div class="offcanvas-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div>
                                    <div class="row">
                                    <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="col-form-label">Title</label>
                                                <input type="text" id="title" class="form-control" name="title" value="<?= ($tag == 'edit' && isset($row[0]['title'])) ? htmlspecialchars($row[0]['title']) : '' ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="col-form-label">Company Name</label>
                                                <input class="form-control" name="company_name" type="text" value="<?= ($tag == 'edit' && isset($row[0]['company_name'])) ? htmlspecialchars($row[0]['company_name']) : '' ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="col-form-label">Company Email</label>
                                                <input class="form-control" name="company_email" type="text" value="<?= ($tag == 'edit' && isset($row[0]['company_email'])) ? htmlspecialchars($row[0]['company_email']) : '' ?>" required>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="col-form-label">Location</label>
                                                <input type="text"  class="form-control" name="location"value="<?= ($tag == 'edit' && isset($row[0]['location'])) ? htmlspecialchars($row[0]['location']) : '' ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="col-form-label">Opened Date</label>
                                                <input class="form-control" name="opened_date" type="date" value="<?= ($tag == 'edit' && isset($row[0]['opened_date'])) ? htmlspecialchars($row[0]['opened_date']) : '' ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="col-form-label">Last Date</label>
                                                <input class="form-control" name="last_date" type="date" value="<?= ($tag == 'edit' && isset($row[0]['last_date'])) ? htmlspecialchars($row[0]['last_date']) : '' ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="col-form-label">Required Experience (mention in year and month)</label>
                                                <input class="form-control" name="experience" type="text" value="<?= ($tag == 'edit' && isset($row[0]['experience'])) ? htmlspecialchars($row[0]['experience']) : '' ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="col-form-label">Description<span class="text-danger"> *</span></label>
                                            <textarea class="form-control editor" name="desc" rows="5"><?= ($tag == 'edit' && isset($row[0]['desc'])) ? htmlspecialchars($row[0]['desc']) : '' ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="col-form-label">Requirement<span class="text-danger"> *</span></label>
                                            <textarea class="form-control editor" name="requirement" rows="5"><?= ($tag == 'edit' && isset($row[0]['requirement'])) ? htmlspecialchars($row[0]['requirement']) : '' ?></textarea>
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