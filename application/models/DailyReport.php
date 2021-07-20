<?php

class DailyReport_model extends CI_Model
{
		public function __construct()
		{
				// CI_Model constructor の呼び出し
				parent::__construct();
				$this->load->database('model');
		}

		public function insert_entry($request)
		{
				$this->reporting_time = $request['reporting_time'];
				$this->title = $request['title'];
				$this->content = $request['content'];

				$this->db->insert('daily_reports', $this);
		}
}
