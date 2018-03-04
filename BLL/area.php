<?php

include_once '../DAL/my_db.php';

class area extends my_db {

    //here by this function i'll select all the governorates from the db
    public function governorate_select_all() {
        return $this->get_all_data('SELECT * FROM `governorate`');
    }

}
