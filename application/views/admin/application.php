
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
		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content">

				<div class="row">
					<div class="col-md-12">

						<!-- Page Header -->
						<div class="page-header">
							<div class="row align-items-center">
								<div class="col-sm-4">
									<h4 class="page-title">Application Overview</h4>
								</div>
								<div class="col-sm-8 text-sm-end">
									<div class="head-icons">
										<a href="company-details.html" data-bs-toggle="tooltip" data-bs-placement="top"
											data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
										<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
											data-bs-original-title="Collapse" id="collapse-header"><i
												class="ti ti-chevrons-up"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- /Page Header -->

					</div>
				</div>

				<div class="row">
					<div class="col-md-12">

						

						<div class="card">
							<div class="card-body pb-2">
								<div class="d-flex align-items-center justify-content-between flex-wrap">
									<div class="d-flex align-items-center mb-2">
										<div class="avatar avatar-xxl me-3 flex-shrink-0 border p-2">
											<img src="<?= base_url()?>uploads/application/<?= $application[0]['image']?>" alt="Image">
										</div>
										<div>
                                        <?php $job = $this->CommonModal->getRowById('career', 'id', $application[0]['job_id']);?>
											<h5 class="mb-1"><?= $application[0]['prefix']?> <?= $application[0]['name']?> (Apply For <?= $job[0]['title']?> ) </h5>
											<p class="mb-2">Email:- <?= $application[0]['email']?></p>
											<p class="mb-2">Contact Num:- <?= $application[0]['country_code']?> <?= $application[0]['phone']?></p>

											
										</div>
									</div>
									<div class="contacts-action">
									
										<a href="<?= base_url()?>uploads/application/<?= $application[0]['resume']?>" class="btn btn-danger" target="_blank">
											<i class="ti ti-eye"></i>View Resume
										</a>
										
										
									</div>
								</div>
							</div>
						</div>
						<!-- /Contact User -->

					</div>

					<!-- Contact Sidebar -->
					<div class="col-xl-12 theiaStickySidebar">
						<div class="card">
							<div class="card-body p-3">
								
								<hr>
								<h6 class="mb-3 fw-semibold">Address Information</h6>
								<ul>
									<li class="row mb-3"><span class="col-6">Street</span><span
											class="col-6"><?= $application[0]['street']?></span></li>
									<li class="row mb-3"><span class="col-6">City</span><span class="col-6"><?= $application[0]['city']?></span></li>
									<li class="row mb-3"><span class="col-6">State</span><span class="col-6"><?= $application[0]['state']?></span></li>
									<li class="row mb-3"><span class="col-6">Pin Code</span><span class="col-6"><?= $application[0]['pin_code']?></span></li>
									<li class="row mb-3"><span class="col-6">Country</span><span class="col-6"><?= $application[0]['country']?></span></li>

								</ul>
                                <hr>
								<h6 class="mb-3 fw-semibold">Professional Details </h6>
								<ul>
									<li class="row mb-3"><span class="col-6">Current Job Title</span><span
											class="col-6"><?= $application[0]['c_job_title']?></span></li>
									<li class="row mb-3"><span class="col-6">Highest Qualification Held</span><span class="col-6"><?= $application[0]['qualification']?></span></li>
                                    <li class="row mb-3"><span class="col-6">Skills</span><span class="col-6"><div class="mb-3">
                                    <?php $skills = $this->CommonModal->getRowById('skill_set', 'application_id', $application[0]['id']);
                                            
                                            foreach ($skills as $skill) { ?>
									<a href="javascript:void(0);"
										class="badge badge-soft-success fw-medium me-2"><?= $skill['skill']?></a>
								<?php } ?>
								</div></span></li>
									

								</ul>
                               
                                <hr>
								<h6 class="mb-3 fw-semibold">Education Information</h6>
                                <?php $educations = $this->CommonModal->getRowById('education', 'application_id', $application[0]['id']);
                                            
                                            foreach ($educations as $education) { ?>
                                               <hr>
								<ul>
									<li class="row mb-3"><span class="col-6">Institution/School Name</span><span
											class="col-6"><?= $education['i_name']?></span></li>
									<li class="row mb-3"><span class="col-6">Department</span><span class="col-6"><?= $education['department']?></span></li>
									<li class="row mb-3"><span class="col-6">Degree</span><span class="col-6"><?= $education['degree']?></span></li>
                                    <li class="row mb-3">
    <span class="col-6">Duration</span>
    <span class="col-6">
        <?= date("M Y", strtotime($education['from'])) ?> To 
        <?= date("M Y", strtotime($education['to'])) ?>
    </span>
</li>
									<li class="row mb-3"><span class="col-6">Currently Purshuing</span><span class="col-6">
                                        <?php if($education['currently'] == '1') {
                                        ?> Yes <?php } else{ ?>
                                        No<?php }?></span></li>

								</ul>
                             

                                <?php }?>
                                <hr>
								<h6 class="mb-3 fw-semibold">Experience</h6>
                                <?php $exps = $this->CommonModal->getRowById('experince', 'application_id', $application[0]['id']);
                                            
                                            foreach ($exps as $exp) { ?>
                                              <hr>
								<ul>
									<li class="row mb-3"><span class="col-6">Job Title</span><span
											class="col-6"><?= $exp['job_title']?></span></li>
									<li class="row mb-3"><span class="col-6">Company Name</span><span class="col-6"><?= $exp['company']?></span></li>
									<li class="row mb-3"><span class="col-6">Summary</span><span class="col-6"><?= $exp['summary']?></span></li>
                                    <li class="row mb-3">
    <span class="col-6">Duration</span>
    <span class="col-6">
        <?= date("M Y", strtotime($exp['w_from'])) ?> To 
        <?= date("M Y", strtotime($exp['w_to'])) ?>
    </span>
</li>
									<li class="row mb-3"><span class="col-6">Currently Working</span><span class="col-6">
                                        <?php if($exp['currently_working'] == '1') {
                                        ?> Yes <?php } else{ ?>
                                        No<?php }?></span></li>

								</ul>
                              

                                <?php }?>
								<hr>
								
								
								<h6 class="mb-3 fw-semibold">Social Profile</h6>
								<ul class="social-info">
									
									<li>
										<a href="<?= $application[0]['facebook']?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
									</li>
									
									<li>
										<a href="<?= $application[0]['linkedin']?>" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
									</li>
								</ul>
								<hr>
								
								<a  href="<?php echo base_url() . 'admin_Dashboard/view_application?BdID=' . $row['id']?>"
                                onclick="return confirm('Are you sure you want to delete this Application?');"><i class="ti ti-trash-x me-1"></i>Delete
									Application</a>
							</div>
						</div>
					</div>
					<!-- /Contact Sidebar -->

				</div>

			</div>
		</div>
		<!-- /Page Wrapper -->

	</div>
	<!-- /Main Wrapper -->

<?php include('template/footer.php') ?>