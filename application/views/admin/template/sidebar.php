<!-- Sidebar -->
<div class="sidebar" id="sidebar">			
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<!-- <li class="clinicdropdown">
							<a href="profile.html">
								<img src="assets/img/profiles/avatar-14.jpg" class="img-fluid" alt="Profile">
								<div class="user-names">
									<h5><?= $admin['0']['name']?></h5>
									<h6><?= $admin['0']['company_name']?></h6>
								</div>
							</a>
						</li> -->
					</ul>
					<ul>
						<li>
							<h6 class="submenu-hdr">Main Menu </h6>
							<ul>
							
							<li>
									<a href="<?= base_url('Admin_Dashboard') ?>">
										<i class="ti ti-layout-navbar"></i><span>Dashboard</span>
									</a>
								</li>
								<li>
									<a href="<?= base_url('Admin_Dashboard/view_slider')?>">
										<i class="ti ti-layout-navbar"></i><span>Slider</span>
									</a>
								</li>
								
								<li class="submenu">
									<a href="#">
										<i class="ti ti-user-star"></i><span>Category</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										
										<li><a href="<?= base_url('Admin_Dashboard/add_category') ?>">Add Category</a></li>
										<li><a href="<?= base_url('Admin_Dashboard/view_category')?>">View Category</a></li>
										
									
									</ul>
								</li>
								
									<li class="submenu">
									<a href="#">
										<i class="ti ti-user-star"></i><span>Sub Category</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
									    	<li><a href="<?= base_url('Admin_Dashboard/add_sub_category')?>">Add Sub Category</a></li>
									<li><a href="<?= base_url('Admin_Dashboard/view_sub_category')?>">View Sub Category</a></li>
								
									
							
									</ul>
								</li>
								
								<li class="submenu">
									<a href="#">
										<i class="ti ti-user-star"></i><span>product</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
										
										<li><a href="<?= base_url('Admin_Dashboard/add_product')?>">Add Product</a></li>
										<li><a href="<?= base_url('Admin_Dashboard/view_product')?>">View Product</a></li>
																
									</ul>
								</li>
								<li class="submenu">
									<a href="#">
										<i class="ti ti-user-star"></i><span>Jobs</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
									    	<li><a href="<?= base_url('Admin_Dashboard/add_job')?>">Add Jobs</a></li>
									<li><a href="<?= base_url('Admin_Dashboard/view_job')?>">View Jobs</a></li>
									<li><a href="<?= base_url('Admin_Dashboard/view_application')?>">View Jobs Application</a></li>
		
									</ul>
								</li>
								<li class="submenu">
									<a href="#">
										<i class="ti ti-user-star"></i><span>Blogs</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
									    <li><a href="<?= base_url('Admin_Dashboard/view_blog')?>">View Blogs</a></li>
										<li><a href="<?= base_url('Admin_Dashboard/add_blog')?>">Add Blogs</a></li>
							
									</ul>
								</li>
								<li class="submenu">
									<a href="#">
										<i class="ti ti-user-star"></i><span>Latest News</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
									    <li><a href="<?= base_url('Admin_Dashboard/view_news')?>">View News</a></li>
										<li><a href="<?= base_url('Admin_Dashboard/add_news')?>">Add News</a></li>
							
									</ul>
								</li>
								<li class="submenu">
									<a href="#">
										<i class="ti ti-user-star"></i><span>Our Client</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
									    <li><a href="<?= base_url('Admin_Dashboard/view_client')?>">View Client</a></li>
										<li><a href="<?= base_url('Admin_Dashboard/add_client')?>">Add Client</a></li>
							
									</ul>
								</li>
								<li class="submenu">
									<a href="#">
										<i class="ti ti-user-star"></i><span>Our Industries</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
									    <li><a href="<?= base_url('Admin_Dashboard/view_industry')?>">View Industry</a></li>
										<li><a href="<?= base_url('Admin_Dashboard/add_industry')?>">Add Industry</a></li>
							
									</ul>
								</li>
								<li class="submenu">
									<a href="#">
										<i class="ti ti-user-star"></i><span>Video Gallery</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>
									    <li><a href="<?= base_url('Admin_Dashboard/view_video')?>">View Videos</a></li>
										<li><a href="<?= base_url('Admin_Dashboard/add_video')?>">Add Video</a></li>
							
									</ul>
								</li>
								
								<li class="submenu">
									<a href="#">
										<i class="ti ti-user-star"></i><span>Services</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>		
										<li><a href="<?= base_url('Admin_Dashboard/add_service')?>">Add Service</a></li>
										<li><a href="<?= base_url('Admin_Dashboard/view_service')?>">View Service</a></li>
									</ul>
								</li>
								
								<li class="submenu">
									<a href="#">
										<i class="ti ti-user-star"></i><span>Testimonials</span>
										<span class="menu-arrow"></span>
									</a>
									<ul>		
										<li><a href="<?= base_url('Admin_Dashboard/add_testimonials')?>">Add Testimonials</a></li>
										<li><a href="<?= base_url('Admin_Dashboard/testimonials')?>">View Testimonials</a></li>
									</ul>
								</li>
								<li>
									<a href="<?= base_url('Admin_Dashboard/contact')?>">
										<i class="ti ti-layout-navbar"></i><span>Customer Query</span>
									</a>
								</li>
								<li>
									<a href="<?= base_url('Admin_Dashboard/view_delarship')?>">
										<i class="ti ti-layout-navbar"></i><span>Delarship Query</span>
									</a>
								</li>
						<li>
							<h6 class="submenu-hdr">Settings</h6>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i class="ti ti-settings-cog"></i><span>General Settings</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="<?= base_url('Admin_Dashboard/profile')?>">Profile</a></li>
										<li><a href="<?= base_url('admin/logout') ?>">logout</a></li>
									
									</ul>
								</li>
								
							</ul>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
		<!-- /Sidebar -->