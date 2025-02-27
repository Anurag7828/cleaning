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
												<a href="leads-dashboard.html" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh">
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

					<!-- Total Lead -->
					<div class="col-xl-3 col-sm-6 d-flex">
						<div class="card flex-fill">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<span class="avatar avatar-md rounded bg-dark mb-3">
										<i class="ti ti-building fs-16"></i>
									</span>
									<span class="badge bg-success fw-normal mb-3">
										<?= $category ?>
									</span>
								</div>
								<div class="d-flex align-items-center justify-content-between">
									<div>
										<h2 class="mb-1"><?= $category ?></h2>
										<p class="fs-13">Total Category</p>
									</div>

								</div>
							</div>
						</div>
					</div>
					<!-- /Total lead -->

					<!-- Active Close lead-->
				<div class="col-xl-3 col-sm-6 d-flex">
			
						<div class="card flex-fill">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<span class="avatar avatar-md rounded bg-dark mb-3">
										<i class="ti ti-carousel-vertical fs-16"></i>
									</span>
									<span class="badge bg-danger fw-normal mb-3">
										<?= $sub_category ?>
									</span>
								</div>
								<div class="d-flex align-items-center justify-content-between">
									<div>
										<h2 class="mb-1"> <?= $sub_category ?></h2>
									<p class="fs-13">Sub Category</p>
									</div>

								</div>
							</div>
						</div>
					</div>
					<!-- /Active Close lead -->

					<!-- Total Earnings -->
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

				<!-- <div class="row">
					<div class="col-md-7">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
									<h4><i class="ti ti-grip-vertical me-1"></i>Recent Added Product</h4>
									<a href="<?= base_url() ?>view_product" class="btn btn-light btn-md mb-2">View All</a>

								</div>
							</div>
							<div class="card-body">

								<div class="table-responsive custom-table">
									<table class="table">
										<thead class="thead-light">
											<tr>
												<th class="no-sort">S No.</th>
												<th>Name</th>
												<th>Company Name</th>

												<th>Status</th>
												<th>Contact No.</th>

											</tr>
										</thead>
										<tbody>
											<?php if (!empty($leads)) : ?>
												<?php
												$i = 1;
												// Sort leads array in descending order by 'id'
												usort($leads, function ($a, $b) {
													return $b['id'] - $a['id'];
												});

												// Get last 7 leads after sorting in descending order
												$last_seven_leads = array_slice($leads, 0, 7);

												foreach ($last_seven_leads as $row) :
												?>
													<tr>
														<td><?= $i++; ?></td>
														<td><a href="<?= base_url('lead/' . encryptId($row['id'])); ?>" class="title-name"><?= $row['name']; ?></a></td>
														<td><a href="#" class="title-name"><?= $row['company_name']; ?></a></td>
														<td>
															<span class="badge badge-pill badge-status 
					<?= ($row['lead_status'] === 'close')
														? 'bg-success'
														: (($row['lead_status'] === 'open')
															? 'bg-pending'
															: 'bg-danger'); ?>">
																<?= ucfirst($row['lead_status']); ?>
															</span>
														</td>
														<td><?= $row['contact']; ?></td>
													</tr>
												<?php endforeach; ?>
											<?php endif; ?>
										</tbody>


									</table>

								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5 d-flex">
						<div class="card w-100">
							<div class="card-header border-0 pb-0">
								<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
									<h4><i class="ti ti-grip-vertical me-1"></i>Leads By Stage</h4>

								</div>
							</div>
							<div class="card-body">

								<div id="leadpiechart"></div>
							</div>
						</div>
					</div>
				</div> -->
				<!-- <div class="row">


					<div class="col-xxl-6 col-xl-6 d-flex">
						<div class="card flex-fill">
							<div class="card-header pb-2 d-flex align-items-center justify-content-between flex-wrap">
								<h5 class="mb-2">Today meetings</h5>
								<a href="<?= base_url() ?>view_meeting" class="btn btn-light btn-md mb-2">View All</a>
							</div>
							<div class="card-body pb-2">
								<div class="table-responsive custom-table">
									<table class="table">
										<thead class="thead-light">
											<tr>
												<th>S No.</th>

												<th>Name</th>
												<th>Contact No.</th>
												<th>Time</th>
												<th>Topic</th>
												<th>Mode</th>

											</tr>
										</thead>
										<tbody>
											<?php if (!empty($meeting)) : ?>
												<?php
												$i = 1;
												foreach ($meeting as $row) :
												?>
													<tr>
														<td><?= $i++; ?></td>
														<td><?= $row['name']; ?></a></td>
														<td><?= $row['contact']; ?></>
														</td>

														<td><?= $row['time']; ?></td>
														<td><?= $row['topic']; ?></td>
														<td><?= $row['mode']; ?></td>
													</tr>
												<?php $i++;
												endforeach; ?>
											<?php endif; ?>
										</tbody>

									</table>
								</div>
							</div>
						</div>
					</div>
				
					<div class="col-xxl-6 col-xl-6 d-flex">
						<div class="card flex-fill">
							<div class="card-header pb-2 d-flex align-items-center justify-content-between flex-wrap">
								<h5 class="mb-2">Recent Pending Leads</h5>
								<a href="<?= base_url() ?>open_lead" class="btn btn-light btn-md mb-2">View All</a>

							</div>
							<div class="card-body pb-2">
								<div>
									<div>
										<?php if (!empty($p_lead)) : ?>
											<?php
											// Sort leads array in descending order by 'id'
											usort($p_lead, function ($a, $b) {
												return $b['id'] - $a['id'];
											});

											// Get the latest 5 leads after sorting in descending order
											$last_five_leads = array_slice($p_lead, 0, 5);

											foreach ($last_five_leads as $row) : ?>
												<div class="d-sm-flex justify-content-between flex-wrap mb-3">
													<div class="d-flex align-items-center mb-2">
														<a href="javascript:void(0);" class="avatar avatar-sm border flex-shrink-0">
															<img src="<?= base_url() ?>assets/admin/img/icons/company-icon-01.svg" class="img-fluid w-auto h-auto" alt="img">
														</a>
														<div class="ms-2 flex-fill">
															<h6 class="fs-medium text-truncate mb-1">
																<a href="<?= base_url('lead/' . encryptId($row['id'])); ?>"><?= $row['name']; ?></a>
															</h6>
															<p class="fs-13"><?= $row['company_name']; ?></p>
														</div>
													</div>
													<div class="text-sm-end mb-2">
														<a href="javascript:void(0);" class="link-info text-decoration-underline d-block mb-1">
															<span class="badge badge-pill badge-status 
                                    <?= ($row['lead_status'] === 'close')
													? 'bg-success'
													: (($row['lead_status'] === 'open')
														? 'bg-pending'
														: 'bg-danger'); ?>">
																<?= ucfirst($row['lead_status']); ?>
															</span>
														</a>
														<p class="fs-13"><?= date('d-M-Y', strtotime($row['date'])); ?></p>
													</div>
												</div>
											<?php endforeach; ?>
										<?php else : ?>
											<div class="text-center">No leads available.</div>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>
	<?php include('template/footer.php') ?>

</html>