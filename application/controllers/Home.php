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
		$data['slider'] = $this->mdMaison->tampil_slider()->result();

		$this->load->view('home',$data);
	}

	public function produk()
	{
		$data['produk'] = $this->mdMaison->tampil_produk()->result();
		
		$this->load->view('produk',$data);
	}

	public function detail_produk($nama_url)
	{
		$where = array('nama_url' => $nama_url);
		$data['produk'] = $this->mdMaison->edit($where,'produk')->result();

		$this->load->view('detail',$data);
	}
	
	public function search()
	{
		$i = $this->input;
		$keyword = $i->post('Search');

		if ($keyword) {
			$data['produk'] = $this->mdMaison->search($keyword);
	
			$this->load->view('produk',$data);
		} elseif ($keyword == 0) {
			redirect('Home/produk');
		}
	}

    public function about()
    {
        $this->load->view('about');
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function alasan()
	{
		$this->load->view('alasan');
	}

	public function cara()
	{
		$this->load->view('cara');
	}

	public function teknologi()
	{
		$this->load->view('teknologi');
	}
}