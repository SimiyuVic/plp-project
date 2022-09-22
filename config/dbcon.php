<?php

  $host     = "localhost";
  $username = "root";
  $password = "";
  $database = "ecommerce_db";

  //creating database connection
  $con = mysqli_connect($host, $username, $password, $database);

  //check database fann_get_total_connections
  if(!$con){
    die("Connection failed: ".mysqli_connect_error());
  }
 
 ?>
