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
                            <h5 class="fw-semibold">ADD</h5>
                        </div>

                        <div class="offcanvas-body">
                            <form action="" method="post" class="d-flex flex-column align-items-center">

                            <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="col-form-label">category <span class="text-danger">*</span></label>
                                                            <select class="select2 form-control" name="category_id" required>
                                                                <option value="" data-display="Please select">Please select</option>
                                                                <?php if (!empty($category)) : ?>
                                                                    <?php foreach ($category as $item) : ?>
                                                                        <option value="<?= htmlspecialchars($item['id']) ?>"
                                                                            <?= ($tag == 'edit' && isset($service_category[0]['category_id']) && $service_category[0]['category_id'] == $item['id']) ? 'selected' : '' ?>>
                                                                            <?= htmlspecialchars($item['name']) ?>
                                                                        </option>
                                                                    <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                <input type="hidden" name="service_id" value="<?= ($tag == 'edit' && isset($service_category[0]['service_id'])) ? htmlspecialchars($service_category[0]['service_id']) : $service['0']['id'] ?>">

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
