<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

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
	public function allteam()
	{
		
		$data['alldata']=$this->crud->fetchalldata('team');
		
		$this->load->view('admin/team/All_team',$data);
	}
	
public function addteam()
{
		
	if(isset($_POST['submit']))
	{
		date_default_timezone_set('Asia/Kolkata');
			
		$filename=$_FILES['image']['name'];
		$tempname=$_FILES['image']['tmp_name'];
			
		move_uploaded_file($tempname,'uploads/'.$filename);

		$data['image']=$filename;
			
		$data['name']=$this->input->post('name');
		$data['desingnation']=$this->input->post('des');
		$data['status']=$this->input->post('status');
		$data['created_at']=date('Y-m-d H:i:s');	
		
			
		$result=$this->crud->insert('team',$data);
			
		redirect('team/allteam');
	}
		
		$this->load->view('admin/team/Add_team');
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
		$data['name']=$this->input->post('name');
		$data['desingnation']=$this->input->post('des');
		$data['status']=$this->input->post('status');
		$data['updates_at']=date('Y-m-d H:i:s');
			
			$result=$this->crud->update('team',$data,$args[0]);
			
			redirect('team/allteam');
		}
		
		$data['editdata']=$this->crud->selectbycolumn('team','id',$args[0]);
		
		$this->load->view('admin/team/editteam',$data);
	}
	
	public function delete()
	{
		$args=func_get_args();
		
	   //print_r($args);
		//redirect('team/allteam');
		$this->crud->delete('team',$args[0]);
	}
	

}
