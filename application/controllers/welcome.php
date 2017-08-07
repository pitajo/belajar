<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()

	{
		$this->load->view('beranda');
	}

	public function loginpelamar()
	{
		$this->load->view('masukjs');
	}

	public function mendaftarpelamar()
	{
		$this->load->view('mendaftar_pelamar');
	}

	public function mendaftarpelamar1()
	{
		$this->load->view('mendaftar_pelamar1');
	}

	public function dashboardjs()
	{
		$this->load->view('dashboard_js(1)');
	}

	public function bacaselengkapnya()
	{
		$this->load->view('baca_selengkapnyacoba');
	}
}
