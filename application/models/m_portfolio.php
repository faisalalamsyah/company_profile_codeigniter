<?php 
class M_portfolio extends CI_Model{

	public function get($id=null){
		$this->db->select('*');
		$this->db->from('tb_portfolio');
	if($id!=null){
		$this->db->where('id', $id);
	}
		$query = $this->db->get();
		return $query;
	}


	public function get_detail($table,$id,$val){
		return $this->db->get_where($table,array($id => $val))->row();}

		function data($number,$offset){
		return $query = $this->db->get('tb_portfolio',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		return $this->db->get('tb_portfolio')->num_rows();
	}


}
 ?>