<?php
class DailyReport extends CI_Controller {

		public function create()
		{
				$this->load->helper('form');
				$this->load->library('form_validation');
				$this->load->view('user/create');
				$this->load->view('common/user');
		}

		public function store()
		{
				var_dump('test');
		}
}
