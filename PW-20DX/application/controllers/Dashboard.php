<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function index()
	{
		//memanggil auto load
		//$this->load->library(array('session','email'));
		//$this->load->helper(array('captcha'));
		
		// pengiriman parameter ke "view"
		// 1 dengan variabel (array)
		//$data["nama"] = "Udin";
		//$data["kelas"] = "IF 20 DX";

		// 2 dengan arrow function (array)
		$data = array(
			"nama" => "Udin",
			"kelas" => "IF 20 DX",
			"jurusan" => "Informatika",
			"telepon" => "081366701242",
			"kelamin" => "Laki-Laki"
		);


		$this->load->view('dashboard_vw',$data);
	}

	function kirim_konstan()
	{
		$this->load->view('dashboard2_vw');
	}
}
