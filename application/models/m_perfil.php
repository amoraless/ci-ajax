<?php 
class M_perfil extends CI_Model {
	public function listar(){
		$this->db->select("*");
		$query = $this->db->get('perfil');

		return $query->result_array();
	}
	public function eliminar($id){
		$data=array("id"=>$id);
		$query=$this->db->delete('perfil',$data);
		return $query;
	}
	public function insert($data){
		
		$query=$this->db->insert('perfil', $data);

		

		return $query;

	}
}