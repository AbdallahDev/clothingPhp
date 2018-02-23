<?php

$con = new mysqli("localhost", "root", "", "clothing");

mysqli_query($con, "SET NAMES 'utf8'");
mysqli_query($con, 'SET CHARACTER SET utf8');

//here i'll check for the complex value, because some stores don't exist in 
//complexes, so in that case i'll set the complex id to 0, that means in the 
//database it dosen't belong to any complex.
$complex_id = 0;//this is the default value for the complex id

//here if the complex id set the complex the value of the comple_id variable 
//will be the value from the $_GET['complex_id'], else it will keep the default
//value zero
if (isset($_GET['complex_id']) && $_GET['complex_id'] != 0) {
    $complex_id = $_GET['complex_id'];
}

$statement = $con->prepare("insert into store(store_name, area_id, complex_id, "
        . "store_image, mobile) values(?, ?, ?, ?, ?)");
$statement->bind_param("siiss", $_GET['store_name'], $_GET['area_id'], 
        $complex_id, $_GET['store_image'], $_GET['mobile']);
$statement->execute();
