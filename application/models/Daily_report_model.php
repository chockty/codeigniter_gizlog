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
				$query = $this->db->get_where('daily_reports', array('id' => $daily_report_id));
				return $query->row_array();
		}

		public function update_entry($daily_report_id)
		{
				$today = date('Y-m-d H:i:s');

				$data = array(
						'reporting_time' => $_POST['reporting_time'],
						'title' => $_POST['title'],
						'content' => $_POST['content'],
						'updated_at' => $today
				);

				$this->db->update('daily_reports', $data, ['id' => $daily_report_id]);
		}
}
