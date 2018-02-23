<?php

include_once '../BLL/store.php';

//i declared object from the store class to be used later.
$store = new store();
$max_id_rs = $store->store_max_id_select();
$max_store_id = $max_id_rs->fetch_assoc();


echo $max_store_id['store_id'] + 1;
