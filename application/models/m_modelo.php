<?php 
class M_modelo extends CI_Model {
	public function listar(){
		$this->db->select("*");
		$query = $this->db->get('perfil');

		return $query->result_array();
	}
	public function get($id){
		$this->db->select("*");
		$this->db->where("id",$id);
		$query = $this->db->get('perfil');
		$data=array();
		foreach ($query->result_array() as $row) {
			$data=array(
				"id"=>$row["id"],
				"nombre"=>$row["nombre"],
				"apellido"=>$row["apellido"],
				"edad"=>$row["edad"],
				"estado"=>$row["estado"]
				);
		}
		return $data;
	}
	public function insert($data){
		
		$this->db->insert('perfil', $data);
	}
	public function update($id,$data){

		$this->db->where('id', $id);
		$this->db->update('perfil', $data);
	}
	public function delete(){

	}
	public function buscar($buscar){
		$this->db->select("*");
		$this->db->like("nombre",$buscar);
		$query = $this->db->get('perfil');

		return $query->result_array();
	}
}