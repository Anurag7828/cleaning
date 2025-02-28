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
                                    <h4 class="page-title">View Video</h4>
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

                                            <a href="<?= base_url('admin_Dashboard/add_video') ?>" class="btn btn-primary"><i
                                                    class="ti ti-square-rounded-plus me-2"></i>Add Video</a>
                                        
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
                                                
                                                <th>Video</th>
                                                <th>Date</th>
                                               
                                                <th>Action</th>
                                             
                                            </tr>
                                        </thead>
                                        <tbody id="customerTable">
                                            <?php

                                            $i = 1;

                                            if ($video) {

                                                foreach ($video as $row) {
                                                    $data = $row['url'];
                                                    // Check if the link contains "youtu.be" format
                                                    if (strpos($data, 'youtu.be') !== false) {
                                                        // Extract video ID from the link
                                                        $video_id = substr($data, strrpos($data, '/') + 1);
                                                        $final = 'https://www.youtube.com/embed/' . $video_id;
                                                    } else {
                                                        // Replace "watch?v=" with "embed/" in the link
                                                        $final = str_replace('watch?v=', 'embed/', $data);
                                                    }

                                            ?>
                                                    <td><?= $i++; ?></td>
                                                

                                                    <td>  <iframe src="<?php echo $final; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                                                    </iframe></td>
                                                    <td><?= $row['date'] ?></td>
                                                  
                                                    <td>

                                                    <a  href="<?= base_url('admin_Dashboard/edit_video/' . $row['id']); ?>"><i class="ti ti-edit text-blue"></i></a>

                                                        <a  href="<?php echo base_url() . 'admin_Dashboard/view_video?BdID=' . $row['id']?>"
                                                                    onclick="return confirm('Are you sure you want to delete this Video?');">
                                                                    <i class="ti ti-trash text-danger"></i>
                                                                </a>


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