<?php

include_once '../BLL/store.php';

//i declared object from the store class to be used later.
$store = new store();

//here i'll check for the complex value, because some stores don't exist in 
//complexes, so in that case i'll set the complex id to 0, that means in the 
//database it dosen't belong to any complex.
$complex_id = 0; //this is the default value for the complex id
//
//for the sotre id i'll save the max store id in the database plus 1
//to make sure that all the id's aren't identical, because it's the primary key,
//and i can't make it auto increament because i'll needed later.
$max_id_rs = $store->store_max_id_select();
$max_store_id = $max_id_rs->fetch_assoc();
$store_id = $max_store_id['store_id'] + 1;

//bellow i declared all the reset variable that will be inserted in the store table
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

$store->store_insert($store_id, $store_name, $area_id, $complex_id, $store_image, $mobile);


//bellow i'll write the code related to add store_clothing_section in the db 
//table
include_once '../BLL/store_clothing_section.php';
$store_clothing_section = new store_clothing_section();

//by this line i'll delete all the related sections for a specific store 
//from the store_clothing_section db table, because some of sections could be 
//edited and uncheked
$store_clothing_section->delete_all_store_clothing_section($_GET['store_id']);

if (isset($_GET['men']) &&
        $store_clothing_section->check_if_not_exist($_GET['store_id']
                , $_GET['men']) == TRUE) {
    $store_clothing_section->store_clothing_section_insert($_GET['store_id']
            , $_GET['men']);
}
if (isset($_GET['women']) && $_GET['women'] == 2 &&
        $store_clothing_section->check_if_not_exist($_GET['store_id']
                , $_GET['women']) == TRUE) {
    $store_clothing_section->store_clothing_section_insert($_GET['store_id']
            , $_GET['women']);
}
if (isset($_GET['children']) && $_GET['children'] == 3 &&
        $store_clothing_section->check_if_not_exist($_GET['store_id']
                , $_GET['children']) == TRUE) {
    $store_clothing_section->store_clothing_section_insert($_GET['store_id']
            , $_GET['children']);
}