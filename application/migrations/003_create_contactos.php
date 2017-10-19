<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Contactos extends CI_Migration
{
	public function up()
	{
		//creamos la estructura de una tabla con un 
		//id autoincremental, un campo varchar para el username
		//y otro para el passwords también varchar
		$this->dbforge->add_field(
			array(
				"idcontacto"		=>		array(
					"type"				=>		"INT",
					"constraint"		=>		11,
					"unsigned"			=>		TRUE,
					"auto_increment"	=>		TRUE,
				),
				"Nombre"	=>		array(
					"type"				=>		"VARCHAR",
					"constraint"		=>		100,
				),
				"Telefono"	=>		array(
					"type"				=>		"VARCHAR",
					"constraint"		=>		100,
				),
				"persona_vive"	=>		array(
					"type"				=>		"BOOLEAN",
				),
				"idpais"		=>		array(
					"type"				=>		"INT",
					"constraint"		=>		11,
					"unsigned"			=>		TRUE,
				),
				"idregion"		=>		array(
					"type"				=>		"INT",
					"constraint"		=>		11,
					"unsigned"			=>		TRUE,
				),
				"mensaje"		=>		array(
					"type"				=>		"VARCHAR",
					"constraint"		=>		100,
				),
			)
		);

		$this->dbforge->add_key('idcontacto', TRUE);//establecemos id como primary_key
		$this->dbforge->create_table('contactos');//creamos la tabla users
	}

	public function down()
	{
		//eliminamos la tabla contactoes
		$this->dbforge->drop_table('contactos');

	}
}
