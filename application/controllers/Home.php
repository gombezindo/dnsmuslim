<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index($page = 'home')
	{
		$data['title'] = ucfirst('DNS MUSLIM | YOUR MUSLIM WEAR | Beranda'); // Capitalize the first letter
			$this->load->view('templates/header', $data);
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer', $data);
			/*$this->load->view('templates/header');
			$this->load->view('pages/home');
			$this->load->view('templates/footer');
			*/
	}
	
	public function view($page = 'home')
	{
			if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
			{
					// Whoops, we don't have a page for that!
					show_404();
			}

			$data['title'] = ucfirst($page); // Capitalize the first letter

			$this->load->view('templates/header', $data);
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer', $data);
	}
}
