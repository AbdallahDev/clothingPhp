<?php

include_once '../BLL/area.php';

//i declared object from the area class to be used later.
$area = new area();

$rs = $area->area_select_governorate_id($_GET['governorate_id']);
$array = array(); //this array to store the results from the db
while ($row = $rs->fetch_assoc()) {
    array_push($array, $row);
}

echo json_encode($array);
