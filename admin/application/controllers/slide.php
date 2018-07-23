<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Slide extends CI_Controller{

	

function __construct(){
	parent::__construct();
	$this->load->model('m_slide');
}



	public function index()
	{
//ini function tampil	
		$query = $this->m_slide->get();
		$query1 = $this->m_slide->aktif();
		$data = $query->result();
		$data['title'] = 'Slide Banner';
		$data['hasil'] = $query->result();
		$data['aktif'] = $query1->result();

		$this->load->view('vhead');
		$this->load->view('vslide', $data);
		$this->load->view('vfooter');
		
		
	}


//ini function Tambah
public function proses(){
	
	if(isset($_POST['tambah'])){
		$nama = $this->input->post('nama');
		$pict1 = $_FILES['gambar1']['name'];
		$pict2 = $_FILES['gambar2']['name'];

		$ekstensi1 = explode(".", $_FILES['gambar1']['name']);
		$ekstensi2 = explode(".", $_FILES['gambar2']['name']);

		$gambar1 = "slide1-".round(microtime(true)).".".end($ekstensi1);
		$gambar2 = "slide2-".round(microtime(true)).".".end($ekstensi2);

		$sumber1 = $_FILES['gambar1']['tmp_name'];
		$sumber2 = $_FILES['gambar2']['tmp_name'];

		$upload1 = move_uploaded_file($sumber1, "../assets/img/slide/".$gambar1);
		$upload2 = move_uploaded_file($sumber2, "../assets/img/slide/".$gambar2);
		
		if($upload1 || $upload2) {
			$data = array(
			'nama' =>$nama, 
			'gambar' =>$gambar1,
			'gambar_png'=>$gambar2);
			$this->m_slide->add($data);
			
		} 
		else {
			echo "<script>alert('upload gagal')</script>";
			}
			redirect('slide');
		}
	}

public function aktif(){
	
	if(isset($_POST['aktif'])){
		$aktif = $this->input->post('aktif');
			$data = array(
			'aktif' =>$aktif);
			$this->m_slide->add($data); }
			
		else {
			echo "<script>alert('upload gagal')</script>";
			}
			redirect('slide');
		}


	public function edit(){
		$id = $this->input->post('idslide');
		$nama = $this->input->post('nama');
		$pict1 = $_FILES['gambar1']['name'];
		$pict2 = $_FILES['gambar2']['name'];

		$ekstensi1 = explode(".", $_FILES['gambar1']['name']);
		$ekstensi2 = explode(".", $_FILES['gambar2']['name']);

		$gambar1 = "slide1-".round(microtime(true)).".".end($ekstensi1);
		$gambar2 = "slide2-".round(microtime(true)).".".end($ekstensi2);

		$sumber1 = $_FILES['gambar1']['tmp_name'];
		$sumber2 = $_FILES['gambar2']['tmp_name'];
		if($pict1 == '' && $pict2 == ''){
			$data = array(
			'id' => $id,
			'nama' =>$nama);
			$this->m_slide->edit($data);
			
		}
		else {
//			$gambar_awal = $this->m_slide->get($id)->fetch_object()->$gambar;
//			unlink("assets/img/slide/".$gambar_awal);
		$upload1 = move_uploaded_file($sumber1, "../assets/img/slide/".$gambar1);
		$upload2 = move_uploaded_file($sumber2, "../assets/img/slide/".$gambar2);
		}

		if($pict1 !=null ) {
			$data = array(
			'id' => $id,
			'nama' =>$nama, 
			'gambar' =>$gambar1);
			$this->m_slide->edit($data);	
		}

		if($pict2 !=null ) {
			$data = array(
			'id' => $id,
			'nama' =>$nama,
			'gambar_png' =>$gambar2);
			$this->m_slide->edit($data);	
		}
echo "<script>window.location='?page=slide';</script>";
	}


	public function delete($id){
	$this->m_slide->delete($id);
	redirect('slide');
	}
					
} 
