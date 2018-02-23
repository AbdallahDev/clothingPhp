<?php

include_once '../DAL/my_db.php';

class store extends my_db {

    //here by this function i get the max id stored in the store db table,
    //to be able to decide the next id of the next stored store.
    public function store_max_id_select() {
        return $this->get_all_data('SELECT MAX(store_id) FROM store');
    }

    public function store_insert($store_id, $store_name, $area_id, $complex_id
    , $store_image, $mobile) {
        $this->mod_data('insert into store(store_id, store_name, area_id, '
                . 'complex_id, store_image, mobile) values(?, ?, ?, ?, ?, ?)'
                , 'isiiss', array(&$store_id, &$store_name, &$area_id
            , &$complex_id, &$store_image, &$mobile));
    }

}
