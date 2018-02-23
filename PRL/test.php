<?php

include_once '../BLL/store.php';

$store_name = $_GET['store_name'];
$area_id = $_GET['area_id'];
$complex_id = $_GET['complex_id'];
$store_image = $_GET['store_image'];
$mobile = $_GET['mobile'];

$store = new store();
$store->store_insert($store_name, $area_id, $complex_id, $store_image, $mobile);