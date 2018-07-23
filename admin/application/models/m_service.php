<?php 
class M_service extends CI_Model{
	

	
	public function get($id=null)
	{
		$this->db->select('*');
		$this->db->from('tb_service');
	//	$this->db->where('id_user',2);
	if($id!=null){
	$this->db->where('id', $id);
	}
		$query = $this->db->get();
		return $query;
	}


	public function add($data){

	$this->db->insert('tb_service', $data);

}


	public function edit($data){

	$this->db->set($data);
	$this->db->where('id', $data['id']);
	$this->db->update('tb_service');
	
}

	public function delete($id){
	$this->db->where('id', $id);
	$this->db->delete('tb_service');
	}

	public function aktif($aktif='active')
	{
		$this->db->select('*');
		$this->db->from('tb_service');
	//	$this->db->where('id_user',2);
	if($aktif!=null){
	$this->db->where('aktif', $aktif);
	}
		$query = $this->db->get();
		return $query;
	}

}
 ?>