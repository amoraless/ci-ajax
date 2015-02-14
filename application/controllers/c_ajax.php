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
	public function fun_eliminar()
	{
		$this->load->model('m_perfil','tbl_perfil');

		$id=$_POST['pId'];
		$data=$this->tbl_perfil->eliminar($id);

		echo json_encode($data);
	}
}