<?php

include_once '../BLL/store_clothing_section.php';
$store_clothing_section = new store_clothing_section();

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