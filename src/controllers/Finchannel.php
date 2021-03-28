<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finchannel extends MY_Controller {
	public function index() {
		redirect('gateway/finchannel/request');
	}

	public function request() {
		$this->data = [
			'resultCode'			=> '0',
			'resultDesc'			=> 'Success',
			'refCode'				=> date('ymdHis') . mt_rand(100, 999),
			'sysCode'				=> date('ymdHis') . mt_rand(100, 999),
			'amount'				=> 10000,
			'recipientNo'			=> '1035055604545',
			'recipientName'			=> 'D A N R A',
		];

		$this->_render();
	}
}
