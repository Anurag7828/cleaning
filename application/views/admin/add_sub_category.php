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
                            <h5 class="fw-semibold">Add New Sub Category</h5>

                        </div>
                        <div class="offcanvas-body">
                            <form action="" method="post"  enctype="multipart/form-data">
                                <div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="col-form-label">Heading</label>
                                                <input class="form-control" name="heading" type="text" value="<?= ($tag == 'edit' && isset($sub_category[0]['heading'])) ? htmlspecialchars($sub_category[0]['heading']) : '' ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="col-form-label">Sub Category</label>
                                                <input class="form-control" name="sub_category" type="text" value="<?= ($tag == 'edit' && isset($sub_category[0]['heading'])) ? htmlspecialchars($sub_category[0]['heading']) : '' ?>" required>
                                            </div>
                                        </div>                                       
                                    </div>                                
                                </div>

                                <div class="border-bottom mb-3">
                                    <div class="row">
                                    <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="image">Image</label>
                                                <input type="file" class="form-control" name="image" accept="image/png, image/gif, image/jpeg, image/jpg,image/Webp">
                                                <?php if ($tag == 'edit' && !empty($sub_category[0]['image'])): ?>
                                                    <div class="mt-2">
                                                        <img src="<?= base_url('uploads/sub_cat/' . $sub_category[0]['image']) ?>" alt="Uploaded Image" width="50">
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>


                                             <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="col-form-label">category <span class="text-danger">*</span></label>
                                                            <select class="select2 form-control" name="category" required>
                                                                <option value="" data-display="Please select">Please select</option>
                                                                <?php if (!empty($category)) : ?>
                                                                    <?php foreach ($category as $item) : ?>
                                                                        <option value="<?= htmlspecialchars($item['id']) ?>"
                                                                            <?= ($tag == 'edit' && isset($sub_category[0]['category']) && $sub_category[0]['category'] == $item['id']) ? 'selected' : '' ?>>
                                                                            <?= htmlspecialchars($item['name']) ?>
                                                                        </option>
                                                                    <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="col-form-label">Description<span class="text-danger"> *</span></label>
                                        <textarea class="form-control" name="description" rows="5"><?= ($tag == 'edit' && isset($sub_category[0]['description'])) ? htmlspecialchars($sub_category[0]['description']) : '' ?></textarea>
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