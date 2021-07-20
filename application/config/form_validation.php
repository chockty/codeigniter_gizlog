<?php

$config = array(
    array(
        'field' => 'reporting_time',
        'label' => '日付',
        'rules' => 'required|regex_match[^[0-9]{4}/(0[1-9]|1[0-2])/(0[1-9]|[12][0-9]|3[01])$]|xss_clean',
    ),
		array(
				'field' => 'title',
        'label' => 'お名前',
        'rules' => 'required|max_length[255]',
		),
		array(
				'field' => 'content',
				'label' => '質問内容',
				'rules' => 'required|max_length[1000]',
		)
);
