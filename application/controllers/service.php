<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

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
	public function allservice()
	{
		$data['all']=$this->crud->fetchalldata('service'); 
		$this->load->view('admin/service/All_service',$data);
		
	}
	
public function addservice()
{
		
	if(isset($_POST['submit']))
	{
		date_default_timezone_set('Asia/Kolkata');
		
		$filename=$_FILES['image']['name'];
		$tapm=$_FILES['image']['tmp_name'];
		
		move_uploaded_file($tapm,'uploads/'.$filename);

		$data['image']=$filename; 
		$data['name']=$this->input->post('name');
		$data['description']=$this->input->post('description');
		$data['url']=$this->input->post('url');
		$data['status']=$this->input->post('status');
		$data['created_at']=date('d-m-Y h:i:s');

		$result=$this->crud->insert('service',$data);

        redirect('service/allservice');
	}
		
		$this->load->view('admin/service/Add_service');
}
	
public function edit()
{
	$args=func_get_args();
		
	if(isset($_POST['submit']))
	{
		date_default_timezone_set("Asia/Kolkata");
			
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
		$data['name']=$this->input->post('name');
		$data['description']=$this->input->post('description');
		$data['url']=$this->input->post('url');
		$data['status']=$this->input->post('status');
		$data['updated_at']=date('d-m-Y h:i:s');
			
		$result=$this->crud->update('service',$data,$args[0]);
			
	    redirect('service/allservice');
	}
		
		$data['editdata']=$this->crud->selectbycolumn('service','id',$args[0]);
		
		$this->load->view('admin/service/editservice',$data);
}
	
	public function delete()
	{	
		$args=func_get_args();
		
		$this->crud->delete('service',$args[0]);
	}
	

}
