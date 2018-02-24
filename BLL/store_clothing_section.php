<?php

include_once '../DAL/my_db.php';

class store_clothing_section extends my_db {

    function delete_all_store_clothing_section($store_id) {
        $this->mod_data('delete from store_clothing_section where store_id = ?'
                , 'i', array(&$store_id));
    }

    public function check_if_not_exist($store_id, $clothing_section_id) {
        $result = $this->get_data('select * from store_clothing_section '
                . 'where store_id = ? and clothing_section_id = ?', 'ii'
                , array(&$store_id, &$clothing_section_id));
        if ($result->num_rows == 0)
            return TRUE;
    }

    public function store_clothing_section_insert($store_id
    , $clothing_section_id) {
        $this->mod_data('insert into store_clothing_section(store_id, '
                . 'clothing_section_id) values(?, ?)', 'ii'
                , array(&$store_id, &$clothing_section_id));
    }

}
