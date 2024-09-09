<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>All Testimonials</title>
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
                            <h6 class="mb-4">All Testimonials</h6>
							 <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
										 <th scope="col">Profession</th>
										 <th scope="col">Description</th>
										  <th scope="col">Status</th>
										  <th scope="col">Edit</th>
										  <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
								
								<?php 
								$i=1;
								foreach($alldata as $data)
								
								{?>
                                    <tr>
                                        <th><?php echo $i;?></th>
                                        <td><img src="<?php echo base_url()?>uploads/<?php echo $data->image; ?>" style="height:50px"></td>
                                        <td><?php echo $data->name?></td>
                                        <td><?php echo $data->profession?></td>
                                        <td><?php echo $data->description?></td>
                                        <td><?php echo $data->status?></td>
                                        <td><a href="<?php echo base_url('testimonials/edit/'.$data->id)?>">Edit</a></td>
                                        <td><a href="<?php echo base_url('testimonials/delete/'.$data->id);?>" onclick="return confirm('Do You want to delete data')">Delete</a></td>
                                    </tr>
                                   <?php $i++; }?> 
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