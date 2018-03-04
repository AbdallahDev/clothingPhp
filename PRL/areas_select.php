<?php

include_once '../BLL/area.php';

//i declared object from the governorate class to be used later.
$governorate = new governorate();

$rs = $governorate->governorate_select_all();
$array = array(); //this array to store the results from the db
while ($row = $rs->fetch_assoc()) {
    array_push($array, $row);
}

echo json_encode($array);
