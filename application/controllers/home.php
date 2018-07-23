<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

function __construct(){
	parent::__construct();
	$this->load->model('m_slide');
	$this->load->model('m_contact');
	$this->load->model('m_customer');
	$this->load->model('m_about');
	$this->load->model('m_portfolio');

}
	public function index()
	{
		$query =$this->m_slide->get();
		$query2 =$this->m_contact->get();
		$query3 =$this->m_customer->get();
		$query4 =$this->m_about->get();
		$query5 = $this->m_portfolio->get();
		$data['logo'] = $query4->row('gambar');
		$data['judul'] = $query4->row('judul');
		$data['deskripsi'] = $query4->row('deskripsi');
		$data['hasil'] = $query->result();
		$data['nama'] = $query2->row('company');
		$data['customer'] = $query3->result();
		$data['gambar'] = $query5->result();
		$this->load->helper('text');
		$this->load->view('vhead',$data);
		$this->load->view('slider', $data);
		$this->load->view('vhome', $data);
		$this->load->view('vfooter');
	}



}