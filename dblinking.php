<?php 
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='awards';//enter the name of your database
$check=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if($check)
{
  //  echo "Connection successful";
}
else {
    die(mysqli_error($check));
}
?>