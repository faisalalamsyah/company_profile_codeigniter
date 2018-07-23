<?php 
class About extends CI_Controller{

function __construct(){
	parent::__construct();
	$this->load->model('m_about');
		$this->load->model('m_contact');
}


	public function index()
	{
		//ini function tampil	
		$query = $this->m_about->get();
		$query2 = $this->m_contact->get();
		$query4 =$this->m_about->get();
		$data['logo'] = $query4->row('gambar');
		$data['nama'] = $query2->row('company');
		$data['title'] = $query->row('page');
		$data['hasil'] = $query->result();
		$data['gambar'] = $query->row('gambar');
		$data['judul'] = $query->row('judul');
		$this->load->view('vhead',$data);
		$this->load->view('vabout', $data);
		$this->load->view('vfooter');
		
	}


}


 ?>