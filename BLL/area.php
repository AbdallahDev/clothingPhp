<?php

include_once '../DAL/my_db.php';

class area extends my_db {

    //here by this function i'll select all the areas from the db based on the 
    //governorate id
    public function area_select_governorate_id($governorate_id) {
        return $this->get_data("SELECT * FROM `area` WHERE governorate_id = ?"
                        , "i", array(&$governorate_id));
    }

}
