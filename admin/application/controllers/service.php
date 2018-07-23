<?php 

class Service extends CI_Controller
{
	
	function __construct()
	{
	parent::__construct();
	$this->load->model('m_service');
	}

	public function index()
	{
			//ini function tampil	
		$query = $this->m_service->get();
		$query1 = $this->m_service->aktif();
		$data['title'] = 'Service';
		$data['hasil'] = $query->result();
		$data['aktif'] = $query1->result();
		$this->load->helper('text');
		$this->load->view('vhead');
		$this->load->view('vservice', $data);
		$this->load->view('vfooter');
	}


	public function proses(){
	
	if(isset($_POST['tambah'])){
		$service = $this->input->post('service');
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$ekstensi = explode(".", $_FILES['gambar']['name']);
		$gambar = "service-".round(microtime(true)).".".end($ekstensi);
		$sumber = $_FILES['gambar']['tmp_name'];
		$upload = move_uploaded_file($sumber, "assets/img/service/".$gambar);
		
		if($upload) {
			$data = array(
			'service' =>$service,
			'judul' =>$judul,
			'deskripsi' => $deskripsi,
			'gambar' =>$gambar);
			$this->m_service->add($data);
			
		} 
		else {
			echo "<script>alert('upload gagal')</script>";
			}
			redirect('service');
		}
	}


		public function edit(){
		$id = $this->input->post('id');
		$service = $this->input->post('service');
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$pict = $_FILES['gambar']['name'];
		$ekstensi = explode(".", $_FILES['gambar']['name']);
		$gambar = "service".round(microtime(true)).".".end($ekstensi);
		$sumber = $_FILES['gambar']['tmp_name'];
		if($pict == ''){
			$data = array(
			'id' => $id,
			'service' =>$service,
			'judul' =>$judul,
			'deskripsi' =>$deskripsi);
			$this->m_service->edit($data);
			
		}
		else {
//			$gambar_awal = $this->m_slide->get($id)->fetch_object()->$gambar;
//			unlink("assets/img/slide/".$gambar_awal);
			$upload = move_uploaded_file($sumber, "assets/img/service/".$gambar);
		if($upload) {
			$data = array(
			'id' => $id,
			'service' =>$service,
			'judul' =>$judul,
			'deskripsi' =>$deskripsi,
			'gambar' => $gambar);
			$this->m_service->edit($data);
		}

		}
echo "<script>window.location='?page=service';</script>";
	}

		public function delete($id){
		$this->m_service->delete($id);
		//sredirect('service');	
	}

}
 ?>