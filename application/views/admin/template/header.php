

		<!-- Header -->
		<div class="header">

			<!-- Logo -->
			<div class="header-left active">
				<a href="index-2.html" class="logo logo-normal">
                    <img src="<?= base_url()?>assets/admin/img/logo.jpg" alt="Logo">
                    <img src="<?= base_url()?>assets/admin/img/logo.jpg" class="white-logo" alt="Logo">
                </a>
				<a href="index-2.html" class="logo-small">
					<img src="<?= base_url()?>assets/admin/img/logo.jpg" alt="Logo">
				</a>
				<a id="toggle_btn" href="javascript:void(0);">
					<i class="ti ti-arrow-bar-to-left"></i>
				</a>
			</div>
			<a id="mobile_btn" class="mobile_btn" href="#sidebar">
				<span class="bar-icon">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</a>
			<div class="header-user">
				<ul class="nav user-menu">
					
					<li class="nav-item nav-search-inputs me-auto">
						<div class="top-nav-search">
							<a href="javascript:void(0);" class="responsive-search">
								<i class="fa fa-search"></i>
							</a>
							<form action="#" class="dropdown">
								<div class="searchinputs" id="dropdownMenuClickable">
									<input type="text" placeholder="Search">
									<div class="search-addon">
										<button type="submit"><i class="ti ti-command"></i></button>
									</div>
								</div>
							</form>
						</div>
					</li>
					<!-- /Search -->

					<!-- Horizontal Single -->
					<li>
						<div class="sidebar sidebar-horizontal" id="horizontal-single">
						<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li class="clinicdropdown">
							<a href="profile.html">
								<img src="	<?= base_url()?>assets/admin/img/profiles/avatar-14.jpg" class="img-fluid" alt="Profile">
								<div class="user-names">
									<h5>Adrian Davies</h5>
									<h6>Tech Lead</h6>
								</div>
							</a>
						</li>
					</ul>
					<ul>
						<li>
							<h6 class="submenu-hdr">Main Menu</h6>
							<ul>
							
							<li>
									<a href="layout-mini.html">
										<i class="ti ti-layout-navbar"></i><span>Dashboard</span>
									</a>
								</li>
								<li class="submenu">
									<a href="#">
										<i class="ti ti-user-star"></i><span>Companies</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										
										<li><a href="company.html">Add Companies</a></li>
										<li><a href="dashboard.html">Active Compaines</a></li>
										<li><a href="subscription.html">Deactive Compaines</a></li>
									
									</ul>
								</li>
								<li class="submenu">
									<a href="#">
										<i class="ti ti-user-star"></i><span>Agents</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										
										<li><a href="company.html">Add Agent</a></li>
										<li><a href="dashboard.html">Active Agent</a></li>
										<li><a href="subscription.html">Deactive Agent</a></li>
									
									</ul>
								</li>
							</ul>
						</li>
						
						<li>
							<h6 class="submenu-hdr">Settings</h6>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-settings-cog"></i><span>General Settings</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="profile.html">Profile</a></li>
										<li><a href="security.html">Change Password</a></li>
										
										
									</ul>
								</li>
								
							</ul>
						</li>
						
					</ul>
				</div>
						</div>
					</li>
					<!-- /Horizontal Single -->

					<!-- Nav List -->
					<li class="nav-item nav-list">
						<ul class="nav">
							<li>
								<div>
									<a href="#" class="btn btn-icon border btn-menubar btnFullscreen">
										<i class="ti ti-maximize"></i>
									</a>
								</div>
							</li>
							<li class="dark-mode-list">
								<a href="javascript:void(0);" id="dark-mode-toggle" class="dark-mode-toggle">
									<i class="ti ti-sun light-mode active"></i>
									<i class="ti ti-moon dark-mode"></i>
								</a>
							</li>
							
							
						</ul>
					</li>
					<!-- /Nav List -->
					
					<!-- Chat -->
					
					<!-- /Chat -->

					<!-- Notifications -->
					<li class="nav-item dropdown nav-item-box">
						<a href="javascript:void(0);" class="nav-link" data-bs-toggle="dropdown">
							<i class="ti ti-bell"></i>
							<span class="badge rounded-pill">13</span>
						</a>
						<div class="dropdown-menu dropdown-menu-end notification-dropdown">
							<div class="topnav-dropdown-header">
								<h4 class="notification-title">Notifications</h4>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="activities.html">
											<div class="media d-flex">
												<span class="avatar flex-shrink-0">
													<img src="<?= base_url()?>assets/admin/img/profiles/avatar-02.jpg" alt="Profile">
													<span class="badge badge-info rounded-pill"></span>
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details">Ray Arnold left 6 comments on Isla Nublar SOC2 compliance report</p>
													<p class="noti-time">Last Wednesday at 9:42 am</p>
												</div>
											</div>
										</a>
									</li>
								
								</ul>
							</div>
							
						</div>
					</li>
					<!-- /Notifications -->

					<!-- Profile Dropdown -->
					<li class="nav-item dropdown has-arrow main-drop">
						<a href="javascript:void(0);" class="nav-link userset" data-bs-toggle="dropdown">
							<span class="user-info">
								<span class="user-letter">
									<img src="	<?= base_url()?>assets/admin/img/logo.jpg" alt="Profile" width="150px">
								</span>
								<span class="badge badge-success rounded-pill"></span>
							</span>
						</a>
						<div class="dropdown-menu menu-drop-user">
							<div class="profilename">						
								<a class="dropdown-item" href="<?= base_url('Admin_Dashboard/profile') ?>">
									<i class="ti ti-user-pin"></i> My Profile
								</a>
								<a class="dropdown-item" href="<?= base_url('admin/logout') ?>">
									<i class="ti ti-lock"></i> Logout
								</a>
							</div>
						</div>
					</li>
					<!-- /Profile Dropdown -->

				</ul>
			</div>

			<!-- Mobile Menu -->
			<div class="dropdown mobile-user-menu">
				<a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
				<div class="dropdown-menu">
				
					<a class="dropdown-item" href="profile.html">
						<i class="ti ti-user-pin"></i> My Profile
					</a>
					<a class="dropdown-item" href="login.html">
						<i class="ti ti-lock"></i> Logout
					</a>
				</div>
			</div>
			<!-- /Mobile Menu -->

		</div>
		<!-- /Header -->