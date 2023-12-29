<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');

$name=$_POST['name'];
$surname=$_POST['surname'];

$response_array=['your_name'=>$name,'your_surname'=>$surname];
$response_json=json_encode($response_array);
echo $response_json;
die;
?>
