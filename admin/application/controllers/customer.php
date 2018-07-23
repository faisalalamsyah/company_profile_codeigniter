<?php 
/**
* 
*/
class Customer extends CI_Controller
{
	
	function __construct()
	{
	parent::__construct();
	$this->load->model('m_customer');
	}

	public function index()
	{
			//ini function tampil	
		$query = $this->m_customer->get();
	
		$data['title'] = 'Our Happy Customer';
		$data['hasil'] = $query->result();

		$this->load->view('vhead');
		$this->load->view('vcustomer', $data);
		$this->load->view('vfooter');
	}

	public function proses(){
	
	if(isset($_POST['tambah'])){
		$customer = $this->input->post('customer');
		$website = $this->input->post('website');
		$ekstensi = explode(".", $_FILES['gambar']['name']);
		$gambar = "customer-".round(microtime(true)).".".end($ekstensi);
		$sumber = $_FILES['gambar']['tmp_name'];
		$upload = move_uploaded_file($sumber, "assets/img/customer/".$gambar);
		
		if($upload) {
			$data = array(
			'customer' =>$customer,
			'website' =>$website, 
			'gambar' =>$gambar);
			$this->m_customer->add($data);
			
		} 
		else {
			echo "<script>alert('upload gagal')</script>";
			}
			redirect('customer');
		}
	}


		public function edit(){
		$id = $this->input->post('id');
		$customer = $this->input->post('customer');
		$website = $this->input->post('website');
		$pict = $_FILES['gambar']['name'];
		$ekstensi = explode(".", $_FILES['gambar']['name']);
		$gambar = "customer".round(microtime(true)).".".end($ekstensi);
		$sumber = $_FILES['gambar']['tmp_name'];
		if($pict == ''){
			$data = array(
			'id' => $id,
			'customer' =>$customer,
			'website' =>$website);
			$this->m_customer->edit($data);
			
		}
		else {
//			$gambar_awal = $this->m_slide->get($id)->fetch_object()->$gambar;
//			unlink("assets/img/slide/".$gambar_awal);
			$upload = move_uploaded_file($sumber, "assets/img/customer/".$gambar);
		if($upload) {
			$data = array(
			'id' => $id,
			'customer' =>$customer,
			'website' =>$website, 
			'gambar' =>$gambar);
			$this->m_customer->edit($data);	
		}

		}
echo "<script>window.location='?page=customer';</script>";
	}


	public function delete($id){
	$this->m_customer->delete($id);
	redirect('customer');
	}

}
 ?>