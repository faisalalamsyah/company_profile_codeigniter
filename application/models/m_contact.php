<?php 
class M_contact extends CI_Model{

	public function get($id=null){
		$this->db->select('*');
		$this->db->from('tb_company');
	if($id!=null){
		$this->db->where('id', $id);
	}
		$query = $this->db->get();
		return $query;
	}


}
 ?>
