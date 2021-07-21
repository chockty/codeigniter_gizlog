<?php

class DailyReport extends CI_Controller {

		public function __construct()
		{
				parent::__construct();
				$this->load->model('daily_report_model');
				$this->load->helper('url_helper');
		}

		public function create()
		{
				$this->load->helper('form');
				$this->load->library('form_validation');

				$this->load->view('common/user');
				$this->load->view('user/create');
		}

		public function store()
		{
				$this->load->library('form_validation');

				$this->form_validation->set_rules('reporting_time', '日付', 'required|callback_check_input_date', [
					'required' => '入力必須の項目です。',
					'check_input_date' => '今日以前の日付を選択してください。'
				]);
				$this->form_validation->set_rules('title', '日付', 'required|max_length[255]', [
					'required' => '入力必須の項目です。',
					'max_length' => '{param}文字以内で入力してください。'
				]);
				$this->form_validation->set_rules('content', '日付', 'required|max_length[1000]', [
					'required' => '入力必須の項目です。',
					'max_length' => '{param}文字以内で入力してください。'
				]);

				if ($this->form_validation->run() === FALSE) {
					$this->load->view('common/user');
					$this->load->view('user/create');
				} else {
					$this->daily_report_model->insert_entry($this->input->post());
					return 'success';
					// $this->load->view('common/user');
					// $this->load->view('user/index');
				}
		}
		
		public function check_input_date($date)
    {
        $today = date("Y/m/d");
        if ($today < $date | isset($date)) {
           return TRUE;
        }

        $this->form_validation->set_message('check_input_date', '今日以前の日付を選択してください。');
        return FALSE;
    }
		
		public function show($daily_report_id)
		{
				$data['news_item'] = $this->daily_report_model->get_daily_report($daily_report_id);

				if (empty($data['news_item']))
				{
								show_404();
				}

				return 'test';
		}
}
