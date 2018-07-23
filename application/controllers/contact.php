<?php 

class Contact extends CI_Controller {

function __construct(){
	parent::__construct();
	$this->load->model('m_contact');
	$this->load->model('m_about');
}


	public function Index()
	{
		$query = $this->m_contact->get();
		$query4 =$this->m_about->get();
		$data['logo'] = $query4->row('gambar');
		$data ['hasil'] = $query->row();
		$data['nama'] = $query->row('company');
		$this->load->view('vhead', $data);
		$this->load->view('vcontact',$data);
		$this->load->view('vfooter');
	}

}

 ?>