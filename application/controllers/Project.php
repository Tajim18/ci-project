<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

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
	
public function addproject()
{

        if(isset($_POST['submit']))
		{
		    date_default_timezone_set('Asia/Kolkata');
			
		    $filename=$_FILES['image']['name'];
            $tempname=$_FILES['image']['tmp_name'];

		    move_uploaded_file($tempname,'uploads/'.$filename);

		    $data['image']=$filename;
			$data['heading']=$this->input->post('heading');
			$data['link']=$this->input->post('url');
			$data['description']=$this->input->post('description');
			$data['status']=$this->input->post('status');
			$data['created_at']=date('Y-m-d H:i:s');
			
			$result=$this->crud->insert('projects',$data);
		
	        redirect('project/allproject');
		
		}



    $this->load->view('admin/projects/Add_project');
}
	
public function allproject()
{
	
	$data['alldata']=$this->crud->fetchalldata('projects');
	
    
	$this->load->view('admin/projects/All_project',$data);
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
            $tempname=$_FILES['image']['tmp_name'];

		    move_uploaded_file($tempname,'uploads/'.$filename);
			} 
			
			else
			{
				$filename=$this->input->post('oldimg');
			}
			
		    $data['image']=$filename;
			$data['heading']=$this->input->post('heading');
			$data['link']=$this->input->post('url');
			$data['description']=$this->input->post('description');
			$data['status']=$this->input->post('status');
			$data['updates_at']=date('Y-m-d H:i:s');
			
			$result=$this->crud->update('projects',$data,$args[0]);
		
	        redirect('project/allproject');
		
	}

       $data['editdata']=$this->crud->selectbycolumn('projects','id',$args[0]);
            
     $this->load->view('admin/projects/editproject',$data);
}
	
public function delete()
{
	
	$args=func_get_args();
	
	$this->crud->delete('projects',$args[0]);
	
	
}


}
