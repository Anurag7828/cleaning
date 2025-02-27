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

						<!-- Page Header -->
						<div class="page-header">
							<div class="row align-items-center">
								<div class="col-sm-4">
									<h4 class="page-title">Settings</h4>
								</div>
								<div class="col-sm-8 text-sm-end">
									<div class="head-icons">
										<a href="<?= base_url('Admin_Dashboard/profile') ?>" data-bs-toggle="tooltip" data-bs-placement="top"
											data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
										<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
											data-bs-original-title="Collapse" id="collapse-header"><i
												class="ti ti-chevrons-up"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- /Page Header -->

						<!-- Settings Menu -->
						<div class="card">
							<div class="card-body pb-0 pt-2">
								<ul class="nav nav-tabs nav-tabs-bottom">
									<li class="nav-item me-3">
										<a href="<?= base_url('Admin_Dashboard/profile') ?>" class="nav-link px-0 active">
											<i class="ti ti-settings-cog me-2"></i>General Settings
										</a>
									</li>
									

								</ul>
							</div>
						</div>
						<!-- /Settings Menu -->

						<div class="row">


							<div class="col-xl-12 col-lg-12">

								<!-- Settings Info -->
								<div class="card">
									<div class="card-body">
										<h4 class="fw-semibold mb-3">Profile Settings</h4>
										<form action="<?= base_url('admin_dashboard/update_profile/' . $admin[0]['id']) ?>" method="post" enctype="multipart/form-data">


											<div class="border-bottom mb-3">
												<div class="row">
													<div class="col-md-4">
														<div class="mb-3">
															<label class="form-label">
																Name <span class="text-danger">*</span>
															</label>
															<input type="text" name="name" value="<?= $admin[0]['name'] ?>" class="form-control">
														</div>
													</div>
													<div class="col-md-4">
														<div class="mb-3">
															<label class="form-label">
																Phone Number <span class="text-danger">*</span>
															</label>
															<input type="text" name="contact" value="<?= $admin[0]['contact'] ?>" class="form-control">
														</div>
													</div>
													<div class="col-md-4">
														<div class="mb-3">
															<label class="form-label">
																Email <span class="text-danger">*</span>
															</label>
															<input type="text" name="email" value="<?= $admin[0]['email'] ?>" class="form-control">
														</div>
													</div>
													<div class="col-md-4">
														<div class="mb-3">
															<label class="form-label">
																User Name <span class="text-danger">*</span>
															</label>
															<input type="text" name="username" value="<?= $admin[0]['username'] ?>" class="form-control">
														</div>
													</div>
													<div class="col-md-4">
														<div class="mb-3">
															<label class="form-label">
																Password <span class="text-danger">*</span>
															</label>
															<input type="text" name="password" value="<?= $admin[0]['password'] ?>" class="form-control">
														</div>
													</div>
												</div>
											</div>
											
											<div>
												<!-- <a href="#" class="btn btn-light me-2">Cancel</a> -->
												<button type="submit" class="btn btn-primary">Save Changes</button>
											</div>
										</form>
									</div>
								</div>
								<!-- /Settings Info -->

							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		// Get today's date in YYYY-MM-DD format
		const today = new Date().toISOString().split('T')[0];

		// Set the 'min' attribute of the date input field to today's date
		document.getElementById('nextFollowUpDate').setAttribute('min', today);

		document.getElementById('pincode').addEventListener('blur', function() {
			const pincode = this.value.trim();

			if (pincode.length === 6) { // Validate pincode length
				// Display a loading message or spinner here if needed
				fetch(`https://api.postalpincode.in/pincode/${pincode}`) // Replace with your API URL
					.then(response => response.json())
					.then(data => {
						if (data[0].Status === 'Success') {
							const details = data[0].PostOffice[0];
							document.getElementById('city').value = details.District || '';
							document.getElementById('state').value = details.State || '';
							document.getElementById('country').value = 'India'; // Assuming India for this API
						} else {
							alert('Invalid pincode. Please try again.');
						}
					})
					.catch(error => {
						console.error('Error fetching pincode details:', error);
						alert('Failed to fetch pincode details. Please check your internet connection or try again later.');
					});
			} else {
				alert('Please enter a valid 6-digit pincode.');
			}
		});
	</script>
	<?php include('template/footer.php') ?>