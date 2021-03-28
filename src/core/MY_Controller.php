<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	protected $data;

	public function __construct() {
		parent::__construct();

		$this->load->helpers(['url']);
	}

	protected function _render() {
		$this->output
			->set_content_type('application/json')
			->set_header('HTTP/1.1 200 OK')
			->set_header('Cache-Control: no-store, no-cache, must-revalidate')
			->set_header('Pragma: no-cache')
			->set_status_header(200)
			->set_output(json_encode($this->data), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
	}
}
