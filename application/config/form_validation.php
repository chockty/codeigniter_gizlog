<?php

// 本実装では使用しませんが残しておきます。
// ユーザ定義のcallbackのルール以外はこのファイルで定義することによってコントローラで呼び出せる。

$config = array(
    'post' => array(
		array(
        'field' => 'reporting_time',
        'label' => '日付',
        'rules' => 'required|callback_check_input_date',
				'errors' => array (
					'required' => '入力必須の項目です。',
					'check_input_date' => '今日以前の日付を選択してください。'
				)
    ),
		array(
				'field' => 'title',
        'label' => 'お名前',
        'rules' => 'required|max_length[255]',
				'errors' => array (
					'required' => '入力必須の項目です。',
					'max_length' => '{param}文字以内で入力してください。'
				)
		),
		array(
				'field' => 'content',
				'label' => '質問内容',
				'rules' => 'required|max_length[1000]',
				'errors' => array (
					'required' => '入力必須の項目です。',
					'max_length' => '{param}文字以内で入力してください。'
				)
		)
	)
);

