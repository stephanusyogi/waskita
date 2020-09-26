<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('text');
		$this->load->model('mhome');
	}

	function index()
	{
		$data['tampilberita'] = $this->mhome->get_data_berita();
		$this->load->view('index', $data);
	}

	function berita()
	{
		$this->load->view('berita');
	}

	function visimisi()
	{
		$data['tampilberita'] = $this->mhome->get_data_beritan();
		$this->load->view('visimisi', $data);
	}

	function news($id)
	{
		$where= array('id_berita' => $id);
		$data['tampilberita'] = $this->mhome->get_data_beritan();
		$data['detail_berita'] = $this->mhome->detailnews($where);
		$this->load->view('berita', $data);
	}

	// Box Berita Page
	function boxberita()
	{
		$this->load->view('boxberita');
	}

	// Detail berita page
	function detailberita()
	{
		$this->load->view('detailberita');
	}

	// Hubungi Kami Page
	function hubungikami()
	{
		$this->load->view('hubungikami');
	}

    // Page Direct
	function direct()
	{
		$this->load->view('direct');
	}

}