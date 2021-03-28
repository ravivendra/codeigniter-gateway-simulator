<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alto extends MY_Controller {
	public function index() {
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

		$this->_render();
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

		$this->_render();
	}
}
