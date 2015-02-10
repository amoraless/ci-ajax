<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('m_modelo','tbl_perfil');
		$data['alumnos']=$this->tbl_perfil->listar();

		$this->load->view('header');
		$this->load->view('list',$data);
		$this->load->view('footer');
	}
	public function get($id=""){
		$this->load->model('m_modelo','tbl_perfil');
		$data=($id=="")?"":$this->tbl_perfil->get($id);	
	
		$this->load->view('header');
		$this->load->view('form',$data);
		$this->load->view('footer');
	}
	public function actions($id=""){
		$this->load->model('m_modelo','tbl_perfil');
		$data = array('nombre' => $_POST['nombre'],
					 'apellido' => $_POST['apellido'],
					 'edad' => $_POST['edad'],
					 'estado'=>$_POST['estado']);
		if($id==""){
			$this->tbl_perfil->insert($data);
		}else{
		$this->tbl_perfil->update($id,$data);
		}
		$this->index();
			
	}
	public function form_buscar(){
		$this->load->view('header');
		$this->load->view('form_buscar');
		$this->load->view('footer');
	}
	public function buscar(){
		$this->load->model('m_modelo','tbl_perfil');
		
		$buscar=$_POST['pBuscar'];
		$data = $this->tbl_perfil->buscar($buscar);

		echo json_encode($data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */