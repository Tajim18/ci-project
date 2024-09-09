<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonials extends CI_Controller {

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
	public function alltestimonials()
	{
		$data['alldata']=$this->crud->fetchalldata('testimonials');
		
		$this->load->view('admin/testimonials/All_testimonials',$data);
	}
	
public function addtestimonials()
{
	if(isset($_POST['submit']))
	{
		date_default_timezone_set('Asia/Kolkata');
			
		$filename=$_FILES['image']['name'];
		$tempname=$_FILES['image']['tmp_name'];
			
		move_uploaded_file($tempname,'uploads/'.$filename);

		$data['image']=$filename;
			
		$data['name']=$this->input->post('name');	
		$data['profession']=$this->input->post('profession');	
		$data['description']=$this->input->post('description');	
		$data['status']=$this->input->post('status');
		$data['created_at']=date('Y-m-d H:i:s');	
		
			
		$result=$this->crud->insert('testimonials',$data);
		
		redirect('testimonials/Alltestimonials');
	}
		
		
		
		$this->load->view('admin/testimonials/Add_testimonials');
}
	
public function edit()
{
	$args=func_get_args();
		
	if(isset($_POST['submit']))
	{
		date_default_timezone_set('Asia/Kolkata');
		
		if($_FILES['image']['name']!='')
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
		$data['name']=$this->input->post('name');	
		$data['profession']=$this->input->post('profession');	
		$data['description']=$this->input->post('description');	
		$data['status']=$this->input->post('status');
		$data['updates_at']=date('d-m-Y h:i:s');
			
		$result=$this->crud->update('testimonials',$data,$args[0]);
		
		redirect('testimonials/Alltestimonials');
	}
	
	$data['editdata']=$this->crud->selectbycolumn('testimonials','id',$args[0]);
	
	//print_r($data['editdata']);
	
	$this->load->view('admin/testimonials/edittestimonials',$data);
		
}
	
	public function delete()
	{
		$args=func_get_args();
		
		$this->crud->delete('testimonials',$args[0]);
		
	}
	

}
