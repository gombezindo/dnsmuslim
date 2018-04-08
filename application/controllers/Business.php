<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Business extends CI_Controller {


	public function index($page = 'business')
	{
		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
		{
				show_404();
		}

		$data['title'] = ucfirst('DNS MUSLIM | YOUR MUSLIM WEAR | Beranda'); // Capitalize the first letter
		$data['tab'] = '';$data['tab1'] = '';$data['tab2'] = '';$data['tab3'] = '';

		if ($page == 'home') {
			$data['tab'] = 'class="active"';
		}elseif ($page == 'products') {
			$data['tab1'] = 'class="active"';
		}elseif ($page == 'business') {
			$data['tab2'] = 'class="active"';
		}elseif ($page == 'about') {
			$data['tab3'] = 'class="active"';
		}

			$this->load->view('templates/header', $data);
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer', $data);

	}
}
