<?php 
class M_customer extends CI_Model{
	

	
	public function get($id=null)
	{
		$this->db->select('*');
		$this->db->from('tb_customer');
	//	$this->db->where('id_user',2);
	if($id!=null){
	$this->db->where('id', $id);
	}
		$query = $this->db->get();
		return $query;
	}


	public function add($data){

	$this->db->insert('tb_customer', $data);

}


	public function edit($data){

	$this->db->set($data);
	$this->db->where('id', $data['id']);
	$this->db->update('tb_customer');
	
}

public function delete($id){
	$this->db->where('id', $id);
	$this->db->delete('tb_customer');
}



}
 ?>