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
                            <h5 class="fw-semibold">Add New Product</h5>

                        </div>
                        <div class="offcanvas-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="col-form-label">Name</label>
                                                <input class="form-control" name="name" type="text" value="<?= ($tag == 'edit' && isset($row[0]['name'])) ? htmlspecialchars($row[0]['name']) : '' ?>" required>
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="col-form-label">Video Url</label>
                                                <input type="text" id="video_url" class="form-control" name="video_url"  value="<?= ($tag == 'edit' && isset($row[0]['video_url'])) ? htmlspecialchars($row[0]['video_url']) : '' ?>" required >
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <!-- Image Input -->

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="image">Image</label>
                                                <input type="file" class="form-control" name="image" accept="image/png, image/gif, image/jpeg, image/jpg">

                                                <?php if ($tag == 'edit' && !empty($row[0]['image'])): ?>
                                                    <div class="mt-2">
                                                        <img src="<?= base_url('uploads/product/' . $row[0]['image']) ?>" alt="Uploaded Image" width="50">
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="image">Image1</label>
                                                <input type="file" class="form-control" name="image1" accept="image/png, image/gif, image/jpeg, image/jpg">

                                                <?php if ($tag == 'edit' && !empty($row[0]['image1'])): ?>
                                                    <div class="mt-2">
                                                        <img src="<?= base_url('uploads/product/' . $row[0]['image1']) ?>" alt="Uploaded Image" width="50">
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="image">Image2</label>
                                                <input type="file" class="form-control" name="image2" accept="image/png, image/gif, image/jpeg, image/jpg">

                                                <?php if ($tag == 'edit' && !empty($row[0]['image2'])): ?>
                                                    <div class="mt-2">
                                                        <img src="<?= base_url('uploads/product/' . $row[0]['image2']) ?>" alt="Uploaded Image" width="50">
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
    <div class="mb-3">
        <label class="col-form-label">Pdf Brochure</label>
        <input type="file" id="brochure_pdf" class="form-control" name="brochure_pdf" accept="application/pdf">

        <?php if ($tag == 'edit' && !empty($row[0]['brochure_pdf'])): ?>
            <div class="mt-2">
                <a href="<?= base_url('uploads/brochures/' . $row[0]['brochure_pdf']) ?>" target="_blank">
                    View PDF
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>

                                        
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="col-form-label">category <span class="text-danger">*</span></label>
                                                            <select class="select2 form-control" name="category" required>
                                                                <option value="" data-display="Please select">Please select</option>
                                                                <?php if (!empty($category)) : ?>
                                                                    <?php foreach ($category as $item) : ?>
                                                                        <option value="<?= htmlspecialchars($item['id']) ?>"
                                                                            <?= ($tag == 'edit' && isset($row[0]['category']) && $row[0]['category'] == $item['id']) ? 'selected' : '' ?>>
                                                                            <?= htmlspecialchars($item['name']) ?>
                                                                        </option>
                                                                    <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="col-form-label">Sub category <span class="text-danger">*</span></label>
                                                            <select class="select2 form-control" name="sub_category" required>
                                                                <option value="" data-display="Please select">Please select</option>
                                                                <?php if (!empty($sub_category)) : ?>
                                                                    <?php foreach ($sub_category as $item) : ?>
                                                                        <option value="<?= htmlspecialchars($item['id']) ?>"
                                                                            <?= ($tag == 'edit' && isset($row[0]['sub_category']) && $row[0]['sub_category'] == $item['id']) ? 'selected' : '' ?>>
                                                                            <?= htmlspecialchars($item['sub_category']) ?>
                                                                        </option>
                                                                    <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="col-form-label">Description<span class="text-danger"> *</span></label>
                                            <textarea class="form-control" name="description" rows="5"><?= ($tag == 'edit' && isset($row[0]['description'])) ? htmlspecialchars($row[0]['description']) : '' ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="col-form-label">specification<span class="text-danger"> *</span></label>
                                            <textarea class="form-control" name="specification" rows="5"><?= ($tag == 'edit' && isset($row[0]['specification'])) ? htmlspecialchars($row[0]['specification']) : '' ?></textarea>
                                        </div>
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