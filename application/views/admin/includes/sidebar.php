<!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
				<a href="<?php echo base_url('admin/deshbord')?>" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
				
                    <a href="<?php echo base_url('admin/sitesetting');?>" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Site_Setting</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Slider</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="<?php echo base_url('slider/addslider');?>" class="dropdown-item">Add Slider</a>
                            <a href="<?php echo base_url('slider/allslider');?>" class="dropdown-item">All Slider</a>
                           
                        </div>
                    </div>
					
					<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Services</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="<?php echo base_url('service/addservice');?>" class="dropdown-item">Add Services</a>
                            <a href="<?php echo base_url('service/allservice');?>" class="dropdown-item">All Services</a>
                           
                        </div>
                    </div>
					
					<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Project</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="<?php echo base_url('project/addproject');?>" class="dropdown-item">Add project</a>
                            <a href="<?php echo base_url('project/allproject');?>" class="dropdown-item">All Project</a>
                           
                        </div>
                    </div>
					
					<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Team</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="<?php echo base_url('team/addteam');?>" class="dropdown-item">Add Team</a>
                            <a href="<?php echo base_url('team/allteam');?>" class="dropdown-item">All Team Members</a>
                           
                        </div>
                    </div>
					
					<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Testimonials</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="<?php echo base_url('testimonials/addtestimonials');?>" class="dropdown-item">Add Testimonials</a>
                            <a href="<?php echo base_url('testimonials/alltestimonials');?>" class="dropdown-item">All Testimonials</a>
                           
                        </div>
                    </div>
				
                     
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->