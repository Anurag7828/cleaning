<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('template/header-links.php') ?>
</head>
<body>

    <div class="main-wrapper">
        <?php include('template/header.php') ?>
        <?php include('template/sidebar.php') ?>

        <div class="page-wrapper">
            <div class="content">

                <div class="row mb-3 justify-content-center">
                    <div class="col-md-6">
                        <div class="offcanvas-header mb-3 text-center">
                            <h5 class="fw-semibold">Add Specification</h5>
                        </div>

                        <div class="offcanvas-body">
                            <form action="" method="post" class="d-flex flex-column align-items-center">

                                <div class="mb-3 w-100">
                                    <label class="col-form-label">Title</label>
                                    <input class="form-control" name="title" type="text" 
                                           value="<?= ($tag == 'edit' && isset($specification[0]['title'])) ? htmlspecialchars($specification[0]['title']) : '' ?>" required>
                                </div>

                                <div class="mb-3 w-100">
                                    <label class="col-form-label">Specification</label>
                                    <input class="form-control" name="spec" type="text" 
                                           value="<?= ($tag == 'edit' && isset($specification[0]['spec'])) ? htmlspecialchars($specification[0]['spec']) : '' ?>" required>
                                </div>

                                <input type="hidden" name="product_id" value="<?= ($tag == 'edit' && isset($specification[0]['product_id'])) ? htmlspecialchars($specification[0]['product_id']) : $product['0']['id'] ?>">

                                <button type="submit" class="btn btn-primary mt-2">Create</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include('template/footer.php') ?>
</body>
</html>
