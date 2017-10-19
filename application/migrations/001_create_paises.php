<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Paises extends CI_Migration
{
	public function up()
	{
		//creamos la estructura de una tabla con un 
		//id autoincremental, un campo varchar para el username
		//y otro para el passwords también varchar
		$this->dbforge->add_field(
			array(
				"idpais"		=>		array(
					"type"				=>		"INT",
					"constraint"		=>		11,
					"unsigned"			=>		TRUE,
					"auto_increment"	=>		TRUE,

				),
				"pais_nom"	=>		array(
					"type"				=>		"VARCHAR",
					"constraint"		=>		100,
				),
			)
		);

		$this->dbforge->add_key('idpais', TRUE);//establecemos id como primary_key
		$this->dbforge->create_table('pais');//creamos la tabla users
	}

	public function down()
	{
		//eliminamos la tabla paises
		$this->dbforge->drop_table('pais');

	}
}
