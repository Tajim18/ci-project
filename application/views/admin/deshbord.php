<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashbord</title>
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


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
				
                    <div class="col-sm-6 col-xl-12">
                        <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Name</th>
										 <th scope="col">Email</th>
										 <th scope="col">Subject</th>
										  <th scope="col">Message</th>
										  
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
                                     
                                        <td><?php echo $data->name?></td>
                                        <td><?php echo $data->email?></td>
                                        <td><?php echo $data->subject?></td>
                                        <td><?php echo $data->message?></td>
                                        
                                        <td><a href="<?php echo base_url('admin/deshbord/delete/'.$data->id); ?>" onclick="return confirm('Do You want to delete data')">Delete</a></td>
                                    </tr>
								<?php $i++;}?>
                                </tbody>
                            </table>
                    </div>
                 
                 
                 
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Worldwide Sales</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="worldwide-sales"></canvas>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Salse & Revenue</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="salse-revenue"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sales Chart End -->



           
<?php $this->load->view('admin/includes/footer'); ?>

            
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php $this->load->view('admin/includes/script'); ?>
</body>

</html>