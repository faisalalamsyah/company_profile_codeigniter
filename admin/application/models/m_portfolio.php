<?php 
class M_portfolio extends Ci_Model{


	public function get($id=null)
	{
		$this->db->select('*');
		$this->db->from('tb_portfolio');
	//	$this->db->where('id_user',2);
	if($id!=null){
	$this->db->where('id', $id);
	}
		$query = $this->db->get();
		return $query;
	}

	public function add($data){

	$this->db->insert('tb_portfolio', $data);

}

	public function edit($data){

	$this->db->set($data);
	$this->db->where('id', $data['id']);
	$this->db->update('tb_portfolio');
	
}

	public function delete($id){
	$this->db->where('id', $id);
	$this->db->delete('tb_portfolio');
}

}
?>