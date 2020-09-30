<?php
include ('dbclass.php');
$obj = new database;



$id = $_GET['id'];

$res=$obj->product($id);
$res2=$obj->product_images($id);

$data['product_details'] = mysqli_fetch_assoc($res);
$data['images'] = mysqli_fetch_assoc($res2);



print_r($data);


?>   