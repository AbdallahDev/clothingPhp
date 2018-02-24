<?php

include_once '../BLL/store_clothing_section.php';
$store_clothing_section = new store_clothing_section();

if (isset($_GET['men']) &&
        $store_clothing_section->check_if_not_exist($_GET['store_id']
                , $_GET['men']) == 1) {
    $store_clothing_section->store_clothing_section_insert($_GET['store_id']
            , $_GET['men']);
} elseif (!isset($_GET['men']) &&
        $store_clothing_section->check_if_not_exist($_GET['store_id']
                , $_GET['men']) != 1) {
    
}
