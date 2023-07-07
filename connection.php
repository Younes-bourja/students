<?php $con = new mysqli("localhost","root","","cour");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
  ?>