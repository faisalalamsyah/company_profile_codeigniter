<?php 
class M_company extends CI_Model{
	

	public function get($id=null)
	{
		$this->db->select('*');
		$this->db->from('tb_company');
	//	$this->db->where('id_user',2);
	if($id!=null){
	$this->db->where('id', $id);
	}
		$query = $this->db->get();
		return $query;
	}


	public function add($data){

	$this->db->insert('tb_company', $data);

}


	public function edit($data){
	$this->db->set($data);
	$this->db->where('id', $data['id']);
	$this->db->update('tb_company');
	
}
 

}
?>