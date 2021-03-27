<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alto extends CI_Controller {
	private $data;

	public function __construct()
	{
		parent::__construct();

		$this->load->helpers(['url']);
	}

	public function index()
	{
		redirect('gateway/alto/inquiry');
	}

	public function inquiry() {
		$this->data = [
			'statusCode'			=> '00',
			'accountNo'				=> '1035055604545',
			'accountName'			=> 'D A N R A',
			'reference'				=> date('ymdHis') . mt_rand(100, 999),
			'message'				=> 'Success',
			'stan'					=> (string) mt_rand(100000, 999999)
		];

		$this->output
			->set_content_type('application/json')
			->set_header('HTTP/1.1 200 OK')
			->set_header('Cache-Control: no-store, no-cache, must-revalidate')
			->set_header('Pragma: no-cache')
			->set_status_header(200)
			->set_output(json_encode($this->data), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
	}

	public function request() {
		$this->data = [
			'statusCode'			=> '00',
			'virtualAccountNumber'	=> '1035055604545',
			'accountNo'				=> '1035055604545',
			'accountName'			=> 'D A N R A',
			'accountCbc'			=> '008',
			'amount'				=> 10000,
			'message'				=> 'Success',
			'reference'				=> date('ymdHis') . mt_rand(100, 999),
			'altoRef'				=> date('ymdHis') . mt_rand(100, 999),
			'stan'					=> (string) mt_rand(100000, 999999)
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
