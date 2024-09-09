<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>All Service</title>
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


            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">All Service</h6>
							 <div class="table-responsive">
                            <table class="table">
							
                                <thead>
                                    <tr>
                                        <th scope="col">s.no</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
										 <th scope="col">Url</th>
										 <th scope="col">discription</th>				 
										  <th scope="col">Status</th>
										  <th scope="col">added date</th>
										  <th scope="col">update date</th>
										  <th scope="col">Edit</th>
										  <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
                                  $i=1;
								foreach($all as $data){ ?>
                                    <tr>
                                        <th><?php echo $i;?></th>
                                        <th><img src="<?php echo base_url();?>uploads/<?php echo $data->image; ?>" style="height:50px;"></th>
                                        <th><?php echo $data->name;?></th>
                                        <th><?php echo $data->url;?></th>
                                        <th><?php echo $data->description;?></th>
                                        <th><?php echo $data->status;?></th>
                                        <th><?php echo $data->created_at;?></th>
										<th><?php echo $data->updated_at;?></th>
                                        <th><a href="<?php echo base_url('service/edit/'.$data->id); ?>" >edit</a></th>
                                        <th><a href="<?php echo base_url('service/delete/'.$data->id);?>" onclick="return confirm('Do you want this data')">delete</a></th>
                                        
                                    
                                    </tr>
								<?php $i++; } ?>
                                </tbody>
                            </table>
							</div>
                        </div>
                    </div>
                    
                    
                    
                
                </div>
            </div>
            <!-- Table End -->


             <?php $this->load->view('admin/includes/footer'); ?>
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

      <?php $this->load->view('admin/includes/script'); ?>
</body>

</html>