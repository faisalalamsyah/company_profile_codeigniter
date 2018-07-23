<?php 
class M_about extends CI_Model{

	public function get($id=null){
		$this->db->select('*');
		$this->db->from('tb_about');
	if($id!=null){
		$this->db->where('id', $id);
	}
		$query = $this->db->get();
		return $query;
	}
}
 ?>
