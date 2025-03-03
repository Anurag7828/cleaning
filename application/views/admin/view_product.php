<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('template/header-links.php'); ?>
</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <?php include('template/header.php'); ?>
        <?php include('template/sidebar.php'); ?>

        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="page-title">View Products</h4>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="head-icons">
                                        <a href="companies.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Refresh"><i class="ti ti-refresh-dot"></i></a>
                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Collapse" id="collapse-header"><i class="ti ti-chevrons-up"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-sm-4">
                                        <div class="icon-form mb-3 mb-sm-0">
                                            <span class="form-icon"><i class="ti ti-search"></i></span>
                                            <input type="text" class="form-control" id="searchInput" placeholder="Search here...">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex align-items-center flex-wrap row-gap-2 justify-content-sm-end">
                                            <div class="dropdown me-2">
                                                <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown">
                                                    <i class="ti ti-package-export me-2"></i>Export
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);" id="exportPdf" class="dropdown-item">
                                                                <i class="ti ti-file-type-pdf text-danger me-1"></i>Export as PDF
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" id="exportExcel" class="dropdown-item">
                                                                <i class="ti ti-file-type-xls text-green me-1"></i>Export as Excel
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <a href="<?= base_url('admin_Dashboard/add_product') ?>" class="btn btn-primary">
                                                <i class="ti ti-square-rounded-plus me-2"></i>Add Product
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <?php if ($msg = sessionId('msg')) : ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="alert <?= sessionId('msg_class'); ?>"><?= $msg; ?></div>
                                        </div>
                                    </div>
                                    <?php $this->session->unset_userdata('msg'); ?>
                                <?php endif; ?>

                                <!-- Contact List -->
                                <div class="table-responsive custom-table" id="dataList">
                                    <table class="table datatable">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>S No</th>
                                                <th>Name</th>
                                                <th>1st Image</th>
                                                <th>2nd Image</th>
                                                <th>3rd Image</th>
                                                <th>brochure_pdf</th>
                                                <th>Description</th>
                                                <th>Category</th>
                                                <th>Sub Category</th>
                                                <th>Add Specification</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody id="customerTable">
                                            <?php
                                            $i = 1;
                                            if (!empty($product)) {
                                                foreach ($product as $row) {
                                                    $category_name = '';
                                                    $sub_category_name = '';

                                                    foreach ($products as $products_info) {
                                                        if ($products_info['id'] == $row['category']) {
                                                            $category_name = $products_info['name'];
                                                            break;
                                                        }
                                                    }

                                                    foreach ($sub_category as $sub) {
                                                        if ($sub['id'] == $row['sub_category']) {
                                                            $sub_category_name = $sub['sub_category'];
                                                            break;
                                                        }
                                                    }
                                            ?>
                                                    <tr>
                                                        <td><?= $i; ?></td>
                                                        <td><?= $row['name']; ?></td>
                                                        <td><img src="<?= setImage($row['image'], 'uploads/product/') ?>" width="50" height="50"></td>
                                                        <td><img src="<?= setImage($row['image1'], 'uploads/product/') ?>" width="50" height="50"></td>
                                                        <td><img src="<?= setImage($row['image2'], 'uploads/product/') ?>" width="50" height="50"></td>
                                                        <td>

                                                            <a href="<?= base_url('uploads/brochures/' . $row[0]['brochure_pdf']) ?>" target="_blank">
                                                                <i class="fas fa-file-pdf text-danger" style="font-size: 30px;"></i>
                                                            </a>
                                                        </td>



                                                        <td><?= strip_tags(substr($row['description'], 0, 100)); ?>...</td>
                                                        <td><?= $category_name; ?></td>
                                                        <td><?= $sub_category_name; ?></td>

                                                        <td>
                                                        <a href="<?php echo base_url() . 'admin_Dashboard/add_specification?BdID=' . encryptId($row['id']); ?>"
                                                            class="btn btn-success">Add Specification</a>
                                                        <br>
                                                        <br>
                                                        <a href="<?php echo base_url() . 'admin_Dashboard/specification?BID=' . encryptId($row['id']); ?>"
                                                            class="btn btn-success">View Specification</a>

                                                        </td>

                                                     

                                                        <td>
                                                            <a href="<?= base_url('admin_Dashboard/edit_product/' . $row['id']); ?>" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                                            <br><br> <a href="<?= base_url('admin_Dashboard/product?BdID=' . $row['id'] . '&img1=' . $row['image'] . '&img2=' . $row['image1'] . '&img3=' . $row['image2']); ?>" class="btn btn-danger" onclick="return confirm('Continue to delete?')">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </a>
                                                        </td>


                                                    </tr>
                                            <?php
                                                    $i++;
                                                }
                                            } else {
                                                echo "<tr><td colspan='13'>No data available</td></tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('template/footer.php'); ?>
</body>

</html>