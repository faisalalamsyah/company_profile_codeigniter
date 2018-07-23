<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class About extends CI_Controller{


function __construct(){
	parent::__construct();
	$this->load->model('m_about');
}


	public function index()
	{
			//ini function tampil	
		$query = $this->m_about->get();
	
		$data['title'] = 'Form About';
		$data['hasil'] = $query->result();
		$this->load->helper('text');
		$this->load->view('vhead');
		$this->load->view('vabout', $data);
		$this->load->view('vfooter');
		
	}

		public function edit(){
		$id = $this->input->post('idpage');
		$page = $this->input->post('page');
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$pict = $_FILES['gambar']['name'];
		$ekstensi = explode(".", $_FILES['gambar']['name']);
		$gambar = "page-".round(microtime(true)).".".end($ekstensi);
		$sumber = $_FILES['gambar']['tmp_name'];
		if($pict == ''){
			$data = array(
			'id' => $id,
			'page' =>$page,
			'judul'=>$judul,
			'deskripsi' =>$deskripsi
			);
			$this->m_about->edit($data);
			
		}
		else {
//			$gambar_awal = $this->m_slide->get($id)->fetch_object()->$gambar;
//			unlink("assets/img/slide/".$gambar_awal);
		$upload = move_uploaded_file($sumber, "assets/img/slide/".$gambar);
		if($upload) {
			$data = array(
			'id' => $id,
			'page' =>$page,
			'judul'=>$judul,
			'deskripsi' =>$deskripsi, 
			'gambar' =>$gambar);
			$this->m_about->edit($data);	
		}

		}
echo "<script>window.location='?page=about';</script>";
	}
}