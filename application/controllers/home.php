<?php
/**
* 
*/
class Home extends CI_controller{
	
	public function Index(){
		$data["titulo"] = "Agenda Web";

		$this -> load -> view("plantillas/header",$data);
		$this -> load -> view("Home/index");
		$this -> load -> view("plantillas/footer");
	}
}
?>