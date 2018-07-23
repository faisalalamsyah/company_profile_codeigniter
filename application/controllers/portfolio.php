<?php 
class Portfolio extends CI_Controller{

function __construct(){
	parent::__construct();
	$this->load->model('m_portfolio');
	$this->load->model('m_contact');
	$this->load->model('m_about');
	$this->load->helper(array('url'));
}


	public function index()
	{	
		$this->load->database();
		$jumlah_data = $this->m_portfolio->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'portfolio/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 4;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['tb_portfolio'] = $this->m_portfolio->data($config['per_page'],$from);

		$query = $this->m_about->get();
		$query2 = $this->m_contact->get();
		$query3 = $this->m_portfolio->get();
		$query4 =$this->m_about->get();
		$data['logo'] = $query4->row('gambar');
		$data['nama'] = $query2->row('company');
		$data['title'] = 'Portfolio';
		$data['hasil'] = $query->result();
		$data['gambar'] = $query3->result();
		$data['judul'] = $query->row('judul');
		$data['konten'] = $query3->result();
		$this->load->helper('text');
		$this->load->view('vhead',$data);
		$this->load->view('vportfolio',$data);
		$this->load->view('vfooter');
		
	}

	public function detail($id,$slug)
	{
		$query = $this->m_about->get();
		$query2 = $this->m_contact->get();
//		$query3 = $this->m_portfolio->get();
		$data['nama'] = $query2->row('company');
//		$data['title'] = 'Portfolio';
//		$data['hasil'] = $query->result();
//		$data['gambar'] = $query3->result();
//		$data['judul'] = $query->row('judul');
//		$data['konten'] = $query3->result();
		$query4 =$this->m_about->get();
		$data['logo'] = $query4->row('gambar');
		$data['detail'] = $this->m_portfolio->get_detail('tb_portfolio','id',$id);
		//$this->load->helper('text');
		$this->load->view('vhead',$data);
		$this->load->view('vdetail',$data);
		$this->load->view('vfooter');
		
	}


}


 ?>