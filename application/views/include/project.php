  <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Our Projects</p>
                <h1 class="display-5 mb-5">We've Done Lot's of Awesome Projects</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
			
			<?php foreach($alldata as $data)
			
			{?>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="<?php echo base_url()?>uploads/<?php echo $data->image?>" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="<?php echo base_url()?>uploads/<?php echo $data->image?>"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href=""><?php echo $data->heading?></a>
                        <span><?php echo $data->description?></span>
                    </div>
                </div>
				
			<?php }?>

            </div>
        </div>
    </div>