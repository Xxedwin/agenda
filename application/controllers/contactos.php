<?php

class Contactos extends ci_controller{

	function __construct(){
		parent::__construct();
		$this->load->model('model_contactos');
		
	}
	
	public function index(){
		$data["titulo"] = "Pagina principal";
		$data["query"] = $this -> model_contactos -> getAll();

		$this -> load -> view("plantillas/header",$data);
		$this -> load -> view("contactos/index");
		$this -> load -> view("plantillas/footer");
	}
	public function Agregar(){	
		/*$data["titulo"] = "Pagina de Agregar";		*/
		$data['pais']=$this->model_contactos->getPais();
		$data['persona_vive']=$this->model_contactos->getPais();
		
		$this -> load -> view("plantillas/header");
		$this -> load -> view("contactos/Agregar",$data);
		$this -> load -> view("plantillas/footer");
	}
	public function Lasregiones(){
		$idpais = $this->input->post('idpais');

		if ($idpais) {
			$this->load->model('model_contactos');
			$region = $this->model_contactos->getRegion($idpais);
			echo '<option value="0">Regiones</option>';
			foreach ($region as $fila) {
				echo '<option value="'.$fila->idregion.'">'. $fila->region_nombre.'</option>';
			}
		} else{
			echo '<option value="0">Regiones</option>';
		}
	}

	public function AgregarContacto(){							

			$idregion	= $this->input->post("idregion");
			$idnombre	= $this->input->post("nnombre");
			$idpais	= $this->input->post("idpais");
			$idtelefono	= $this->input->post("ntelefono");
			$idmensaje	= $this->input->post("nmensaje");			
			$this->model_contactos->insertar($idregion,$idnombre,$idpais,$idtelefono,$idmensaje);
				
			}

}
?>








