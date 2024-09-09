<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Add Testimonials</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

      <?php $this->load->view('admin/includes/css'); ?>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        


        <?php $this->load->view('admin/includes/sidebar'); ?>


        <!-- Content Start -->
        <div class="content">
            <?php $this->load->view('admin/includes/navbar'); ?>


            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
				
				  <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Testimonials </h6>
                            <form method="post" enctype="multipart/form-data">
							<div class="row">
							
                                <div class="mb-3 col-xl-12">
                                    <label for="exampleInputEmail1" class="form-label">Upload image</label>
                                    <input type="file" class="form-control" name="image" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    
                                </div>
								 
								 
								
								<div class="mb-3 col-xl-6">
                                    <label for="exampleInputPassword1" class="form-label">Name</label>
                                    <input type="text"name="name" class="form-control" id="exampleInputPassword1">
                                </div>
								
								<div class="mb-3 col-xl-6">
                                    <label for="exampleInputPassword1" class="form-label">Profession</label>
                                    <input type="text" class="form-control" name="profession" id="exampleInputPassword1">
                                </div>
								
									<div class="mb-3 col-xl-7">
                                    <label for="exampleInputPassword1" class="form-label">Description
									</label>
                                    <textarea name="description" ></textarea>
                                </div>
								
									<div class="mb-3 col-xl-5">
                                    <label for="exampleInputPassword1" class="form-label">Status</label>
                                  
								  <select class="form-select"name="status">
								  <option value="">Select Status </option>
								  <option value="1">Active</option>
								  <option value="0">Inactive</option>
								  
								  </select>
								  
                                </div>	
								</div>
                                
                         
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
				
				
                </div>
            </div>
            <!-- Form End -->


           <?php $this->load->view('admin/includes/footer'); ?>
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php $this->load->view('admin/includes/script'); ?>
</body>

</html>