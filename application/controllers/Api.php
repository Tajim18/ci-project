<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

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
	
	
	////********* Slider Start *************///
	
	public function allsliderapi()
	{
		$data['alldata']=$this->crud->fetchalldata('slider_api');
		
		echo json_encode('data');
	}
	
	public function addsliderapi()
	{
		date_default_timezone_set('Asia/Kolkata');
	    
		$filename=$_FILES['image']['name'];
	    $tempname=$_FILES['image']['tmp_name'];
		
		move_uploaded_file($tempname,'medai/uploads/'.$filename);

		$data['image']=$filename;
		$data['subheading']=$this->input->post('subheading');
		$data['heading']=$this->input->post('heading');
		$data['btnlink']=$this->input->post('url');
		$data['status']=$this->input->post('status');
		$data['created_at']=date('Y-m-d H:i:s');	
		$data['updated_at']=date('d-m-Y h:i:s');
		
		$this->crud->insert('slider_api',$data);
	}
	
	public function editsliderapi()
	{
		
	}
	
	public function deletesliderapi()
	{
		
	}
	
	
	////********* Slider End *************///

}
