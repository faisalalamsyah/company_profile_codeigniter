<?php 
class M_slide extends CI_Model{
	

	public function get($id=null)
	{
		$this->db->select('*');
		$this->db->from('tb_slide');
	//	$this->db->where('id_user',2);
	if($id!=null){
	$this->db->where('id', $id);
	}
		$query = $this->db->get();
		return $query;
	}


	public function get_slider(){
	return $this->db->get('tb_slide');
}



	public function add($data){

	$this->db->insert('tb_slide', $data);

}


	public function edit($data){

	$this->db->set($data);
	$this->db->where('id', $data['id']);
	$this->db->update('tb_slide');
	
}
 

}