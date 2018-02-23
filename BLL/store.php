<?php

include_once '../DAL/my_db.php';

class store extends my_db {

    public function store_insert($store_id, $store_name, $area_id, $complex_id
    , $store_image, $mobile) {
        $this->mod_data('insert into store(store_id, store_name, area_id, '
                . 'complex_id, store_image, mobile) values(?, ?, ?, ?, ?, ?)'
                , 'isiiss', array(&$store_id, &$store_name, &$area_id
            , &$complex_id, &$store_image, &$mobile));
    }

}
