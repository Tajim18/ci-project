<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Edit Team</title>
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
                            <h6 class="mb-4"> Team</h6>
                            <form method="post" enctype="multipart/form-data">
							<div class="row">
                                <div class="mb-3 col-xl-12">
								<img src="<?php echo base_url()?>uploads<?php echo $editdata[0]->image?>">
								<input name="oldimg" value="<?php echo $editdata[0]->image; ?>" type="hidden">
								
                                    <label for="exampleInputEmail1" class="form-label">Upload image</label>
                                    <input type="file" class="form-control" name="image" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    
                                </div>
								
								<div class="mb-3 col-xl-6">
                                    <label for="exampleInputPassword1" class="form-label">Name</label>
                                    <input type="text" value="<?php echo $editdata[0]->name;?>" class="form-control" name="name" id="exampleInputPassword1">
                                </div>
								
								<div class="mb-3 col-xl-6">
                                    <label for="exampleInputPassword1" class="form-label">desingnation</label>
                                    <input type="text" value="<?php echo $editdata[0]->desingnation;?>" name="des" class="form-control" id="exampleInputPassword1">
                                </div>
							
								
									<div class="mb-3 col-xl-5">
                                    <label for="exampleInputPassword1" class="form-label">Status</label>
                                  
								  <select class="form-select" name="status">
								  <option value="">Select Status </option>
								  <option value="1"<?php if($editdata[0]->status=='1')echo 'selected'?>>Active</option>
								  <option value="0" <?php if($editdata[0]->status=='0')echo 'selected'?>>Inactive</option>
								  
								  </select>
								  
                                </div>
									
								</div>
                                <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
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