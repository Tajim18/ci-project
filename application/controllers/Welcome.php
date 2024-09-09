<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$data['allteam']=$this->crud->fetchalldata('team');
		
		$data['allsliderdata']=$this->crud->fetchalldata('slider');
		
		//print_r($data['allsliderdata']);
		
		$data['tesalldata']=$this->crud->fetchalldata('testimonials');
		$data['alldata']=$this->crud->fetchalldata('projects');
		
		$data['sidealldata']=$this->crud->fetchalldata('site_setting');
		
		
			
		$this->load->view('index',$data);
	}
	
	public function about()
	{
		
		
		
		
		$this->load->view('about');
	}
	
	public function service()
	{
		
		$data['alldata']=$this->crud->fetchalldata('service');
		
		$this->load->view('service',$data);
	}
	
	public function project()
	{
	    $data['alldata']=$this->crud->fetchalldata('projects');
		
		//print_r($data['alldata']);
		
		$this->load->view('project',$data);
	}
	
	public function contact()
	{
		$this->load->library('form_validation');
		
		if(isset($_POST['submit']))
		{
			
			
			date_default_timezone_set('Asia/Kolkata');
			
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$subject=$this->input->post('subject');
			$message=$this->input->post('message');
			$created_at=date('Y-m-d H:i:s');	
			
			
			
			
			$this->form_validation->set_rules('name', 'Name', 'required|min_length[3]');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('subject', 'Subject', 'required');
			$this->form_validation->set_rules('message', 'Message', 'required');
			
			if($this->form_validation->run() == TRUE)
			{
				$data['name']=$name;
				$data['email']=$email;
				$data['subject']=$subject;
				$data['message']=$message;
				
		// echo $name;
		// echo $email;
		// echo $subject;
		// echo $message;
				
				$this->crud->insert('enquriy',$data);
			}
			
		}
		
		
		$this->load->view('contact');
	}
	
	
	
}
