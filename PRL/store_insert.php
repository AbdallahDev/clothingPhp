<?php

include_once '../BLL/store.php';

//here i'll check for the complex value, because some stores don't exist in 
//complexes, so in that case i'll set the complex id to 0, that means in the 
//database it dosen't belong to any complex.
$complex_id = 0; //this is the default value for the complex id

//bellow i declared all the variable that will be inserted in the store table
//from the get method
$store_name = $_GET['store_name'];
$area_id = $_GET['area_id'];
$complex_id = 0;
$store_image = $_GET['store_image'];
$mobile = $_GET['mobile'];

//here if the complex id set the complex the value of the comple_id variable 
//will be the value from the $_GET['complex_id'], else it will keep the default
//value zero
if (isset($_GET['complex_id']) && $_GET['complex_id'] != 0) {
    $complex_id = $_GET['complex_id'];
}

$store = new store();
$store->store_insert($store_name, $area_id, $complex_id, $store_image, $mobile);