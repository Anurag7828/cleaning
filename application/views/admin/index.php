<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('template/header-links.php') ?>
	<link rel="stylesheet" href="assets/admin/plugins/fullcalendar/fullcalendar.min.css">
</head>

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper">
		<?php include('template/header.php') ?>
		<?php include('template/sidebar.php') ?>



		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content">

				<div class="row">
					<div class="col-md-12">
						<div class="page-header">
							<div class="row align-items-center ">
								<div class="col-md-4">
									<h3 class="page-title">Dashboard</h3>
								</div>
								<div class="col-md-8 float-end ms-auto">
									<div class="d-flex title-head">
										<div class="daterange-picker d-flex align-items-center justify-content-center">

											<div class="head-icons mb-0">
												<a href="<?= base_url('admin_Dashboard') ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh">
													<i class="ti ti-refresh-dot"></i>
												</a>
												<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
													<i class="ti ti-chevrons-up"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Welcome Wrap -->
				<div class="welcome-wrap mb-4">
					<div class=" d-flex align-items-center justify-content-between flex-wrap">
						<div class="mb-3">
							<h2 class="mb-1 text-white">Welcome Admin!!!</h2>

						</div>
						<div class="d-flex align-items-center flex-wrap mb-1">
							<a href="<?= base_url('admin_Dashboard/view_product') ?>" class="btn btn-dark btn-md me-2 mb-2"> View All Products</a>
							<a href="<?= base_url('admin_Dashboard/view_category') ?>" class="btn btn-light btn-md mb-2">View Category</a>
						</div>
					</div>
				</div>
				<!-- /Welcome Wrap -->

				<div class="row">


					<div class="col-xl-3 col-sm-6 d-flex">
						<div class="card flex-fill">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<span class="avatar avatar-md rounded bg-dark mb-3">
										<i class="ti ti-building fs-16"></i>
									</span>
									<span class="badge bg-success fw-normal mb-3">
										<?= $categories ?>
									</span>
								</div>
								<div class="d-flex align-items-center justify-content-between">
									<div>
										<h2 class="mb-1"><?= $categories ?></h2>
										<p class="fs-13">Total Category</p>
									</div>

								</div>
							</div>
						</div>
					</div>



					<div class="col-xl-3 col-sm-6 d-flex">

						<div class="card flex-fill">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<span class="avatar avatar-md rounded bg-dark mb-3">
										<i class="ti ti-carousel-vertical fs-16"></i>
									</span>
									<span class="badge bg-danger fw-normal mb-3">
										<?= $sub_categories ?>
									</span>
								</div>
								<div class="d-flex align-items-center justify-content-between">
									<div>
										<h2 class="mb-1"> <?= $sub_categories ?></h2>
										<p class="fs-13">Sub Category</p>
									</div>

								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-sm-6 d-flex">
						<div class="card flex-fill">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<span class="avatar avatar-md rounded bg-dark mb-3">
										<i class="ti ti-businessplan fs-16"></i>
									</span>
									<span class="badge bg-danger fw-normal mb-3">
										<?= $contact ?>
									</span>
								</div>
								<div class="d-flex align-items-center justify-content-between">
									<div>
										<h2 class="mb-1"><?= $contact ?></h2>
										<p class="fs-13">Total Contact Query </p>
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 d-flex">
						<div class="card flex-fill">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<span class="avatar avatar-md rounded bg-dark mb-3">
										<i class="ti ti-chalkboard-off fs-16"></i>
									</span>
									<span class="badge bg-success fw-normal mb-3">
										<?= $product ?>
									</span>
								</div>
								<div class="d-flex align-items-center justify-content-between">
									<div>
										<h2 class="mb-1"><?= $product ?></h2>
										<p class="fs-13">Total Product </p>
									</div>

								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="row">


					<div class="col-xl-3 col-sm-6 d-flex">
						<div class="card flex-fill">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<span class="avatar avatar-md rounded bg-dark mb-3">
										<i class="ti ti-building fs-16"></i>
									</span>
									<span class="badge bg-success fw-normal mb-3">
										<?= $post_job ?>
									</span>
								</div>
								<div class="d-flex align-items-center justify-content-between">
									<div>
										<h2 class="mb-1"><?= $post_job ?></h2>
										<p class="fs-13">Total Posted Jobs</p>
									</div>

								</div>
							</div>
						</div>
					</div>



					<div class="col-xl-3 col-sm-6 d-flex">

						<div class="card flex-fill">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<span class="avatar avatar-md rounded bg-dark mb-3">
										<i class="ti ti-carousel-vertical fs-16"></i>
									</span>
									<span class="badge bg-danger fw-normal mb-3">
										<?= $applications ?>
									</span>
								</div>
								<div class="d-flex align-items-center justify-content-between">
									<div>
										<h2 class="mb-1"> <?= $applications  ?></h2>
										<p class="fs-13">Total Job Applications</p>
									</div>

								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-sm-6 d-flex">
						<div class="card flex-fill">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<span class="avatar avatar-md rounded bg-dark mb-3">
										<i class="ti ti-businessplan fs-16"></i>
									</span>
									<span class="badge bg-danger fw-normal mb-3">
										<?= $services ?>
									</span>
								</div>
								<div class="d-flex align-items-center justify-content-between">
									<div>
										<h2 class="mb-1"><?= $services ?></h2>
										<p class="fs-13">Total Services </p>
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 d-flex">
						<div class="card flex-fill">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<span class="avatar avatar-md rounded bg-dark mb-3">
										<i class="ti ti-chalkboard-off fs-16"></i>
									</span>
									<span class="badge bg-success fw-normal mb-3">
										<?= $blog ?>
									</span>
								</div>
								<div class="d-flex align-items-center justify-content-between">
									<div>
										<h2 class="mb-1"><?= $blog ?></h2>
										<p class="fs-13">Total Blogs </p>
									</div>

								</div>
							</div>
						</div>
					</div>

				</div>


				<div class="row">
					<div class="col-md-7">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
									<h4><i class="ti ti-grip-vertical me-1"></i>Recent Added Product</h4>
									<a href="<?= base_url() ?>admin_dashboard/view_product" class="btn btn-light btn-md mb-2">View All</a>

								</div>
							</div>
							<div class="card-body">

								<div class="table-responsive custom-table">
									<table class="table">
										<thead class="thead-light">
											<tr>
												<th class="no-sort">S No.</th>
												<th>Name</th>
												<th>Image</th>
                                                 <th>Price</th>
												<th>Category</th>
												<th>Sub Category</th>
												<th>Action</th>

											</tr>
										</thead>
										<tbody id="customerTable">
                                            <?php
                                            $i = 1;
                                            if (!empty($products)) {
                                                foreach ($products as $row) {
                                                    $category_name = '';
                                                    $sub_category_name = '';

                                                    foreach ($category as $category_info) {
                                                        if ($category_info['id'] == $row['category']) {
                                                            $category_name = $category_info['name'];
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
                                                       
														<td><?= $row['price']; ?></td>
                                                         <td><?= $category_name; ?></td>
                                                        <td><?= $sub_category_name; ?></td>

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
					<div class="col-md-5 d-flex">
					<div class="card">
							<div class="card-header border-0 pb-0">
								<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
									<h4><i class="ti ti-grip-vertical me-1"></i>Recent Job Applications</h4>
									<a href="<?= base_url() ?>admin_dashboard/view_application" class="btn btn-light btn-md mb-2">View All</a>

								</div>
							</div>
							<div class="card-body">

								<div class="table-responsive custom-table">
									<table class="table">
										<thead class="thead-light">
											<tr>
												<th class="no-sort">S No.</th>
												<th>Name</th>
												<th>Email</th>
                                                 <th>Contact</th>
												<th>Application For</th>
													<th>Action</th>							</tr>
										</thead>
										<tbody id="customerTable">
                                            <?php

                                            $i = 1;

                                            if ($application) {

                                                foreach ($application as $row) {

                                            ?>
                                                    <td><?= $i++; ?></td>
                                                    <td><?= $row['prefix']; ?> <?= $row['name']; ?></td>
                                                    <td><?= $row['email']; ?></td>
                                                  
                                                    <td><?= $row['country_code']; ?> <?= $row['phone']; ?></td>
                                                    <td>
                                                    <?php $job = $this->CommonModal->getRowById('career', 'id', $row['job_id']);?><?= $job[0]['title']; ?></td>
                                                  
													<td>

<a  href="<?= base_url('admin_Dashboard/application/' . encryptId($row['id'])); ?>"><i class="ti ti-eye text-blue"></i></a>


	<a  href="<?php echo base_url() . 'admin_Dashboard/view_application?BdID=' . $row['id']?>"
				onclick="return confirm('Are you sure you want to delete this Application?');">
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
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<?php include('template/footer.php') ?>

</html>