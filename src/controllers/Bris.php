<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bris extends CI_Controller {
	private $data;

	public function __construct()
	{
		parent::__construct();

		$this->load->helpers(['url']);
	}

	public function index()
	{
		redirect('gateway/bris/request');
	}

	public function request() {
		$this->data = [
			'status'				=> '0',
			'message'				=> 'Success',
			'ref_no'				=> date('ymdHis') . mt_rand(100, 999),
			'amount'				=> 10000,
			'dest_accno'			=> '1035055604545',
			'dest_accname'			=> 'D A N R A',
		];

		$this->output
			->set_content_type('application/json')
			->set_header('HTTP/1.1 200 OK')
			->set_header('Cache-Control: no-store, no-cache, must-revalidate')
			->set_header('Pragma: no-cache')
			->set_status_header(200)
			->set_output(json_encode($this->data), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
	}
}
