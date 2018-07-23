<?php 
class M_user extends CI_Model{
	

	public function get($id=null)
	{
		$this->db->select('*');
		$this->db->from('tb_user');
	//	$this->db->where('id_user',2);
	if($id!=null){
	$this->db->where('id_user', $id);
	}
		$query = $this->db->get();
		return $query;
	}


	public function add($data){

	$this->db->insert('tb_user', $data);

}


	public function edit($data){

	$this->db->set($data);
	$this->db->where('id_user', $data['id_user']);
	$this->db->update('tb_user');
	
}
 
public function delete($id){
	$this->db->where('id_user', $id);
	$this->db->delete('tb_user');
}


}