<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

function __construct(){
	parent::__construct();
	$this->load->model('m_slide');
	$this->load->model('m_contact');
	$this->load->model('m_customer');
	$this->load->model('m_service');
	$this->load->model('m_about');
}
	public function index()
	{
		$query = $this->m_slide->get();
		$query2 = $this->m_service->get();
		$query3 =$this->m_contact->get();
		$query4 =$this->m_about->get();
		$data['logo'] = $query4->row('gambar');
		$data['hasil'] = $query2->result();
		$data['nama'] = $query3->row('company');
		$this->load->view('vhead',$data);
		$this->load->view('vservice', $data);
		$this->load->view('vfooter');
	}



}