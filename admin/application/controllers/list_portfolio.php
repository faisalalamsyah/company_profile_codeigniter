<?php 

class List_portfolio extends Ci_controller{
	
	function __construct(){
	parent::__construct();
	$this->load->model('m_portfolio');
	$this->load->model('m_user');
}

	public function index()
	{
		$query = $this->m_portfolio->get();
		$data['hasil'] = $query->result();
		$data['title'] = 'List Portfolio';
		//ini function tampil	
		$this->load->view('vhead');
		$this->load->view('vlistportfolio',$data);
		$this->load->view('vfooter');	
	}

	public function proses(){
	
	if(isset($_POST['tambah'])){
		$this->load->helper('url');
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$slug = url_title($judul,'_',true); 
		$i=0;

		$pict1 = $_FILES['gambar1']['name'];
		$pict2 = $_FILES['gambar2']['name'];
		$pict3 = $_FILES['gambar3']['name'];
		$pict4 = $_FILES['gambar4']['name'];
		$pict5 = $_FILES['gambar5']['name'];
		
		$ekstensi1 = explode(".", $_FILES['gambar1']['name']);
		$ekstensi2 = explode(".", $_FILES['gambar2']['name']);
		$ekstensi3 = explode(".", $_FILES['gambar3']['name']);
		$ekstensi4 = explode(".", $_FILES['gambar4']['name']);
		$ekstensi5 = explode(".", $_FILES['gambar5']['name']);
		
		$gambar1 = "portfolio1-".round(microtime(true)).".".end($ekstensi1);
		$gambar2 = "portfolio2-".round(microtime(true)).".".end($ekstensi2);
		$gambar3 = "portfolio3-".round(microtime(true)).".".end($ekstensi3);
		$gambar4 = "portfolio4-".round(microtime(true)).".".end($ekstensi4);
		$gambar5 = "portfolio5-".round(microtime(true)).".".end($ekstensi5);
		
		$sumber1 = $_FILES['gambar1']['tmp_name'];
		$sumber2 = $_FILES['gambar2']['tmp_name'];
		$sumber3 = $_FILES['gambar3']['tmp_name'];
		$sumber4 = $_FILES['gambar4']['tmp_name'];
		$sumber5 = $_FILES['gambar5']['tmp_name'];

		$upload1 = move_uploaded_file($sumber1, "assets/img/portfolio/".$gambar1);
		$upload2 = move_uploaded_file($sumber2, "assets/img/portfolio/".$gambar2);
		$upload3 = move_uploaded_file($sumber3, "assets/img/portfolio/".$gambar3);
		$upload4 = move_uploaded_file($sumber4, "assets/img/portfolio/".$gambar4);
		$upload5 = move_uploaded_file($sumber5, "assets/img/portfolio/".$gambar5);
		
		if($upload1 || $upload2 || $upload3 || $upload4 || $upload5) {
			$data = array(
			'judul' =>$judul,
			'slug' =>$slug,
			'deskripsi' =>$deskripsi, 
			'gambar1' =>$gambar1,
			'gambar2' =>$gambar2,
			'gambar3' =>$gambar3,
			'gambar4' =>$gambar4,
			'gambar5' =>$gambar5);
			$this->m_portfolio->add($data);
			
		} 
		else {
			echo "<script>alert('upload gagal')</script>";
			}
			
			redirect('List_portfolio');
		}

	}


		public function edit(){
		$this->load->helper('url');
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$slug = url_title($judul,'_',true);
		$deskripsi = $this->input->post('deskripsi'); 
		$pict1 = $_FILES['gambar1']['name'];
		$pict2 = $_FILES['gambar2']['name'];
		$pict3 = $_FILES['gambar3']['name'];
		$pict4 = $_FILES['gambar4']['name'];
		$pict5 = $_FILES['gambar5']['name'];

		$ekstensi1 = explode(".", $_FILES['gambar1']['name']);
		$ekstensi2 = explode(".", $_FILES['gambar2']['name']);
		$ekstensi3 = explode(".", $_FILES['gambar3']['name']);
		$ekstensi4 = explode(".", $_FILES['gambar4']['name']);
		$ekstensi5 = explode(".", $_FILES['gambar5']['name']);

		$gambar1 = "portfolio1-".round(microtime(true)).".".end($ekstensi1);
		$gambar2 = "portfolio2-".round(microtime(true)).".".end($ekstensi2);
		$gambar3 = "portfolio3-".round(microtime(true)).".".end($ekstensi3);
		$gambar4 = "portfolio4-".round(microtime(true)).".".end($ekstensi4);
		$gambar5 = "portfolio5-".round(microtime(true)).".".end($ekstensi5);


		$sumber1 = $_FILES['gambar1']['tmp_name'];
		$sumber2 = $_FILES['gambar2']['tmp_name'];
		$sumber3 = $_FILES['gambar3']['tmp_name'];
		$sumber4 = $_FILES['gambar4']['tmp_name'];
		$sumber5 = $_FILES['gambar5']['tmp_name'];


		if($pict1 == '' && $pict2 == '' && $pict3 == '' && $pict4 == '' && $pict5 == ''){
			$data = array(
			'id' => $id,
			'judul' =>$judul,
			'slug' =>$slug,
			'deskripsi' =>$deskripsi);
			$this->m_portfolio->edit($data);
			
		}
		else {
//			$gambar_awal = $this->m_slide->get($id)->fetch_object()->$gambar;
//			unlink("assets/img/slide/".$gambar_awal);
		$upload1 = move_uploaded_file($sumber1, "assets/img/portfolio/".$gambar1);
		$upload2 = move_uploaded_file($sumber2, "assets/img/portfolio/".$gambar2);
		$upload3 = move_uploaded_file($sumber3, "assets/img/portfolio/".$gambar3);
		$upload4 = move_uploaded_file($sumber4, "assets/img/portfolio/".$gambar4);
		$upload5 = move_uploaded_file($sumber5, "assets/img/portfolio/".$gambar5);
		}

		if($pict1 !=null ) {
			$data = array(
			'id' => $id,
			'judul' =>$judul,
			'slug' =>$slug,
			'deskripsi' =>$deskripsi,
			'gambar1' =>$gambar1);
			$this->m_portfolio->edit($data);	
		}

		if($pict2 !=null ) {
			$data = array(
			'id' => $id,
			'judul' =>$judul,
			'slug' =>$slug,
			'deskripsi' =>$deskripsi,
			'gambar2' =>$gambar2);
			$this->m_portfolio->edit($data);	
		}

		if($pict3 !=null ) {
			$data = array(
			'id' => $id,
			'judul' =>$judul,
			'slug' =>$slug,
			'deskripsi' =>$deskripsi,
			'gambar3' =>$gambar3);
			$this->m_portfolio->edit($data);	
		}

		if($pict4 !=null ) {
			$data = array(
			'id' => $id,
			'judul' =>$judul,
			'slug' =>$slug,
			'deskripsi' =>$deskripsi,
			'gambar4' =>$gambar4);
			$this->m_portfolio->edit($data);	
		}

		if($pict5 !=null ) {
			$data = array(
			'id' => $id,
			'judul' =>$judul,
			'slug' =>$slug,
			'deskripsi' =>$deskripsi,
			'gambar5' =>$gambar5);
			$this->m_portfolio->edit($data);	
		}


redirect('list_portfolio');
	}

	public function delete($id){
		$this->m_portfolio->delete($id);
		redirect('list_portfolio');	
	}

}
 ?>