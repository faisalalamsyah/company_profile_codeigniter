<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Company extends CI_Controller{


function __construct(){
	parent::__construct();
	$this->load->model('m_company');
	$this->load->model('m_user');
}


	public function index()
	{
			//ini function tampil	
		$query = $this->m_company->get();
	
		$data['title'] = 'Form Company';
		$data['hasil'] = $query->result();

		$this->load->view('vhead');
		$this->load->view('vcompany', $data);
		$this->load->view('vfooter');
		
	}

		public function edit(){

		$id = $this->input->post('id');
		$company = $this->input->post('company');
		$alamat = $this->input->post('alamat');
		$phone = $this->input->post('phone');
		$instagram = $this->input->post('instagram');
		$twitter = $this->input->post('twitter');
		$facebook = $this->input->post('facebook');
		$google_maps = $this->input->post('google_maps');
		$email = $this->input->post('email');
			$data = array(
			'id' => $id,
			'company' => $company,
			'alamat' => $alamat,
			'phone' => $phone,
			'instagram' => $instagram,
			'twitter' => $twitter,
			'facebook' => $facebook,
			'google_maps' => $google_maps,
			'email' => $email 
			);
		
		$this->m_company->edit($data);
		echo "<script>window.location='?page=company';</script>";
	}

	public function tambah(){
if (isset($_POST['tambah'])) {
		$id = $this->input->post('id');
		$company = $this->input->post('company');
		$alamat = $this->input->post('alamat');
		$phone = $this->input->post('phone');
		$instagram = $this->input->post('instagram');
		$twitter = $this->input->post('twitter');
		$facebook = $this->input->post('facebook');
		$google_maps = $this->input->post('google_maps');
		$email = $this->input->post('email');

			$data = array(
			'id' => $id,
			'company' => $company,
			'alamat' => $alamat,
			'phone' => $phone,
			'instagram' => $instagram,
			'twitter' => $twitter,
			'facebook' => $facebook,
			'google_maps' => $google_maps,
			'email' => $email 
			);
			$this->m_company->add($data);
}
redirect('company');
	}


}