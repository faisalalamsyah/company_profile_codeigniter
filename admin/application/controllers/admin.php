<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller{


	public function index()
	{
	
		
		$data['title'] = 'Dashboard';
		$this->load->view('vhead');
		$this->load->view('vadmin', $data);
		$this->load->view('vfooter');
		
		
	}
}
 ?>