<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Home extends CI_controller{
	
	public function index(){
        log_message("info","************************* Hola Home#index");
		$data["titulo"] = "Agenda Web";

		$this -> load -> view("plantillas/header",$data);
		$this -> load -> view("Home/index");
		$this -> load -> view("plantillas/footer");
	}
}
?>
