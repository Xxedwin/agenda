<?php
/**
* 
*/
class Model_Contactos extends CI_model
{

	function insertar($idregion,$idnombre,$idpais,$idtelefono,$idmensaje)
	{
		$data=array();

		$sql = "			
			select 	
				persona_vive 
			from 
				dbo.persona_viveT 
			where 
				idregion='$idregion' 
				and idpais='$idpais'
		";

		$query=$this->db->query($sql);
		$persona_vive=$query->result_array();
		$persona_vive=$persona_vive[0]['persona_vive'];

		$aa = "
				insert into 
					dbo.contactos
					  (
						  idregion
						  ,Nombre
						  ,Telefono
						  ,idpais
						  ,mensaje				  
						  ,persona_vive
						  
					  )
				values
					  (
						  '$idregion'
						  ,'$idnombre'
						  ,'$idtelefono'			  
						  ,'$idpais'			  
						  ,'$idmensaje'
						  ,'$persona_vive'		  				  			 
						  
					  )  
		";
		
		$querry=$this->db->query($aa);	

	}
	function getAll(){
		$query = $this -> db -> get("contactos");
		return $query -> result();
	}
	public function getPais(){
	$this->db->order_by('pais_nom','asc');
	$pais=$this->db->get('pais');

		if ($pais->num_rows() > 0) {
			return $pais->result();
		}
	}	

	public function getRegion($idpais){
	$this->db->where('idpais',$idpais);
	$this->db->order_by('region_nombre','asc');
	$region=$this->db->get('region');

		if ($region->num_rows() > 0) {
			return $region->result();
		}
	}

}
?>