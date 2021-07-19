<?php

class Migrate extends CI_Controller
{
    public function __construct()
		{
			  parent::__construct();
			  $this->load->library('migration');
		}

    public function current()
    {
        if ($this->migration->current()) {
					  log_message('success', 'Migration Success.');
        } else {
					  show_error($this->migration->error_string());
				}
    }

		public function rollback($version)
    {
        if ($this->migration->version($version)) {
					  log_message('success', 'Migration Success.');
        } else {
					  show_error($this->migration->error_string());
				}
    }

		public function latest()
    {
        if ($this->migration->latest()) {
					  log_message('success', 'Migration Success.');
        } else {
					  show_error($this->migration->error_string());
				}
    }

}
