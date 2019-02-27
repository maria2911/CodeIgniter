<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	// tambah function - client web service, to insert actor data
	function newactor() 
	{
		$client = new GuzzleHttp\Client();
		$url = 'http://localhost:8080/Codeigniter3/index.php/actorController/add';
		$data = [
			'form_params' => [
				'first_name' =>'john',
				'last_name' => 'Doe'
			]
		];
		$res = $client->request('POST', $url, $data);
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
}
