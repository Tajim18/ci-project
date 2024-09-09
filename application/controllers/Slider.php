<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
public function allslider()
{
	
	$data['alldata']=$this->crud->fetchalldata('slider');
	
   $this->load->view('admin/slider/All_slider',$data);
		
}
	
public function addslider()
{
		
		if(isset($_POST['submit']))
		{
			
			 date_default_timezone_set('Asia/Kolkata');
			
			$filename=$_FILES['image']['name'];
			$tempname=$_FILES['image']['tmp_name'];
			
			move_uploaded_file($tempname,'uploads/'.$filename);

			$data['image']=$filename;
			
			$data['subheading']=$this->input->post('subheading');
			$data['heading']=$this->input->post('heading');
			$data['btnlink']=$this->input->post('url');
			$data['status']=$this->input->post('status');
			$data['created_at']=date('Y-m-d H:i:s');	
			$data['updated_at']=date('d-m-Y h:i:s');
			 
			 
			$result=$this->crud->insert('slider',$data); 
			
			 redirect('slider/allslider');
		}
		
		 $this->load->view('admin/slider/Add_slider');
}
	
public function edit()
{
	
	$args=func_get_args();
	
		if(isset($_POST['submit']))
		{
			 date_default_timezone_set('Asia/Kolkata');
			
			if($_FILES['image']['name']!="")
			{
				$filename=$_FILES['image']['name'];
			$tapm=$_FILES['image']['tmp_name'];
			
			move_uploaded_file($tapm,'uploads/'.$filename);
			}
			
			else
			{
				$filename=$this->input->post('oldimg');
			}
			
			$data['image']=$filename;
			$data['subheading']=$this->input->post('subheading');
			$data['heading']=$this->input->post('heading');
			$data['btnlink']=$this->input->post('url');
			$data['status']=$this->input->post('status');
			$data['created_at']=date('Y-m-d H:i:s');	
			$data['updated_at']=date('d-m-Y h:i:s');

			 
			$result=$this->crud->update('slider',$data,$args[0]); 
			
			 redirect('slider/allslider');
		}
		
		$data['editdata']=$this->crud->selectbycolumn('slider','id',$args[0]);
		
		$this->load->view('admin/slider/editslider',$data);
}
	
public function delete()
{
	
	$args=func_get_args();
	
	//print_r($args);
	
	//redirect('slider/allslider');
	
	$this->crud->delete('slider',$args[0]);
		
}
	

}
