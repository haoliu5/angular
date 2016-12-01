<?php
$data = array(
	"id" => 1,
	"title" => "国足夺冠啦~",
	"writer" => "雄心小胖",
	"date" => 1455808822088,
	"content" => "国足奇迹般夺冠了"
);
$result = array(
	"errno" => 0,
	"data" => $data
);
echo json_encode($result);