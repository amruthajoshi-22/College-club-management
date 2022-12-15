<?php
$con=mysqli_connect("localhost","root","");
 if(!$con)
 {
     die("could not connect ".mysqli_connect_error());
 }

mysqli_select_db($con,"trefle");
?>