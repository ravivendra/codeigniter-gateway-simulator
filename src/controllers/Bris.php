<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bris extends MY_Controller {
	public function index() {
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

		$this->_render();
	}
}
