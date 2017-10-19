<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Migrations extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->library('migration');

		//this->migration->version(2)ejecutará el método up de
		//las migraciones 001 y 002 y el método down de las superiores
		if(!$this->migration->version(3)){
            show_error($this->migration->error_string());
			echo "error";
		}else{
			echo "success";
		}
	}
}
