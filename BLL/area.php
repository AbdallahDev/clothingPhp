<?php

include_once '../DAL/my_db.php';

class area extends my_db {

    //here by this function i'll select all the areas from the db
    public function area_select_all() {
        return $this->get_all_data('SELECT `area_id`, `area_name` FROM `area`');
    }

}
