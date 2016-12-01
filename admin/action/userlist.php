<?php
$data = array(
	array(
		"id" => 1,
		"username" => "鲁尼",
		"telephone" => "12345678901",
		"password" => "123",
		"sex" => '男',
		"info" => "用户简介"
	),
	array(
		"id" => 2,
		"username" => "马塔",
		"telephone" => "12345678901",
		"password" => "123",
		"sex" => '男',
		"info" => "用户简介"
	),
	array(
		"id" => 3,
		"username" => "卢克肖",
		"telephone" => "12345678901",
		"password" => "123",
		"sex" => '男',
		"info" => "用户简介"
	),
	array(
		"id" => 4,
		"username" => "卡里克",
		"telephone" => "12345678901",
		"password" => "123",
		"sex" => '男',
		"info" => "用户简介"
	),
	array(
		"id" => 5,
		"username" => "施奈德林",
		"telephone" => "12345678901",
		"password" => "123",
		"sex" => '男',
		"info" => "用户简介"
	)
);
$result = array(
	"errno" => 0,
	"data" => $data
);
echo json_encode($result);