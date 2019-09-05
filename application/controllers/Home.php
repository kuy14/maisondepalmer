<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mdMaison');
	}

	public function index()
	{
		$data['slider'] = $this->mdMaison->tampil_slider();

		$this->load->view('home',$data);
	}

	public function produk()
	{
		$data['produk'] = $this->mdMaison->tampil_produk();

		$this->load->view('produk',$data);
	}
}