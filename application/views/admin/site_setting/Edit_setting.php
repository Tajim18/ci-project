<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Side Setting</title>
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
                            <h6 class="mb-4">Site Settings</h6>
                            <form method="post" enctype="multipart/form-data">
							
							<input type="hidden" name="rowid" value="<?php echo $editdata[0]->id;?>">
							
							
							<div class="row">
                                <div class="mb-3 col-xl-6">
								<img src="<?php echo base_url();?>uploads/<?php echo $editdata[0]->logo;?>">
								
								<input type="hidden" value="<?php echo $editdata[0]->logo;?>" name="oldlogo">
								
                                    <label for="exampleInputEmail1" class="form-label">Upload logo</label>
                                    <input type="file" class="form-control" name="logo" id="exampleInputEmail1"
                                      aria-describedby="emailHelp">
									  
                                </div>
								 <div class="mb-3 col-xl-6">
								 
								 <img src="<?php echo base_url();?>uploads/<?php echo $editdata[0]->favicon;?>">
								 
								 <input type="hidden" value="<?php echo $editdata[0]->favicon;?>" name="oldfavicon">
								 
                                  <label for="exampleInputEmail1" class="form-label"> Uplode favicon</label>
                                   <input type="file" class="form-control" name="favicon" id="exampleInputEmail1"
                                     aria-describedby="emailHelp"> 
                                </div>
								
								<div class="mb-3 col-xl-6">
                                    <label for="exampleInputPassword1" class="form-label">Facebook page Url</label>
                                    <input type="text" class="form-control" name="url" id="exampleInputPassword1" value="<?php echo $editdata[0]->fb?>">
                                </div>
								
								<div class="mb-3 col-xl-6">
                                    <label for="exampleInputPassword1" class="form-label">X Page url</label>
                                    <input type="text" class="form-control" name="x" id="exampleInputPassword1" value="<?php echo $editdata[0]->tw?>">
                                </div>
								
									<div class="mb-3 col-xl-6">
                                    <label for="exampleInputPassword1" class="form-label">instagram page Url</label>
                                    <input type="text" class="form-control" name="insta" id="exampleInputPassword1" value="<?php echo $editdata[0]->insta?>">
                                </div>
								
									<div class="mb-3 col-xl-6">
                                    <label for="exampleInputPassword1" class="form-label">Youtube page Url</label>
                                    <input type="text" class="form-control" name="Youtube" id="exampleInputPassword1" value="<?php echo $editdata[0]->youtube?>">
                                </div>
								
									<div class="mb-3 col-xl-6">
                                    <label for="exampleInputPassword1" class="form-label">Telegram page Url</label>
                                    <input type="text" class="form-control" name="telegram" id="exampleInputPassword1" value="<?php echo $editdata[0]->telegram?>">
                                </div>
								
									<div class="mb-3 col-xl-6">
                                    <label for="exampleInputPassword1" class="form-label">Linkedin page Url</label>
                                    <input type="text" class="form-control" name="linkedin" id="exampleInputPassword1" value="<?php echo $editdata[0]->linkedin?>">
                                    </div>
									
									
									<div class="mb-3 col-xl-6">
                                    <label for="exampleInputPassword1" class="form-label">Primay Phone</label>
                                    <input type="text" name="phone" class="form-control" id="exampleInputPassword1" value="<?php echo $editdata[0]->phone2?>">
                                    </div>
									
									<div class="mb-3 col-xl-6">
                                    <label for="exampleInputPassword1" class="form-label">Whatsapp Phone</label>
                                    <input type="text" class="form-control" name="whatsapp" id="exampleInputPassword1" value="<?php echo $editdata[0]->phone1?>">
                                    </div>
									
									
									
									<div class="mb-3 col-xl-6">
                                    <label for="exampleInputPassword1" class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email" id="exampleInputPassword1" value="<?php echo $editdata[0]->email?>">
                                    </div>
									
									<div class="mb-3 col-xl-6">
                                    <label for="exampleInputPassword1" class="form-label">Address</label>
                                    <input type="text" class="form-control" name="address" id="exampleInputPassword1" value="<?php echo $editdata[0]->address?>">
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