<?php
define('DB_SERVER','localhost');
define('DB_USER','harsh');
define('DB_PASS' ,'Shiv#1234');
define('DB_NAME','newsportal');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>