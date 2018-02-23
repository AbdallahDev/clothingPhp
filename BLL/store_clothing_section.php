<?php

include_once '../DAL/my_db.php';

class store_clothing_section extends my_db {
    
    public function store_clothing_section_insert($store_id
    , $clothing_section_id) {
        $this->mod_data('insert into store_clothing_section(store_id, '
                . 'clothing_section_id) values(?, ?)', 'ii'
                , array(&$store_id, &$clothing_section_id));
    }

}
