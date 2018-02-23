<?php

include_once '../DAL/my_db.php';

class users extends my_db {
    
    public function store_insert($store_name, $area_id, $complex_id, 
            $store_image, $mobile) {
        $this->mod_data('insert into store(store_name, area_id, complex_id, "
        . "store_image, mobile) values(?, ?, ?, ?, ?)', "siiss", 
                array(&$store_name, &$area_id, &$complex_id, &$store_image, 
                    &$mobile));
    }
}
