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



}

 ?>