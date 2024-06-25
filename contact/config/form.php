<?php

return array (
	array (
		'field' => 'class',
		'label' => 'ご相談内容',
		'rules' => 'trim|required',
		'options' => array('資料ダウンロード', 'その他お問い合わせ')
	),
	array (
		'field' => 'name',
		'label' => 'お名前',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'company',
		'label' => '会社名',
		'rules' => 'trim|required'
	),
	array (
		'field' => 'tel',
		'label' => '電話番号',
		'rules' => 'trim|required|tel'
	),
	array (
		'field' => 'email',
		'label' => 'メールアドレス',
		'rules' => 'trim|required|email'
	),
	array (
		'field' => 'agreement',
		'label' => 'プライバシーポリシーに同意する',
		'rules' => 'required',
		'options' => array('プライバシーポリシーに同意する')
	),
	array (
		'field' => 'employee',
		'label' => '従業員規模（単体）',
		'rules' => 'trim'
	),
	array (
		'field' => 'comment',
		'label' => 'お問い合わせ内容',
		'rules' => 'trim'
	),
);
