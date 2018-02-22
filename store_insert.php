<?php

$con = new mysqli("localhost", "root", "", "clothing");

mysqli_query($con, "SET NAMES 'utf8'");
mysqli_query($con, 'SET CHARACTER SET utf8');

$statement = $con->prepare("insert into store(store_name, area_id, complex_id, "
        . "store_image) values(?, ?, ?, ?)");
$statement->bind_param("siis", $_GET['store_name'], $_GET['area_id'], 
        $_GET['complex_id'], $_GET['store_image']);
$statement->execute();
