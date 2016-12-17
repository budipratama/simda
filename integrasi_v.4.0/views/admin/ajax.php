<?php
// header('Content-Type: application/json');
foreach ($content as $key => $value) {
	$data[] = "{$value->id},{$value->Kd_1},{$value->Uraian}";
}
$datas = ['data'=> array($data)];
echo json_encode($datas);