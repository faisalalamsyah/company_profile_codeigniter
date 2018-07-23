<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller{

	

function __construct(){
	parent::__construct();
	$this->load->model('m_user');
}



	public function index()
	{
		//ini function tampil	
		$query = $this->m_user->get();
		//$data = $query->result();
		$data['title'] = 'User';
		$data['hasil'] = $query->result();

		$this->load->view('vhead');
		$this->load->view('vuser', $data);
		$this->load->view('v_modal_user');
		$this->load->view('vfooter');
		
		
	}


//ini function Tambah
public function proses(){
	
	if(isset($_POST['tambah'])){
		$user = $this->input->post('user');
		$password = $this->input->post('password');
		$data = array(
			'user' => $user,
			'password' => md5($password)
			);
		$this->m_user->add($data);
					
	} else if(isset($_POST['edit'])){
//		$inputan = $this->input->post(null, True);
//		$this->m_user->edit($inputan);
		$id = $this->input->post('iduser');
		$user = $this->input->post('user');
		$password = $this->input->post('password');
		
		$data = array(
			'id_user' => $id,
			'user' => $user,
			'password' => md5($password)
			);
		$this->m_user->edit($data);
	} 
	redirect('user');
}


public function delete($id){
	$this->m_user->delete($id);
	redirect('user');
}


}
 ?>