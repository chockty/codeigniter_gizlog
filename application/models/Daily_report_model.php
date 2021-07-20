<?php

class Daily_report_model extends CI_Model
{
		public function __construct()
		{
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
