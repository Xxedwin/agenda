<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Regiones extends CI_Migration
{
	public function up()
	{
		//creamos la estructura de una tabla con un 
		//id autoincremental, un campo varchar para el username
		//y otro para el passwords también varchar
		$this->dbforge->add_field(
			array(
				"idregion"		=>		array(
					"type"				=>		"INT",
					"constraint"		=>		11,
					"unsigned"			=>		TRUE,
					"auto_increment"	=>		TRUE,

				),
				"region_nombre"	=>		array(
					"type"				=>		"VARCHAR",
					"constraint"		=>		100,
				),
				"idpais"		=>		array(
					"type"				=>		"INT",
					"constraint"		=>		11,
					"unsigned"			=>		TRUE,
				),
			)
		);

		$this->dbforge->add_key('idregion', TRUE);//establecemos id como primary_key
		$this->dbforge->create_table('region');//creamos la tabla users
	}

	public function down()
	{
		//eliminamos la tabla regiones
		$this->dbforge->drop_table('region');

	}
}

