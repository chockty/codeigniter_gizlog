<?php

class Daily_report_model extends CI_Model
{
		public function __construct()
		{
				$this->load->database('model');
		}

		public function insert_entry($request)
		{
				$today = date('Y-m-d H:i:s');

				$this->reporting_time = $request['reporting_time'];
				$this->title = $request['title'];
				$this->content = $request['content'];
				$this->created_at = $today;
				$this->updated_at = $today;

				$this->db->insert('daily_reports', $this);
		}

		public function get_daily_report($daily_report_id)
		{
				$query = $this->db->get_where('news', array('slug' => $daily_report_id));
				return var_dump($query);
				return $query->row_array();
		}
}
