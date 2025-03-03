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

                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="page-title">View Blogs</h4>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="head-icons">
                                        <a href="companies.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
                                        <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-original-title="Collapse" id="collapse-header"><i
                                                class="ti ti-chevrons-up"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card ">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-sm-4">
                                        <div class="icon-form mb-3 mb-sm-0">
                                            <span class="form-icon"><i class="ti ti-search"></i></span>
                                            <input type="text" class="form-control" id="searchInput" placeholder="Search here...">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div
                                            class="d-flex align-items-center flex-wrap row-gap-2 justify-content-sm-end">
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

                                            <a href="<?= base_url('admin_Dashboard/add_news') ?>" class="btn btn-primary"><i
                                                    class="ti ti-square-rounded-plus me-2"></i>Add News</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Search -->
                            </div>
                            <div class="card-body">
                                <?php if ($msg = sessionId('msg')) :

                                    $msg_class = sessionId('msg_class') ?>

                                    <div class="row">

                                        <div class="col-lg-12">

                                            <div class="alert  <?= $msg_class; ?>"><?= $msg; ?></div>

                                        </div>

                                    </div>

                                <?php

                                    $this->session->unset_userdata('msg');

                                endif; ?>

                                <!-- Contact List -->
                                <div class="table-responsive custom-table" id="dataList">
                                    <table class="table datatable">
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="no-sort">S No.</th>
                                                <th>Heading</th>
                                                <th>image</th>
                                         
                                                <th>Description</th>        
                                                <th>Delete</th>
                                                <th>Update</th>
                                            </tr>
                                        </thead>
                                        <tbody id="customerTable">
                                            <?php

                                            $i = 1;

                                            if ($news) {

                                                foreach ($news as $row) {

                                            ?>
                                                    <td><?= $i++; ?></td>
                                                  
                                                    <td><a href="#" class="title-name"><?= $row['heading']; ?></a></td>
                                                    <td><img src="<?= base_url() ?>uploads/news/<?= $row['image'] ?>" width="60"></td>

                              
                                                    <td><a href="#" class="title-name"><?php echo strip_tags(substr($row['description'] , 0 , 250)); ?>...</a></td>
                                                    <td>


                                                        <a class="dropdown-item" href="<?php echo base_url() . 'admin_Dashboard/view_news?BdID=' . $row['id'] . '&img=' . $row['image'] ?>"
                                                                    onclick="return confirm('Are you sure you want to delete this lead?');">
                                                                    <i class="ti ti-trash text-danger"></i> Delete
                                                                </a>

                                                    </td>

                                                    <td>

                                                        <a class="dropdown-item" href="<?= base_url('admin_Dashboard/edit_news/' . $row['id']); ?>"><i class="ti ti-edit text-blue"></i> Edit</a>

                                                    </td>
                                                    </tr>
                                            <?php

                                                    $i++;
                                                }
                                            }

                                            ?>
                                        </tbody>
                                    </table>

                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="datatable-length"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="datatable-paginate"></div>
                                    </div>
                                </div>
                                <!-- /Contact List -->

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include('template/footer.php') ?>