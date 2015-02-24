<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_ajax extends CI_Controller {

	public function index()
	{
		$this->load->model('m_perfil','tbl_perfil');
		$data['alumnos']=$this->tbl_perfil->listar();

		$this->load->view("header");
		$this->load->view("ajax/form");
		$this->load->view("ajax/list",$data);
		$this->load->view("footer");
	}
	public function fun_guargar(){
		$this->load->model('m_modelo','tbl_perfil');
		$data = array('nombre' => $_POST['pNombre'],
					 'apellido' => $_POST['pApellido'],
					 'edad' => $_POST['pEdad'],
					 'estado'=>$_POST['pEstado']);
		
		$guardar=$this->tbl_perfil->insert($data);

		$data['alumnos']=$this->tbl_perfil->listar();
		$this->load->view('ajax/list',$data);
	}
	public function fun_eliminar()
	{
		$this->load->model('m_perfil','tbl_perfil');

		$id=$_POST['pId'];
		$data=$this->tbl_perfil->eliminar($id);

		echo json_encode($data);
	}
}