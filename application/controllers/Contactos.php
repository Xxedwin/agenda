<?php

class Contactos extends ci_controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Model_Contactos');
		
	}
	
	public function index(){
		$data["titulo"] = "Pagina principal";
		$data["query"] = $this -> Model_Contactos -> getAll();

		$this -> load -> view("plantillas/header",$data);
		$this -> load -> view("contactos/index");
		$this -> load -> view("plantillas/footer");
	}

	public function Agregar(){	
		/*$data["titulo"] = "Pagina de Agregar";		*/
		$data['pais']=$this->Model_Contactos->getPais();
		$data['persona_vive']=$this->Model_Contactos->getPais();
		
		$this -> load -> view("plantillas/header");
		$this -> load -> view("contactos/Agregar",$data);
		$this -> load -> view("plantillas/footer");
	}

	public function Lasregiones(){
		$idpais = $this->input->post('idpais');

		if ($idpais) {
			$this->load->model('Model_Contactos');
			$region = $this->Model_Contactos->getRegion($idpais);
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

        if( $idnombre == "" ){
            echo json_encode(["error", "Llene los datos"]);
        }  else {
            $this->Model_Contactos->insertar($idregion,$idnombre,$idpais,$idtelefono,$idmensaje);
            echo json_encode(["ok", "Ingresado correctamente."]);
        }
    }

}
?>








